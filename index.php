<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fogodechao
 */

$styles = ['home.css'];
$scripts = [];
$idpage = 'home';

/*Template Name: Home */

get_header();
?>
<?php if (isset($styles) && !empty($styles)) : ?>
    <?php foreach($styles as $style): ?>
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/<?php echo $style; ?>">
    <?php  endforeach; ?>
<?php endif; ?>

<?php if (isset($scripts) && (! empty($scripts))) : ?>
    <?php foreach($scripts as $script) : ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/<?php echo $script; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
  /*
	(function(){ var widget_id = '4JAoy4XTSK';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
	*/
</script>
<main id="page-home" class="site-page">
    <!-- {/literal} END JIVOSITE CODE -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/lightcase/src/css/lightcase.css" type="text/css" />
    <section id="section1">
        <video poster="http://www.fogodechao.com.br/wp-content/uploads/2019/03/FogoMainHeader-Fallback.jpg" id="bgvid" autoplay loop muted>
            <source src="https://fogodechao.com/fogo_brand_video.webm" type="video/webm">
            <source src="https://fogodechao.com/FogoHeaderVideo.mp4" type="video/mp4">
            <source src="https://fogodechao.com/fogo_brand_video.ogg" type="video/ogg">
            <!--<source src="https://fogodechao.com/fogo_brand_video.webm" type="video/webm">-->
        </video>
        <div class="front-page-wrapper">
            <article class="destaque">
                <h1>A experiência máxima do churrasco</h1>
                <br>
                <h1 class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/LOGO-FDC_BRANCO_site.png" alt="">
                </h1>
            </article>
        </div>
    </section>
    <div id="pl-605" class="panel-layout">
    <div id="pg-605-0" class="panel-grid panel-no-style">
        <div id="pgc-605-0-0" class="panel-grid-cell">
            <style>
                @media screen and (min-width : 769px) {
                .fdc-home-section-widget-0-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_gaucho.jpg');
                }
                }
                @media screen and (max-width : 768px) {
                .fdc-home-section-widget-0-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_gaucho_m.jpg');
                }
                }
            </style>
            <section class="fdc-home-section fdc-home-section-widget-0-0-0">
                <div class="content fdc-box-black">
                    <div class="content-wrapper">
                        <header>
                            <h2>
                                O caminho Gaúcho <i>no</i> Preparo da carne <sup>®</sup>
                            </h2>
                            <h3 class="text-center"></h3>
                        </header>
                        <div class="emblem_1 desktop">
                            <div class="emblem-wrapper text-center">
                                <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                            </div>
                        </div>
                        <p class="text-center desktop">
                            Somos chefs nascidos na centenária tradição de grelhar churrasco, respeitando nossos ingredientes cozinhando-os lentamente e expondo seus sabores naturais.
                        </p>
                        <div class="btn-group w-100 text-center">
                            <a href="https://www.fogodechao.com.br/menu" class="btn-fdc">
                            Leia Mais  <i class="fa fa-caret-right"></i>                        
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="pg-605-1" class="panel-grid panel-no-style">
        <div id="pgc-605-1-0" class="panel-grid-cell">
            <style>
                @media screen and (min-width : 769px) {
                .fdc-home-section-widget-1-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_market-table.jpg');
                }
                }
                @media screen and (max-width : 768px) {
                .fdc-home-section-widget-1-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_market-table-1.jpg');
                }
                }
            </style>
            <section class="fdc-home-section fdc-home-section-widget-1-0-0">
                <div class="content fdc-box-white">
                    <div class="content-wrapper">
                        <div class="box-wrapper">
                            <header>
                                <h2>
                                    TEMPERO GAÚCHO
                                </h2>
                                <div class="emblem_1 mobile">
                                    <div class="emblem-wrapper text-center">
                                        <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                                    </div>
                                </div>
                                <h3 class="text-center">UMA EXPERIÊNCIA CULINÁRIA</h3>
                            </header>
                            <div class="emblem_1 desktop">
                                <div class="emblem-wrapper text-center">
                                    <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                                </div>
                            </div>
                            <p class="text-center desktop">
                                A propagação inspirada pelas mesas de cozinhas grandes nas fazendas do sul do Brasil, onde a família e os amigos se reúnem para compartilhar os ingredientes mais frescos e de suas colheitas. Nós trazemos-lhe saladas sazonais, vegetais irresistivelmente frescos, carnes e queijos importados, pães artesanais e muito mais.
                            </p>
                            <div class="btn-group w-100 text-center">
                                <a href="https://www.fogodechao.com.br/menu/market-table" class="btn-fdc">
                                Leia Mais <i class="fa fa-caret-right"></i>                        
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="pg-605-2" class="panel-grid panel-no-style">
        <div id="pgc-605-2-0" class="panel-grid-cell">
            <style>
                @media screen and (min-width : 769px) {
                .fdc-home-section-widget-2-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_barfogo-section.jpg');
                }
                }
                @media screen and (max-width : 768px) {
                .fdc-home-section-widget-2-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_barfogo-m-section.jpg');
                }
                }
            </style>
            <section class="fdc-home-section fdc-home-section-widget-2-0-0">
                <div class="content fdc-box-transparent">
                    <div class="content-wrapper">
                        <header>
                            <h2>Bar Fogo</h2>
                            <div class="emblem_1 mobile">
                                <div class="emblem-wrapper text-center">
                                    <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                                </div>
                            </div>
                            <h3 class="text-center">Uma nova experiência</h3>
                        </header>
                        <div class="emblem_1 desktop">
                            <div class="emblem-wrapper text-center">
                                <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                            </div>
                        </div>
                        <p class="text-center desktop">
                            Desfrute de todos os sabores do Brasil em uma atmosfera mais casual. Descontraia-se com os amigos provando cocktails artesanais e vinhos cuidadosamente selecionados ou compartilhe aperitivos com inspiração brasileira e pequenos pratos.
                        </p>
                        <div class="btn-group w-100 text-center">
                            <a href="/menu/barfogo" class="btn-fdc">
                            Leia Mais <i class="fa fa-caret-right"></i>                        
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div id="pg-605-3" class="panel-grid panel-no-style">
        <div id="pgc-605-3-0" class="panel-grid-cell">
            <style>
                @media screen and (min-width : 769px) {
                .fdc-home-section-widget-3-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_traditions-section.jpg');
                }
                }
                @media screen and (max-width : 768px) {
                .fdc-home-section-widget-3-0-0 {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/01/bg_home_traditions-section.jpg');
                }
                }
            </style>
            <section class="fdc-home-section fdc-home-section-widget-3-0-0">
                <div class="content fdc-box-horizontal">
                    <div class="content-wrapper">
                        <header>
                            <h2>
                                TRADIÇÃO
                            </h2>
                            <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/emblem_quad.png" alt="quad emblem" class="desktop emblem_quad">
                            <div class="emblem_1 mobile">
                                <div class="emblem-wrapper text-center">
                                    <img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">
                                </div>
                            </div>
                            <h3 class="text-center">O JEITO GAÚCHO DE FAZER CHURRASCO</h3>
                        </header>
                        <p class="text-center desktop">
                            A história de Fogo de Chão começou na zona rural montanhosa do Rio Grande do Sul, Região Sul do Brasil. E as lições que nossos irmãos fundadores aprenderam em suas fazendas familiares lhes deu a ambição de partilhar a sua rica herança culinária com o resto do mundo.
                        </p>
                        <div class="btn-group w-100 text-center">
                            <a href="https://fogodechao.com.br/GauchoWayBR.mp4" class="btn-fdc" data-rel="lightcase">
                            Assistir ao vídeo                                                    
                            </a>
                            <a href="/historia" class="btn-fdc">
                            Leia Mais <i class="fa fa-caret-right"></i>                        
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- <div class="modal-formulario-evento-privado open-modal">
        <div class="modal-formulario-box">
            <a class="close-modal-fdc">X</a>
            <?php echo do_shortcode( '[contact-form-7 id="52cbb62" title="Evento Privado"]' ); ?>
        </div>
    </div> -->
<!-- 
<style>
	.modal-formulario-evento-privado{
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		position: fixed;
		z-index: 100;
		width: 100%;
		background: rgba(0, 0, 0, 0.6);
		overflow-y: auto;
		padding-bottom: 20px;
		display: none;
		z-index: 9999;
	}

	.modal-formulario-evento-privado.open-modal{
		display: block;
	}

	.modal-formulario-box{
		max-width: 960px;
		margin: 0 auto 0 auto;
		padding: 30px;
		position: absolute;
		left: 0;
		right: 0;
		background: #FFF;
		top: 40px;
		
	}

	.modal-formulario-evento-privado a.close-modal-fdc{
		position: absolute;
		right: 0;
		top: 0;
		height: 45px;
		width: 45px;
		background: #B4A364;
		font-family: 'AvenirLT-Heavy', sans-serif;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #FFF;
		cursor: pointer;
		border: 1px solid #B4A364;
	}
	.modal-formulario-evento-privado a.close-modal-fdc:hover{
		background: #FFF;
		color: #B4A364;
	}
</style> -->
        

    </div>
    <?php if ( have_posts() ) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</main>
<?php
get_footer();
