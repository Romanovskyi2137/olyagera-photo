<?php
// imports
require get_template_directory() . '/inc/cpt-albums.php';
// 
function theme_enqueue_styles() {
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_fonts () {
    wp_enqueue_style(
        'google-fonts', 
        'https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Montserrat:wght@400;500;700&display=swap&subset=cyrillic',
        false 
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_fonts');

function theme_enqueue_scripts () {
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function add_menus () {
    register_nav_menus(
        array(
            "primary" => "Primary Menu"
        )
    );
}
add_action("init", "add_menus");

add_theme_support( 'title-tag' );

// smush plugin config
add_action('after_switch_theme', function() {
    $settings = get_option('wp_smush_settings', []);

    $settings['resize'] = [
        'enabled' => true,
        'width'   => 2500,
        'height'  => 2500
    ];

    $settings['backup'] = true;
    $settings['auto'] = true; // авто-оптимізація
    $settings['lazy_load']['enabled'] = true;

    update_option('wp_smush_settings', $settings);
});
// 

if (class_exists('ACF')) {

    // Save fields to json files
    add_filter('acf/settings/save_json', function ($path) {
        return get_template_directory() . '/acf-json';
    });

    // Load fields from json files
    add_filter('acf/settings/load_json', function ($paths) {
        // Remove the original path (optional).
        unset($paths[0]);

        // Append the new path and return it.
        $paths[] = get_template_directory() . '/acf-json';;

        return $paths;
    });
}