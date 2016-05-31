<?php
// styles
function themeslug_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

// Register Custom Navigation Walker
// see: https://github.com/twittem/wp-bootstrap-navwalker
require_once('includes/wp_bootstrap_navwalker.php');

// Bootstrap Navigation
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'maat' ),
) );


// widgets, see codex
function petj_widgets() {

	register_sidebar( array(
		'name'          => 'widget1',
		'id'            => 'widget_1',
		'before_widget' => '<aside>',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widgetHead">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'petj_widgets' );

?>
