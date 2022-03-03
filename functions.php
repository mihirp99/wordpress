<?php 

//include 'config/config.php';

register_nav_menu('main-menu', 'Main Menu');

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
// <?php 
//                     wp_nav_menu([
//                         'menu' => 'main-menu',
//                         'theme_location' => 'main-menu',
//                         'container' => 'div',
//                         'container_id' => 'navbarsExample09',
//                         'container_class' => 'collapse navbar-collapse',
//                         'menu_id' => false,
//                         'menu_class' => 'navbar-nav mr-auto',
//                         'depth' => 2
//                     ])

                
//                




?>