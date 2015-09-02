<?
function gm_video_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'orderby' => 'menu_order',
		'cat' => '',
	), $atts ) );
	
	$db_args = array(
		'post_type' => 'video',
		'order' => 'ASC',
		'orderby' => $orderby,
		'posts_per_page' => -1,
		'meta_key' => '_thumbnail_id'
	);
	
	if($cat != "") {
		$db_args['tax_query'] = array(
			array(
				'taxonomy' => 'Rap',
				'field' => 'slug',
				'terms' => array($cat),
			),
		);
	}

	$video_loop = new WP_Query( $db_args );
	
	$content = "";
	
	if($video_loop->have_posts()) {
	
		$content .= '<div class="row">';
		while( $video_loop->have_posts() ) : $video_loop->the_post();
		
			$thumb = get_the_post_thumbnail( get_the_id(), 'video-thumb', array("class" => "img-responsive"));
			$content .= '<div class="col-sm-4">';
			$content .= '<div class="video-item">';

			$content .= '<a href="#"'.'data-toggle="modal"'.'data-target="#myModal'.get_the_id().'">'.$thumb.'</a>';
			$content .= '<h4 class="text-center video-title"><a href="#"'.'data-toggle="modal"'.'data-target="#myModal'.get_the_id().'">'.get_the_title().'</a></h4>';
			$content .= '</div></div>';


			$content .='<div class="modal fade"'.'id="myModal'.get_the_id().'"'.'tabindex="-1"'.'role="dialog"'.'aria-lableledby="myModallabel"'.'aria-hidden="true">';
			$content .='<div class="modal-dialog">';
			$content .='<div class="modal-content">';
			

			$content .='<div class="modal-header">';
			$content .='<a href="#"'.'class="btn close close-btn"'.'data-dismiss="modal">'."close".'</a>';
			$content .='<h4 class="modal-title">'.get_the_title().'</h4>';
			$content .='</div>'; //close modal header

			$content .='<div class="modal-body">';
			//get the content from each video post
			$content .='<div class="embed-container">'.get_the_content().'</div>';
			$content .='</div>'; //close modal body


			$content .= '</div>'; //close modal-content
			$content .= '</div>'; //close modal-dialog
			$content .= '</div>'; //close modal
		endwhile;
		$content .= '</div>'; //close row
	}
	wp_reset_postdata();
	return $content;
				
}
add_shortcode( 'gm_videos', 'gm_video_shortcode' );
