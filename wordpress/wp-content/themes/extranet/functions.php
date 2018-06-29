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

function extranet_sidebar_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Page Footer Column 1', 'extranet' ),
		'id'            => 'page-footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'extranet' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'extranet_sidebar_init' );

function remove_admin_bar() {
	// if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	// }
}
add_action('after_setup_theme', 'remove_admin_bar');