<?php

// sets up the new role for uploaders
$exist_uploader_role = get_role('uploader');
if(empty($exist_uploader_role)) {
	add_role('uploader', __('Uploader'),
		array(
			'read' => true,
			'publish_posts' => true,
			'edit_posts' => true,
			'delete_posts' => true,
			'edit_published_posts' => true,
			'delete_published_posts' => true,
			'upload_files' => true,
			'unfiltered_upload' => true,
			'edit_attachments' => true,
			'delete_attachments' => true,
			'make_video_thumbnails' => true,
			'encode_videos' => true,
			// 'edit_themes' => false, // false denies this capability. User can’t edit your theme
			// 'install_plugins' => false, // User cant add new plugins
			// 'update_plugin' => false, // User can’t update any plugins
			// 'update_core' => false // user cant perform core updates
		)
	);
	
	// sets this role as the default for new users
	update_option('default_role', 'uploader');
}


// overrides the code in the parent theme so it only shows for admins
// stops users from featuring their own videos on the home page
function videohost_add_custom_meta_box() {
	$user = wp_get_current_user();
	if (in_array('administrator', (array)$user->roles)) {
		add_meta_box("demo-meta-box", "Post Options", "videohost_custom_meta_box_markup", "post", "side", "high", null);
	}
}
add_action("add_meta_boxes", "videohost_add_custom_meta_box");

// when querying posts in dashboard, shows posts only from logged in user
// stop them seeing anything uploaded by anyone else
function posts_for_current_author($query) {
    global $pagenow;
 
    if( 'edit.php' != $pagenow || !$query->is_admin )
        return $query;
 
    if( !current_user_can( 'edit_others_posts' ) ) {
        global $user_ID;
        $query->set('author', $user_ID );
    }
    return $query;
}
add_filter('pre_get_posts', 'posts_for_current_author');

// Show only posts and media related to logged in author
function query_set_only_author($query) {

	global $current_user, $pagenow;

	if (!($pagenow == 'edit.php' || $pagenow == 'upload.php' || 
			($pagenow=='admin-ajax.php' && !empty($_POST['action']) && $_POST['action']=='query-attachments'))) {
		return;
	}

	// do not limit user with Administrator role
	if (current_user_can('administrator')) {
		return;
	}    

	$suppressing_filters = $query->get('suppress_filters'); // Filter suppression on?

	if (!$suppressing_filters && is_admin() && current_user_can('edit_posts') && !current_user_can('edit_others_posts')) {
		$query->set('author', $current_user->ID);
	}
}
add_action('pre_get_posts', 'query_set_only_author');

// removes menu items for uploaders
function remove_admin_menu_items() {
	$user = wp_get_current_user();
	if (in_array('uploader', (array)$user->roles)) {
		// the user has the uploader role

		// remove comments
		remove_menu_page( 'edit-comments.php' );

		// remove tools
		remove_menu_page( 'tools.php' );
	}
}
add_action('admin_menu', 'remove_admin_menu_items');

// removes dashboard panels for uploaders
function remove_admin_dashboard_panels() {
	$user = wp_get_current_user();
	if (in_array('uploader', (array)$user->roles)) {
		// the user has the uploader role

		// removes other panels
		remove_meta_box('dashboard_right_now', 'dashboard', 'normal');// Remove "At a Glance"
		remove_meta_box('dashboard_activity', 'dashboard', 'normal');// Remove "Activity" which includes "Recent Comments"
		remove_meta_box('dashboard_quick_press', 'dashboard', 'side');// Remove Quick Draft
		remove_meta_box('dashboard_primary', 'dashboard', 'core');// Remove WordPress Events and News

		// removes the ads widget
		remove_meta_box('advads_dashboard_widget', 'dashboard', 'side');
	}
}
add_action('admin_head', 'remove_admin_dashboard_panels');