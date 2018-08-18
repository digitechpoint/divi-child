<?php

/**
 * Load parent Divi styles.
 */
function divi_enqueue_assets() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}
add_action( 'wp_enqueue_scripts', 'divi_enqueue_assets' );

/**
 * Gravity Form Options.
 */
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

?>
