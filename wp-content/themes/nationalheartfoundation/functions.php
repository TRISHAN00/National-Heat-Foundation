<?php
/**
 * boilerTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package boilerTheme
 */


//update theme requirements
//custom here
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
@ini_set( 'max_input_vars' , 5000 );




// Theme Version
require_once get_template_directory() . '/inc/version.php';



// Theme Features
require_once get_template_directory() . '/inc/themefeatures/all-features.php';




// Theme Siderbar , Widgets
require_once get_template_directory() . '/inc/themefeatures/widgets-list.php';




// Theme Scripts and Jquery
require_once get_template_directory() . '/inc/themefeatures/theme-scripts.php';




//show required plugin install message
require_once get_template_directory() . '/inc/requires-plugin/example.php';




//show required plugin install message
require_once get_template_directory() . '/inc/themefeatures/others-features.php';



//codestar framework registrer
require_once get_theme_file_path() . '/inc/framework/codestar-framework-master/codestar-framework.php';




// themeOption from codestare framework
require_once get_template_directory() . '/inc/themefeatures/theme-option.php';




//for custom elementor widget or addons
require_once get_template_directory() . '/inc/elementorAddons/index.php';






//for custom post and custom taxonomy
require_once get_template_directory() . '/inc/themefeatures/theme-custom-post.php';








// for not showing admin bar with admin login view
add_filter('show_admin_bar', '__return_false');


