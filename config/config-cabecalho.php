<?php

if ( has_post_thumbnail() ) {
	$background = get_the_post_thumbnail_url();
}

$cfs = CFS()->get();

$titulo = (isset($cfs['titulo']) && !empty($cfs['titulo'])) ? $cfs['titulo'] : '';
$background_mobile = (isset($cfs['background_mobile']) && !empty($cfs['background_mobile'])) ? $cfs['background_mobile'] : '';
$subtitulo = isset($cfs['subtitulo']) ? $cfs['subtitulo'] : '';
$descricao = isset($cfs['descricao']) ? $cfs['descricao'] : '';

// if (!empty($titulo)) {
// 	$titulo = $titulo . '<br><img src="'.get_template_directory_uri().'/assets/images/tile-horz.svg"/>';
// }