<?php
/*
Plugin Name: DBStarter Core
Plugin URI:  https://www.donbranco.fi/
Description: Bootstrapping your workflow
Version:     1.0
Author:      Jere Hirvonen
Author URI:  https://www.donbranco.fi/
License:     GPL2
License URI: 
*/

/**
 * If this file is called directly, then abort execution.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

use function Env\env;

define ( 'DBSTARTER_MAIN_FILE' , __FILE__ );
define ( 'PLUGIN_NAME', __FILE__ );

class DBStarter_Core {

    public function __construct() {
        register_activation_hook( DBSTARTER_MAIN_FILE, array( $this, 'plugin_activate') );
        // register_deactivation_hook( DBSTARTER_MAIN_FILE, array( $this, 'plugin_deactivate') );
        add_action('admin_menu', array($this, 'create_menu'));
        add_action('init', array($this, 'register_core_fields'));
        add_action('init', array($this, 'register_user_fields'), 20);
        add_action('acfe/fields/button/key=db_generate_template_button', array($this, 'db_generate_template_ajax'), 30, 2);
        add_action('acfe/fields/button/key=db_generate_template_button_blade', array($this, 'db_generate_template_blade_ajax'), 30, 2);

        add_action('acf/input/admin_enqueue_scripts', array($this, 'my_acf_admin_enqueue_scripts'));

        // add_action('admin_enqueue_scripts', array($this, 'db_plugin_scripts'));
    }

    function db_plugin_scripts() {
        //
    }

    function my_acf_admin_enqueue_scripts() {
        wp_enqueue_script( 'my-acf-input-js', plugins_url( '/assets/js/acf.js', __FILE__ ), false, '1.0.0' );
    }

    function plugin_activate() {
        if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) and current_user_can( 'activate_plugins' ) and !is_plugin_active('acf-extended/acf-extended.php') ) {
            // Stop activation redirect and show error
            wp_die('Sorry, but this plugin requires the Parent Plugin to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
        }
    }

    function generate_template($post_id, $type) {
        $site_fields = get_field('db_site_blocks', $post_id);
        $used_layouts = wp_list_pluck( $site_fields, 'acf_fc_layout');
        
        $site_field_objects = get_field_objects($post_id);
        
        $page_layouts = $site_field_objects['db_site_blocks']['layouts'];

        if($page_layouts) {
            foreach($page_layouts as $layout) {

                $name = $layout['name'];
                if(in_array($name, $used_layouts)) {
                    $fields = $layout['sub_fields'];

                    $field_variables = '';
                    $field_options = '';
    
                    if($fields) {
                        foreach($fields as $field) {
                            $fname = $field['name'];
                            $ftype = $field['type'];
                            $field_variables .= "$${fname} = get_sub_field('${fname}'); \n\t";
    
                            if($ftype == 'image') {
                                $field_options .= '$size = wp_is_mobile() ? "medium" : "large";'."\n\t";
                            }
                        }
                    }
                    
                    $extension = '';
    
                    if($type === 'php') {
                        $block_template = file_get_contents(WP_PLUGIN_DIR .'/dbstarter-core/templates/block.html');
                        // $block_template = sprintf($block_template, $name);
                        $extension = '.php';
                    } elseif($type === 'blade') {
                        $block_template = file_get_contents(WP_PLUGIN_DIR .'/dbstarter-core/templates/block_blade.html');
                        $extension = '.blade.php';
                    }
    
                    $block_template = str_replace('#name#', $name, $block_template);
                    $block_template = str_replace('#fields#', $field_variables, $block_template);
                    $block_template = str_replace('#options#', $field_options, $block_template);
    
                    $fp=fopen(WP_PLUGIN_DIR .'/dbstarter-core/templates/'. $name . $extension,'w');
                    fwrite($fp, $block_template);
                    fclose($fp);
                }
            }
        }
    } 


    function db_generate_template_blade_ajax($field, $post_id) {

        $this->generate_template($post_id, 'blade');

        wp_send_json_success('Success!');
    }

    function db_generate_template_ajax($field, $post_id) {

        $this->generate_template($post_id, 'php');

        wp_send_json_success('Success!');
    }

    public function create_menu() {
        add_submenu_page(
            'tools.php',
            __('DBStarter', 'dbstarter'),
            'DBStarter',
            'manage_options',
            'dbstarter-settings',
            array($this, 'display_admin_page'),
            'dashicons-admin-tools'
        );
    }

    public function display_admin_page() {
        // Empty for now
        $field_groups = acf_get_field_groups();
        $block_fields = array();

        $block_key = 'block';

        foreach($field_groups as $group) {
            if($group['description'] == $block_key) {
                array_push($block_fields, $group);
            }
        }

        $layouts = array();

        if($block_fields) {
            foreach($block_fields as $layout) {
                $fields = acf_get_fields($layout);

                $formatted_fields = array();

                if($fields) {
                    foreach($fields as $field) {
                        $field_data =
                            array (
                                'key' => $field['key'],
                                'label' => $field['label'],
                                'name' => $field['name'],
                                'type' => $field['type'],
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                                ),
                                'default_value' => $field['default_value'],
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            );
                        array_push($formatted_fields, $field_data);
                    }
                }

                echo '<pre>';
                print_r($formatted_fields);
                echo '</pre>';
            }
        }
    }

    public function get_layouts() {
        // Return found blocks as layouts
        $field_groups = acf_get_field_groups();
        $block_fields = array();

        $block_key = 'block';

        foreach($field_groups as $group) {
            if($group['description'] == $block_key) {
                array_push($block_fields, $group);
            }
        }

        $layouts = array();

        if($block_fields) {
            foreach($block_fields as $layout) {
                $fields = acf_get_fields($layout);

                $formatted_fields = array();

                if($fields) {
                    foreach($fields as $field) {
                        $field_data =
                            array (
                                'key' => 'db_' . $field['name'],
                                'label' => $field['label'],
                                'name' => $field['name'],
                                'type' => $field['type'],
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => $field['default_value'],
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            );

                        array_push($formatted_fields, $field_data);
                    }
                }

                $key = 'db_field_' . bin2hex(openssl_random_pseudo_bytes(3));
                $name = strtolower($layout['title']);
                $formatted_name = preg_replace('/\s+/', '_', $name);
                $data = array (
                    'key' => 'db_field_' . $formatted_name,
                    'name' => $formatted_name,
                    'label' => $layout['title'],
                    'display' => 'block',
                    'sub_fields' => $formatted_fields,
                    'min' => '',
                    'max' => '',
                );
                array_push($layouts, $data);
            }
        }

        return $layouts;
    }

    public function register_core_fields() {
        //
        $layouts = $this->get_layouts();

        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'site_fields',
                'title' => 'Site Blocks',
                'fields' => array (
                    array (
                        'key' => 'db_flexible_block',
                        'label' => 'Site blocks',
                        'name' => 'db_site_blocks',
                        'type' => 'flexible_content',
                        'layouts' => $layouts,
                    )
                ),
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                    ),
                ),
                'hide_on_screen' => array(
                    0 => 'the_content',
                )
            ));

            if(env('WP_ENV') == 'development') {
                acf_add_local_field_group(array(
                    'key' => 'db_generate_template',
                    'title' => 'DB Page tools',
                    'fields' => array(
                        array(
                            'key' => 'db_generate_template_button',
                            'label' => 'Generate plain PHP',
                            'name' => 'generate',
                            'type' => 'acfe_button',
                            'button_ajax' => true,
                            'instructions' => 'Generates Don & Branco approved PHP templates'
                        ),
                        array(
                            'key' => 'db_generate_template_button_blade',
                            'label' => 'Generate Blade',
                            'name' => 'generate_blade',
                            'type' => 'acfe_button',
                            'button_ajax' => true,
                            'instructions' => 'Generates Don & Branco approved Blade templates'
                        ),
                        array(
                            'key' => 'db_generate_lorem',
                            'label' => 'Loremize',
                            'name' => 'loremize',
                            'type' => 'acfe_button',
                            'button_ajax' => true,
                            'instructions' => 'Autofill selected blocks with lorem ipsum'
                        ),
                    ),
                    'location' => array (
                        array (
                            array (
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'page',
                            ),
                        ),
                    ),
                    'hide_on_screen' => array(
                        0 => 'the_content',
                    ),
                    'position' => 'side',
                ));
            }
            
        endif;
    }

}

new DBStarter_Core();