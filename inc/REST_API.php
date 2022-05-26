<?php
function wp_menu_route() {
    $menuLocations = get_nav_menu_locations(); // Get nav locations set in theme, usually functions.php)
    $menuID = $menuLocations['menu-1']; // Get the *primary* menu added in register_nav_menus()
    $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
    return $primaryNav;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'menus', '/getg__main_menu', array(
        'methods' => 'GET',
        'callback' => 'wp_menu_route',
    ) );
} );
