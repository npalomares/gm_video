<?
function weekly_rap_videos_init() {
	register_taxonomy(
		'Weekly Rap',
		'video',
		array(
			'label' => __( 'Weekly Rap Video' ),
			'rewrite' => array( 
				'slug' => 'weekly-rap',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'weekly_rap_videos_init' );
?>