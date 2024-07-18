<?php

function fdc_widgets_init() {    

    register_sidebar( array(
        'name'          => 'Categorias do Cardápio',
        'id'            => 'fdc_cardapio_categorias',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Itens do Cardapio',
        'id'            => 'fdc_cardapio_itens',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Categoria Info',
        'id'            => 'fdc_categoria_info',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Happyour',
        'id'            => 'fdc_happyour',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => 'Perguntas Frequentes',
        'id'            => 'fdc_perguntas_frequentes',
        'before_widget' => '<div class="item">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="questao"><i>',
        'after_title'   => '</i></div>',
    ) );

}
add_action( 'widgets_init', 'fdc_widgets_init' );

function fdc_home_widget() {
    register_sidebar([
        'name'      => 'FDC Home 2',
        'id'        => 'fdc_home_2',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Home 3',
        'id'        => 'fdc_home_3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Home 4',
        'id'        => 'fdc_home_4',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
}

add_action( 'widgets_init', 'fdc_home_widget' );

function fdc_eventos_widget() {

    register_sidebar([
        'name'      => 'FDC Eventos 1',
        'id'        => 'fdc_eventos_1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Reserva para Grupos',
        'id'        => 'fdc_reserva_grupo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Eventos Testemunhos',
        'id'        => 'fdc_eventos_testemunhos',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Eventos Banefícios',
        'id'        => 'fdc_eventos_baneficios',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Eventos Reconhecimento',
        'id'        => 'fdc_eventos_reconhecimento',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);
    register_sidebar([
        'name'      => 'FDC Eventos Marketing',
        'id'        => 'fdc_eventos_marketing',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ]);

}

add_action('widgets_init', 'fdc_eventos_widget');