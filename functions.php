<?php
require 'inc/customizer.php';

function mahadi_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.00' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.00' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.00' );
  wp_enqueue_style( 'mahadi-style', get_stylesheet_uri(), array(), '1.00' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.00', true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.00', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.00', true );
}
add_action( 'wp_enqueue_scripts', 'mahadi_scripts' );

function mahadi_setup(){
  // navbar
  register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mahadi' ),
		)
	);

  // navbar
  register_nav_menus(
    array(
      'menu-2' => esc_html__( 'Secondary', 'mahadi' ),
    )
  );

// logo
add_theme_support(
	'custom-logo',
	array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	)
);

add_theme_support( 'post-thumbnails' );

// Search
add_theme_support(
	'html5',
	array(
		'search-form',
		'style',
		'script',
	)
);

}
add_action( 'after_setup_theme', 'mahadi_setup' );

function mahadi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mahadi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mahadi' ),
			'before_widget' => '<section id="%1$s" class="mb-2 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mahadi_widgets_init' );


function mahadi_init() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post Banner Sliders', 'Sliders' ),
        'singular_name'         => _x( 'Slider', 'Post Banner Slider', 'Slider' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'supports'           => array( 'title', 'thumbnail'),
    );

    register_post_type( 'Slider', $args );
}

add_action( 'init', 'mahadi_init' );
