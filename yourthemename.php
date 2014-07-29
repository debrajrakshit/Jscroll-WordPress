<?php
require 'html.php';

class class_name extends HTML{
	public $content_width;

	public function __construct(){ }


	public static function validate_var($var, $default = ''){
		if(isset($var) ){
			return $var;
		}

		return $default;
	}


	public static function isEmpty($var){
		if(trim($var) === ''){
			return true;
		}

		return false;
	}


	public static function default_menu_fallback(){
	    echo '<ul>';
	       wp_list_pages( array('depth' => 3,'title_li' => '') ); 
	    echo '</ul>';
	} 


	public function set_max_content_width($content_width){
		$this->content_width = $content_width;     
	}


	public function get_max_content_width(){
		global $content_width;
		return (!isset($content_width) ) ? $content_width = $this->content_width : $content_width;
	}


	public function set_aside_symbol($apply_aside_symbol){
		if($apply_aside_symbol === true){			
			add_filter( 'the_content', 'add_aside_symbol', 9 ); 
		}
		
		function add_aside_symbol($content){
			if ( has_post_format( 'aside' ) && !is_singular() )
					$content .= wpbootstrap_scripts_with_jquery::link( get_permalink(), '&#8734;', get_the_title());

			return $content;
		}

	}

}

?>