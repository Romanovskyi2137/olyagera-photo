<?php
function register_albums_cpt() {
    register_post_type('album', [
        'labels' => [
            'name' => 'Альбоми',
            'singular_name' => 'Альбом',
            'add_new_item' => 'Додати альбом',
            'edit_item' => 'Редагувати альбом',
            'view_item' => 'Переглянути альбом',
            'search_items' => 'Шукати альбоми',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'album'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_albums_cpt');