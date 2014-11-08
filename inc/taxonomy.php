<?
function sealfit_videos_init() {
	register_taxonomy(
		'Weekly Workouts',
		'video',
		array(
			'label' => __( 'Weekly Workouts' ),
			'rewrite' => array( 
				'slug' => 'weekly-workouts',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
	
	register_taxonomy(
		'Training',
		'video',
		array(
			'label' => __( 'Training' ),
			'rewrite' => array( 
				'slug' => 'training',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'Events',
		'video',
		array(
			'label' => __( 'Events' ),
			'rewrite' => array( 
				'slug' => 'events',
				'show_ui' => true,
			),
			'hierarchical' => true,
		)
	);
	
}
add_action( 'init', 'sealfit_videos_init' );
?>