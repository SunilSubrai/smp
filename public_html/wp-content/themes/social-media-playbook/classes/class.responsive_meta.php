<?php

//this assumes that the meta tag for the smaller image ends with the prefix - _mobile 

class responsive_meta{
	

	private $prefix = "_mobile";
	private $current_post = "";

	public function return_images($string){
		$image = array();
		$image["big"] = get_field( $string );
		$image["mobile"] = get_field( $string.$this->prefix);

		$image["big"] = $image["big"]["url"];
		$image["mobile"] = $image["mobile"]["url"];

		return (object) $image;
	}

}