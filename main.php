<?php
/**
 * Plugin Name: bS Gutenberg Gallery Lightbox
 * Plugin URI: https://bootscore.me/plugins/bs-gutenberg-gallery-lightbox/
 * Description: Adds a Lightbox to the Gutenberg Gallery Block. Gallery settings must set to "Link to: Media File" in the right panel. Thnx <a href="https://go-around.de/blog/gutenberg-gallery-lightbox/">Johannes Kinast</a>
 * Author: bootScore
 * Author URI: https://bootscore.me
 * Version: 5.0.0.2
 */




// Register Styles and Scripts
function bs_gglb_scripts() {
    
    wp_enqueue_script( 'baguette-js', plugins_url( '/js/baguetteBox.min.js' , __FILE__ ), array( 'jquery' ), '1.0', true );

    wp_register_style( 'baguette-css', plugins_url('css/baguetteBox.min.css', __FILE__) );
        wp_enqueue_style( 'baguette-css' );
        
        }
    
add_action('wp_enqueue_scripts','bs_gglb_scripts');


