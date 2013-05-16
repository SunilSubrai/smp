<?php 

	//show errors

	ini_set('error_reporting', E_ALL );
	ini_set('display_errors', 1 );

	//includes
	include "classes/class.responsive_meta.php";

	//functions
	function body_classes(){
		$classes = array();

		return $classes;
	}

	function image_url(){
		return get_stylesheet_directory_uri()."/stylesheet/images";
	}

	function return_pdf($post_id=false){
		$pdf = array(
				"url" 	=> "",
				"title" => ""
			);

		if($post_id){
			$get = get_field("pdf", $post);

			if($get){
				$pdf["url"] = $get["url"];
				$pdf["title"] = $get["title"];
			}

			return $pdf;
		}


		$get = get_field("pdf");

		if($get){
			$pdf["url"] = $get["url"];
			$pdf["title"] = $get["title"];
		}	

		return $pdf;	
	}

	//post types
	add_action( 'init', 'create_post_type_miscellaneous' );
	function create_post_type_miscellaneous() {
		register_post_type( 'misc',
			array(
				'labels' => array(
					'name' => __( 'Miscellaneous' ),
					'singular_name' => __( 'miscellaneous' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
	}






	//add support
	add_post_type_support( 'page', 'excerpt' );
?>