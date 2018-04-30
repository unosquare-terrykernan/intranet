<?php

// installs required plugins
require_once dirname( __FILE__ ) . '/activation.php';

// limits posts and media items to only those from the currently logged in author (for users lower than admin)
require_once dirname( __FILE__ ) . '/uploader-role.php';

// loads the parent styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
