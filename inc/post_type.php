<?
function create_video() {
	$labels = array(
		'name'                => 'Video',
		'singular_name'       => 'Video',
		'menu_name'           => 'Videos',
		'parent_item_colon'   => 'Parent Videos:',
		'all_items'           => 'All Videos',
		'view_item'           => 'View Videos',
		'add_new_item'        => 'Add New Video',
		'add_new'             => 'New Video',
		'edit_item'           => 'Edit Video',
		'update_item'         => 'Update Video',
		'search_items'        => 'Search Videos',
		'not_found'           => 'No Videos found',
		'not_found_in_trash'  => 'No Videos found in Trash',
	);

	$args = array(
		'label'               => 'Videos',
		'description'         => 'Video post type',
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
		'menu_icon' => plugins_url( 'gm_icon_bw.png', __FILE__ ),
		'rewrite'            => array( 'slug' => 'videos' ),
	);

	register_post_type( 'video', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_video', 0 );

  	// Custom image size for Sealfit Video Thumbs
	add_image_size('video-gallery-thumb', 720, 460, true);

?>