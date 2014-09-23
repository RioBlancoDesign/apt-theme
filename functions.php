<?php
function avada_child_scripts() {
	if ( ! is_admin() && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
		$theme_info = wp_get_theme();
		wp_enqueue_style( 'avada-child-stylesheet', get_template_directory_uri() . '/style.css', array(), $theme_info->get( 'Version' ) );
	}
}
add_action('wp_enqueue_scripts', 'avada_child_scripts');



//wp_enqueue_script('jquery');

//wp_enqueue_script('fadeIn', $template_url.'/wp-content/themes/Avada-Child-Theme/js/child-js.js', array('jquery'));


wp_register_script( 'child-js', $template_url.'/wp-content/themes/Avada-Child-Theme/js/child-js.js', 'jquery', "1", true);

wp_enqueue_script( 'child-js' );