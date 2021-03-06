# [DB Starter Core](https://www.donbranco.fi/)

DB Starter Core is a plugin designed to bootstrap the workflow used in projects at Don & Branco.

This plugin can be used by anyone but is built according to specific guidelines set by Don & Branco.

The plugin includes various tools to help build new WordPress sites with ACF. It automatically creates layouts of new field groups, adds it to a defined flexible content field as a clone and also generates PHP or Laravel Blade templates of your layouts with dynamic variables.

## Requirements

The plugin is dependant on ACF Pro (Advanced Custom Fields) and optionally ACF Extended (although recommended). The plugin makes heavy use of ACF Flexible fields so [Classic Editor](https://wordpress.org/plugins/classic-editor/) is also recommended but the plugin works with WordPress Gutenberg editor as well.

## Installation

1. Install [ACF Pro](https://www.advancedcustomfields.com/) And optionally [ACF Extended](https://wordpress.org/plugins/acf-extended/)
2. Clone this repo to your /plugins folder
3. Activate all plugins!

After activating the plugin no other actions are needed. (On later versions you will be able to rename the dynamically generated acf fields yourself)

## Creating blocks

DB Starter Core creates a local field group which includes a single Flexible Content "Site Fields" subfield. The flexible content is automatically populated from newly created Field Groups (using a clone field).

===Example===

1. Create a field group (a block) called "Page Hero"
2. Create desired subfields for your new block eg. an Image field, A Text Field.
3. Type in "block" as the description of your field group.

Typing "block" in the description field ties the field group to the locally created Flexible Field as a clone. You can edit the new field group anytime and the flexible field will be updated accordingly. 

4. The newly created "Page Hero" block is now a defined layout called "page_hero" which can be accessed in your php template.

## Usage in templates

1. In your WordPress theme you can access the locally created field group with `get_field('db_site_blocks')`

===Example===

Regular PHP
```php
$site_blocks = get_field('db_site_blocks');

if($site_blocks) {
    while(have_rows('db_site_blocks')) {
        the_row();

        get_template_part('blocks', get_row_layout());
    }
}
```

Laravel Blade
```php
@php
  $site_blocks = get_field('db_site_blocks');
@endphp

@if($site_blocks)
  @while(have_rows('db_site_blocks')) @php the_row() @endphp
    @includeIf('blocks.'.get_row_layout())
  @endwhile
@endif
```

2. Now you can create the php file for your singular block (layout), in my example it's located in blocks folder.
eg. (blocks/page_hero.blade.php)

## Template generation

The tool includes an option to automatically generate php templates from your site layouts. To access the tools you need to have an .ENV file in your project root with WP_ENV set as "development". 

===Example===

1. Create a page with your desired layout and update the page.
2. Click on "Generate PHP" or "Generate Blade" button in the DB Page Tools section on the right side.
3. Navigate to `/plugins/dbstarter-core/templates/` folder to find your generated templates.

The tool automatically generates extra fields based on your layout field types. For example an image field generates a $size variable `$size = wp_is_mobile() ? 'medium' : 'large';`

page_hero.php example
```php
<?php
    $title = get_sub_field('title');
    $image = get_sub_field('image'); 

    $size = wp_is_mobile() ? "medium" : "large";
	
?>
<div class="db_block block-page_hero">

</div>
```

On later versions you can customize the block templates directly from WordPress.

## Other Page tools

===Search from wp codex===

Allows you to directly search from WP Codex based on your keyword.

===Loremize===

Copies Lorem Ipsum to your clipboard.

## DB Settings

The plugin automatically creates an ACF options page that includes various nice to have settings for theme building. 

Currently the plugin includes the following settings

===Common===

===Media===

1. Add media size
- Allows you to add WordPress media sizes directly from the settings page.

===Checklist===

Checklist includes a list of items to check before releasing your site. The list is based on WP ENGINE's Ultimate Wordpress Checklist which can be found [here](https://wpengine.com/wp-content/uploads/2016/03/WP-EBK-PreLaunchCheck-Torque-v05-PUB.pdf).

## Upcoming

===Manifest.json===

Later you can automatically generate a web manifest file for your project based on a selected image.

## Version history

=0.4.1= (9.6.2021) - Fixed an issue where a new key was generated for a field group after saving. Now a new block is assigned a static key based on the field groups key string.

=0.4= (31.5.2021) - Completed checklist view and added a checklist dashboard widget to display current Dev-status. Added Loremize and WP Codex search to page tools.

=0.3= (26.5.2021) - Added a checklist section under DB Settings. This will be completed in the next update. A widget for current development status is also under construction.

=0.2= (24.5.2021) - Added DB Settings page under "Tools" with snippets for your project. This will be gradually updated with useful features.

=0.1= (18.5.2021) - First alpha release with basic template generation

## Credits

Developer: Jere Hirvonen