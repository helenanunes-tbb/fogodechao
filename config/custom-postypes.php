<?php

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'fdc_register_promocao_post_type' );

// A custom function that calls register_post_type
function fdc_register_promocao_post_type() {

    // Set various pieces of text, $labels is used inside the $args array
    $labels = [
        'name' => _x( 'Promoções', 'post type general name' ),
        'singular_name' => _x( 'Promoção', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Promoção' ),
        'add_new_item'       => __( 'Add Nova Promoção' ),
        'edit_item'          => __( 'Edit Promoção' ),
        'new_item'           => __( 'Nova Promoção' ),
        'all_items'          => __( 'Todas as Promoções' ),
        'view_item'          => __( 'Ver Promoção' ),
        'search_items'       => __( 'Buscar Promoção' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // Set various pieces of information about the post type
    $args = [
        'labels'        => $labels,
        'description'   => 'Promoções',
        'public'        => true,
        'supports'      => ['title', 'editor','thumbnail'],
        'menu_icon'     => 'dashicons-format-image'
    ];

  // Register the movie post type with all the information contained in the $arguments array
  register_post_type( 'promocao', $args );
}

// The custom function MUST be hooked to the init action hook
add_action( 'init', 'fdc_register_historia_post_type' );

// 
function fdc_register_historia_post_type() {

    // 
    $labels = [
        'name' => _x( 'História', 'post type general name' ),
        'singular_name' => _x( 'História', 'post type singular name' ),
        'add_new'            => __( 'Add Nova História' ),
        'add_new_item'       => __( 'Add Nova História' ),
        'edit_item'          => __( 'Editar História' ),
        'new_item'           => __( 'Nova História' ),
        'all_items'          => __( 'Todas as Histórias' ),
        'view_item'          => __( 'Ver História' ),
        'search_items'       => __( 'Buscar História' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'História',
        'public'        => true,
        'supports'      => ['title','thumbnail'],
        'menu_icon'     => 'dashicons-images-alt'
    ];

  // 
  register_post_type( 'historia', $args );
}

add_action( 'init', 'fdc_register_popup_post_type' );
function fdc_register_popup_post_type()
{
    $labels = [
        'name' => _x( 'Avisos', 'post type general name' ),
        'singular_name' => _x( 'Aviso', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Pergunta' ),
        'add_new_item'       => __( 'Add Nova Pergunta' ),
        'edit_item'          => __( 'Editar Aviso' ),
        'new_item'           => __( 'Nova Aviso' ),
        'all_items'          => __( 'Todas os Avisos' ),
        'view_item'          => __( 'Ver Aviso' ),
        'search_items'       => __( 'Buscar Aviso' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'Aviso',
        'public'        => true,
        'supports'      => ['title','thumbnail'],
        'menu_icon'     => 'dashicons-megaphone'
    ];

  // 
  register_post_type( 'avisos', $args );
}
function fdc_register_fogopedia_post_type()
{
    $labels = [
        'name' => _x( 'Fogopedia', 'post type general name' ),
        'singular_name' => _x( 'Fogopedia', 'post type singular name' ),
        'add_new'            => __( 'Add Nova Pergunta' ),
        'add_new_item'       => __( 'Add Nova Pergunta' ),
        'edit_item'          => __( 'Editar Pergunta' ),
        'new_item'           => __( 'Nova Aviso' ),
        'all_items'          => __( 'Todas as Perguntas' ),
        'view_item'          => __( 'Ver Pergunta' ),
        'search_items'       => __( 'Buscar Pergunta' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    ];

    // 
    $args = [
        'labels'        => $labels,
        'description'   => 'Fogopedia',
        'public'        => true,
        'supports'      => ['title'],
        'menu_icon'     => 'dashicons-clipboard'
    ];

  // 
  register_post_type( 'fogopedia', $args );
}
add_action( 'init', 'fdc_register_fogopedia_post_type' );