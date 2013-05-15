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