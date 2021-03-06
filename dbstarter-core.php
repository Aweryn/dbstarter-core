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

// use function Env\env;

define ( 'DBSTARTER_MAIN_FILE' , __FILE__ );
define ( 'PLUGIN_NAME', __FILE__ );


class DBStarter_Core {
    public function __construct() {
        include( plugin_dir_path( __FILE__ ) . 'inc/checklist.php');

        register_activation_hook( DBSTARTER_MAIN_FILE, array( $this, 'plugin_activate') );
        // register_deactivation_hook( DBSTARTER_MAIN_FILE, array( $this, 'plugin_deactivate') );
        add_action('admin_menu', array($this, 'create_menu'));
        add_action('acf/init', array($this, 'register_core_fields'));

        // Load checklist fields from a separate file
        // add_action('acf/init', 'db_register_checklist');

            // if(env('WP_ENV') == 'development' || env('WP_ENV') == 'staging') {
                add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
            // }

        // add_action('init', array($this, 'register_user_fields'), 20);
        add_action('acfe/fields/button/key=db_generate_template_button', array($this, 'db_generate_template_ajax'), 30, 2);
        add_action('acfe/fields/button/key=db_generate_template_button_blade', array($this, 'db_generate_template_blade_ajax'), 30, 2);

        add_action('acf/input/admin_enqueue_scripts', array($this, 'my_acf_admin_enqueue_scripts'));

        add_action('acf/render_field/name=my_dynamic_message', 'my_message', 20);
        // add_action('admin_enqueue_scripts', array($this, 'db_plugin_scripts'));

        // Register custom image sizes
        add_action('after_setup_theme', array($this, 'db_core_set_image_sizes'));

    }

    function db_plugin_scripts() {
        //
    }


    function db_core_set_image_sizes() {
        $image_sizes = get_field('db_core_add_media_size', 'option');

        if($image_sizes) {
            foreach($image_sizes as $size) {
                add_image_size( $size['name'], $size['width'], $size['length'], $size['crop'] );
            } 
        }
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

    function get_checklist_fields() {
        return checklist_fields();
    }

    function generate_template($post_id, $type) {
        $site_fields = get_field('db_site_blocks', $post_id);
        $used_layouts = wp_list_pluck( $site_fields, 'acf_fc_layout');
        
        $site_field_objects = get_field_objects($post_id);
        
        $page_layouts = $site_field_objects['db_site_blocks']['layouts'];

        if($page_layouts) {
            foreach($page_layouts as $layout) {

                $name = $layout['name'];
                $name = sanitize_title($name);

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
        // add_submenu_page(
        //     'tools.php',
        //     __('DBStarter', 'dbstarter'),
        //     'DBStarter',
        //     'manage_options',
        //     'dbstarter-settings',
        //     array($this, 'display_admin_page'),
        //     'dashicons-admin-tools'
        // );

        if( function_exists('acf_add_options_page') ) {

            // Register options page.
            $option_page = acf_add_options_page(array(
                'page_title'    => __('DB Core Settings'),
                'parent_slug'   => 'tools.php',
                'menu_title'    => __('DB Settings'),
                'menu_slug'     => 'db-core-settings',
                'capability'    => 'manage_options',
                'redirect'      => false,
                'autoload'      => true,
            ));
        }
    }

    public function display_admin_page() {
        // Empty for now

        echo '//Silence is golden';
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

                $static_key = substr($layout['key'], -4);

                if($fields) {
                    foreach($fields as $field) {

                        $my_key = 'db_field_' . $field['name'] . $static_key;

                        $field_data =
                            array (
                                'key' => $my_key,
                                'label' => $field['label'],
                                'name' => $field['name'],
                                'type' => $field['type'],
                                'instructions' => $field['instructions'],
                                'required' => $field['required'],
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => $field['wrapper']['width'],
                                    'class' => $field['wrapper']['class'],
                                    'id' => $field['wrapper']['id'],
                                ),
                                'default_value' => $field['default_value'],
                                'placeholder' => $field['placeholder'],
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => $field['maxlength'],
                                'readonly' => 0,
                                'disabled' => 0,
                            );

                            if($field['type'] == 'message') {
                                $field_data['message'] = $field['message'];
                                $field_data['new_lines'] = $field['new_lines'];
                            }

                            if($field['type'] == 'acfe_taxonomies') {
                                $field_data['field_type'] = $field['field_type'];
                                $field_data['return_format'] = $field['return_format'];
                                $field_data['allow_null'] = $field['allow_null'];
                            }

                            if($field['type'] == 'flexible_content') {
                                $field_data['layouts'] = $field['layouts'];
                            }
                            
                            if($field['conditional_logic']) {
                                $field_data['conditional_logic'] = $field['conditional_logic'];
                                $field_data['parent'] = $field['parent'];
                            }

                            // Append custom values based on field type
                            if($field['type'] == 'true_false') {                                
                                $field_data['ui'] = 1;
                                $field_data['ui_on_text'] = $field['ui_on_text'];
                                $field_data['ui_off_text'] = $field['ui_off_text'];
                            }

                            if($field['type'] == 'repeater') {
                                $field_data['acfe_repeater_stylised_button'] = $field['acfe_repeater_stylised_button'];
                                $field_data['collapsed'] = $field['collapsed'];
                                $field_data['button_label'] = $field['button_label'];
                                $field_data['layout'] = $field['layout'];
                                $field_data['sub_fields'] = $field['sub_fields'];
                            }

                            if($field['type'] == 'relationship') {
                                $field_data['post_type'] = $field['post_type'];
                                $field_data['taxonomy'] = $field['taxonomy'];
                                $field_data['filters'] = $field['filters'];
                                $field_data['elements'] = $field['elements'];
                                $field_data['return_format'] = $field['return_format'];
                                $field_data['min'] = $field['min'];
                                $field_data['max'] = $field['max'];
                            }

                            if($field['type'] == 'select') {
                                $field_data['choices'] = $field['choices'];
                                $field_data['allow_null'] = $field['allow_null'];
                                $field_data['ui'] = $field['ui'];
                                $field_data['return_format'] = $field['return_format'];
                            }

                        array_push($formatted_fields, $field_data);
                    }
                }

                $name = strtolower($layout['title']);
                $formatted_name = preg_replace('/\s+/', '_', $name);
                $formatted_name = sanitize_title($formatted_name);
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

            // if(env('WP_ENV') == 'development' || env('WP_ENV') == 'staging') {
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
                            'instructions' => 'Generates Don & Branco approved Blade templates',
                            'button_id' => 'button_generate_blade',
                        ),
                        array(
                            'key' => 'db_search_codex_title',
                            'label' => 'Search keyword',
                            'name' => 'search_codex_title',
                            'type' => 'text',
                            'instructions' => 'Search from WP Codex',
                            'wrapper' => array(
                                'id' => 'search_codex',
                            ),
                        ),
                        array(
                            'key' => 'db_search_codex',
                            'name' => 'search_codex',
                            'type' => 'acfe_button',
                            'button_ajax' => true,
                            'button_id' => 'button_codex',
                        ),
                        array(
                            'key' => 'db_generate_lorem',
                            'label' => 'Loremize',
                            'name' => 'loremize',
                            'type' => 'acfe_button',
                            'button_ajax' => true,
                            'instructions' => 'Copy Lorem Ipsum to your clipboard',
                            'button_id' => 'button_lorem',
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
            // }

            if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'db_core_settings',
                    'title' => 'DB Core Settings',
                    'fields' => array (
                        array (
                            'key' => 'db_core_settings_title_common',
                            'label' => 'Common',
                            'type' => 'tab',
                        ),
                        array(
                            'key' => 'db_core_settings_common_message',
                            'label' => 'Help',
                            'type' => 'message',
                            'message' => 'All kinds of general settings for your theme',
                        ),
                        array (
                            'key' => 'db_core_settings_title_media',
                            'label' => 'Media',
                            'type' => 'tab',
                        ),
                        array(
                            'key' => 'db_core_settings_media_message',
                            'label' => 'Help',
                            'type' => 'message',
                            'message' => 'Various settings regarding Media files in your theme',
                        ),
                        // array(
                        //     'key' => 'db_core_generate_manifest',
                        //     'label' => 'Generate Manifest',
                        //     'name' => 'db_generate_manifest',
                        //     'type' => 'acfe_button',
                        //     'button_ajax' => true,
                        //     'instructions' => 'Automatically generate manifest.json file'
                        // ),
                        array(
                            'key'   => 'db_core_add_media_size',
                            'label' => 'Add media size',
                            'name'  => 'db_add_media_size',
                            'type'  => 'repeater',
                            'collapsed' => '',
                            'min' => '',
                            'max' => '',
                            'layout' => 'table',
                            'instructions' => 'Add a usable media size type, name needs to be either "my_media_size" or "my-media-size"',
                            'button_label' => 'Add new image size',
                            'sub_fields' => array(
                                array(
                                    'key' => 'db_core_media_size_name',
                                    'label' => 'Name',
                                    'name' => 'name',
                                    'type' => 'text',
                                    'wrapper' => array(
                                        'width' => '50%',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                                array(
                                    'key' => 'db_core_media_size_width',
                                    'label' => 'Width',
                                    'name' => 'width',
                                    'type' => 'number',
                                    'wrapper' => array(
                                        'width' => '16.6666667%',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                                array(
                                    'key' => 'db_core_media_size_length',
                                    'label' => 'Length',
                                    'name' => 'length',
                                    'type' => 'number',
                                    'wrapper' => array(
                                        'width' => '16.6666667%',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                                array(
                                    'key' => 'db_core_media_size_crop',
                                    'label' => 'Crop',
                                    'name' => 'crop',
                                    'type' => 'true_false',
                                    'wrapper' => array(
                                        'width' => '16.6666667%',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'ui' => 1,
                                    'default_value' => 1,
                                ),
                            )
                        ),
                        array(
                            'key' => 'db_core_settings_title_checklist',
                            'label' => 'Checklist',
                            'type' => 'tab',
                        ),
                        array(
                            'key' => 'db_core_checklist_extra_link',
                            'label' => 'Project link',
                            'name' => 'db_core_project_link',
                            'type' => 'text',
                            'instructions' => 'Insert url for project management.'
                        ),
                        array(
                            'key'       => 'field_my_dynamic_message',
                            'label'     => 'Current checklist status',
                            'name'      => 'my_dynamic_message',
                            'type'      => 'acfe_dynamic_message',
                        ),
                        array(
                            'key' => 'db_core_settings_title_checklist_group',
                            'label' => 'Site checklist',
                            'type' => 'group',
                            'sub_fields' => $this->get_checklist_fields(),
                        ),
                    ),
                    'location' => array (
                        array (
                            array (
                                'param' => 'options_page',
                                'operator' => '==',
                                'value' => 'db-core-settings',
                            ),
                        ),
                    ),
                ));

            endif;
            
        endif;
    }

}

new DBStarter_Core();