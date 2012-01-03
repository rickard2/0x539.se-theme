<?php 


class zerox539se {
	
	private $plugin_name = "0x539se";

	function __construct() {
		$this->init_assets();
		$this->init_sidebars();
	}
	
	private function init_sidebars() {
		
		register_sidebar( array(
			'name' => 'Header', 
			'id' => 'sidebar-header',
			'description' => 'Header',
			'before_widget' => '<section>',
			'after_widget' => '</section>',
			'before_title' => '<h1 class="widgettitle">',
			'after_title' => '</h1>'
		) );
		
		register_sidebar( array(
			'name' => 'Sidebar', 
			'id' => 'sidebar-main',
			'description' => 'Sidebar',
			'before_widget' => '<section>',
			'after_widget' => '</section>',
			'before_title' => '<h1 class="widgettitle">',
			'after_title' => '</h1>'
		) );	
		
	}
	
	private function init_assets() {
		
		// Only enqueue files on the public part of the page 
		if ( !is_admin() ) {
			
			$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on" ? "https" : "http";
			
			wp_enqueue_style($this->plugin_name . '-style', get_bloginfo( 'stylesheet_directory') . "/style.css");

			wp_enqueue_script('modernizr',  get_bloginfo("stylesheet_directory") . "/js/libs/modernizr-2.0.6.min.js");
			wp_enqueue_script($this->plugin_name . '-plugins', get_bloginfo("stylesheet_directory") . "/js/plugins.js", array('jquery'), false, true);
			wp_enqueue_script($this->plugin_name . '-script', get_bloginfo("stylesheet_directory") . "/js/script.js", array('jquery', $this->plugin_name . '-plugins'), false, true);
			
		}
	}
}

add_action("init", create_function('', '$a = new zerox539se();'));



/**
 * Function to get the time in "relative format", i.e. xxx seconds/minutes/hours/... ago
 * @param int $timestamp
 * @return string 
 * @since 1.0
 */
function relative_time ($timestamp) {
	$difference = time() - $timestamp;
	$periods = array("sec", "min", "hour", "day", "week","month", "year", "decade");
	
	$lengths = array("60","60","24","7","4.35","12","10");
	
	if ($difference > 0) { // this was in the past
		$ending = "ago";
	} else { // this was in the future
		$difference = -$difference;
		$ending = "to go";
	}
	
	for($j = 0; $difference >= $lengths[$j]; $j++)
		$difference /= $lengths[$j];
	
	$difference = round($difference);
	
	if($difference != 1) 
		$periods[$j] .= "s";
	
	$text = "$difference $periods[$j] $ending";
	
	return $text;
}