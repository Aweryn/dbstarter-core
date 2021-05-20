# [DB Starter Core](https://www.donbranco.fi/)

DB Starter Core is a plugin designed to bootstrap the workflow used in projects at Don & Branco.

This plugin can be used by anyone but is built according to specific guidelines set by Don & Branco.

The plugin includes various tools to help build new WordPress sites with ACF. It automatically creates layouts of new field groups, adds it to a defined flexible content field as a clone and also generates PHP or Laravel Blade templates of your layouts with dynamic variables.

## Requirements

The plugin is dependant on ACF Pro (Advanced Custom Fields) and optionally ACF Extended (although recommended). The plugin makes heavy use of ACF Flexible fields so [Classic Editor](https://wordpress.org/plugins/classic-editor/) is also recommended but the plugin works with WordPress Gutenberg editor as well.

## Installation

After installing the required plugins you can proceed to activate this plugin. No other actions are needed. (On later versions you will be able to name the plugin generated fields yourself)

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

## Upcoming

===Loremize===

Loremize is an upcoming function that generates Lorem Ipsum for your empty text fields in your layouts. The button currently does nothing :)

## Credits

Developer: Jere Hirvonen