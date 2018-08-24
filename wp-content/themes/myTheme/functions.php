<?php
function theme_styles()
{

	wp_enqueue_style( 'bootstrap_css', "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/scripts/owl.carousel.scss' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/scripts/owl.theme.default.scss' );
	wp_enqueue_style( 'font_awsome', "https://use.fontawesome.com/releases/v5.2.0/css/all.css" );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/scripts/slick.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/scripts/slick-theme.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');
?>
