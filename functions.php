<?php

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'YourThemeName' ),
	) );

?>

<?php 

/* Replace the name of PHP with your specific class yourthemename.php file */
require 'yourthemename.php';

/* Global Variable */
$your_class = new your_class;

/* Common Functions */

add_action( 'wp_enqueue_scripts', 'your_class' );

if ( function_exists('register_sidebar') )
	register_sidebar(
		array(
			'name' => __( 'Primary', 'your_class' ),
			'id' => 'primary',
			'description' => __('The header widget area', 'your_class'),
			'before_widget' => '<aside id="header-widget" class="right-header-widget fr top-widget" role="complementary">',
			'after_widget' => '</aside> <!--end header-widget-->',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		)

	);
	register_sidebar(
		array(
			'name' => __( 'Secondary', 'your_class' ),
			'id' => 'secondary',
			'description' => __('Below header widget area', 'your_class'),
			'before_widget' => '',
			'after_widget' => ' <!--end header-widget-->',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		)
	);

?>
<?php 



/* Pagination */

function get_your_class_pagination(){
?>
	<nav class="pagination clearfix" id="nav-below" role="navigation">
		<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
	</nav>
<?php
}


