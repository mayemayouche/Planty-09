<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css');
}

add_filter('wp_nav_menu_items', 'add_admin_link_to_menu');
function add_admin_link_to_menu($items)
{
    if (current_user_can('manage_options')) {
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href="' . esc_url(admin_url()) . '">Admin</a></li>';
        $items = $admin_link . $items;
    }
    return $items;
}
?>
