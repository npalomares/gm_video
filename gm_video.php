<?
/*
Plugin Name: GM Video Gallery
Plugin URI: http://www.gaslampmedia.com
Description: Video Gallery custom post type.
Version: 1.0
Author: Thai Yin
Author URI: http://www.gaslampmedia.com/
License: All Rights Reserved
*/
require("inc/post_type.php");
require("inc/meta_boxes.php");
require("inc/taxonomy.php");
require("inc/shortcodes.php");
//require("inc/admin.php");

function video_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //register slideshow css
    wp_register_style( 'videoStyle', $plugin_url . 'inc/css/modal.css' );
    wp_enqueue_style( 'videoStyle' );
	
	//load javascript - Uncomment these 2 lines if you're not using Bootstrap 3.0
	   
    //wp_register_script( 'videoScript', $plugin_url . 'inc/js/modal.js' );
    //wp_enqueue_script( 'videoScript' );
}
add_action( 'wp_enqueue_scripts', 'video_scripts' );
?>
