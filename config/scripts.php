<?php

/**
 * Enqueue scripts and styles
 * @since Fogo de Chao 1.0
*/

function fogodechao_scripts() {

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', ['jquery']);
	wp_enqueue_script('bootstrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js',['jquery', 'popperjs']);
	wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css');
	//wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.1.0/css/all.css"');
	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
	wp_enqueue_script('fdc-menu', get_template_directory_uri() . '/assets/js/menu.js');
	wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel/dist/owl.carousel.min.js');
	wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/assets/js/owlcarousel/dist/assets/owl.carousel.min.css');
	wp_enqueue_style('owlcarousel-theme', get_template_directory_uri() . '/assets/js/owlcarousel/dist/assets/owl.theme.default.min.css');

}

add_action( 'wp_enqueue_scripts', 'fogodechao_scripts' );