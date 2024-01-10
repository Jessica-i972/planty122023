<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function personnaliser_menu_header($items, $args) {
    // Vérifie si l'utilisateur est connecté
    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
        // Construit l'élément "Admin"
        $admin_item = '<li class="menu-item"><a class="menu-link" href="' . esc_url(admin_url()) . '">Admin</a></li>';

        // Trouve la position du 1er item de "</li>" dans le menu
        $position_first_item_li = strpos($items, '</li>');

        // Insère l'élément "Admin" après la première occurrence de "</li>"
        $items = substr_replace($items, $admin_item, $position_first_item_li, 0);
    }

    return $items;
}

// Ajoute le filtre pour le hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'personnaliser_menu_header', 10, 2);
?>
