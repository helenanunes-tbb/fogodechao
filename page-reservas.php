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

/*Template Name: Reservas */

get_header();

$styles = ['reservas.css'];
$scripts = [];
$idpage = 'fdc-reservas';
$background = '';
$titulo = '';
$descricao = '';
$acao = [];

?>
<style>
  .panel-grid.panel-has-style>.panel-row-style,.panel-grid.panel-no-style{display:flex;-ms-flex-wrap:wrap;flex-wrap:nowrap;-ms-justify-content:space-between;justify-content:space-between}.panel-grid .so-parallax{position:relative}.panel-grid .so-parallax>:not(.simpleParallax){position:relative;z-index:1}.panel-grid .so-parallax .simpleParallax{overflow:hidden}.panel-grid .so-parallax .simpleParallax,.panel-grid .so-parallax img[data-siteorigin-parallax]{bottom:0;left:0;position:absolute;right:0;top:0;width:100%;z-index:0}.panel-layout.panel-is-rtl .panel-grid.panel-has-style>.panel-row-style,.panel-layout.panel-is-rtl .panel-grid.panel-no-style{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.panel-grid-cell{-ms-box-sizing:border-box;box-sizing:border-box}.panel-grid-cell .panel-cell-style{height:100%}.panel-grid-cell .so-panel{zoom:1}.panel-grid-cell .so-panel:before{content:"";display:block}.panel-grid-cell .so-panel:after{content:"";display:table;clear:both}.panel-grid-cell .panel-last-child{margin-bottom:0}.panel-grid-cell .widget-title{margin-top:0}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container){overflow-x:hidden}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container) .siteorigin-panels-stretch{margin-right:-1000px!important;margin-left:-1000px!important;padding-right:1000px!important;padding-left:1000px!important}
</style>
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

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/12/page_header_reservation.jpg)">
    <article>
        <h1 class="page-titulo">Faça sua reserva</h1>
        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">Experimente a cultura e tradição do Brasil</p>
    </article>
</header>
<main id="fdc-reservas" class="main-page">
    <section class="fdc-reservas--content">
        <div id="pl-444" class="panel-layout">
            <div id="pg-444-0" class="panel-grid panel-has-style">
                <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-444-0" data-stretch-type="full" style="margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px; border-left: 0px; border-right: 0px;">
                    <div id="pgc-444-0-0" class="panel-grid-cell">
                        <div class="fdc-titulo-borda-dupla col-12 col-md-12 p-0">
                            <h4>Escolha a casa de sua preferência</h4>
                            <div class="bordas">
                                <div class="borda"></div>
                                <div class="borda"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pg-444-1" class="panel-grid panel-no-style">
                <div id="pgc-444-1-0" class="panel-grid-cell">
                    <div class="teste panel-cell-style panel-cell-style-for-444-1-0">
                        <article class="fdc-faca-sua-reserva col-12 col-md-12">
                            <header>
                                <h4>São Paulo – Jardins</h4>
                                <p>jardins@fogodechao.com.br</p>
                                <p>55 (11) 3062-2223 – 					
                                    <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'São Paulo – Jardins'});">
                                    WhatsApp
                                    </a></strong>
                                </p>
                            </header>
                            <footer>
                                <button id="lojajardins" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'São Paulo – Jardins'}); window.location='https://fogodechao.com.br/location/jardins/';">Faça sua reserva</button>
                            </footer>
                        </article>
                        <article class="fdc-faca-sua-reserva col-12 col-md-12">
                            <header>
                                <h4>São Paulo – Vila Olimpia</h4>
                                <p>bandeirantes@fogodechao.com.br</p>
                                <p>55 (11) 5505-0791 – 					
                                    <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'São Paulo – Vila Olimpia'});">
                                    WhatsApp
                                    </a></strong>
                                </p>
                            </header>
                            <footer>
                                <button id="lojavilaolimpia" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'São Paulo – Vila Olimpia'}); window.location='https://fogodechao.com.br/location/vila-olimpia/';">Faça sua reserva</button>
                            </footer>
                        </article>
                        <article class="fdc-faca-sua-reserva col-12 col-md-12">
                            <header>
                                <h4>São Paulo – Moema</h4>
                                <p>moema@fogodechao.com.br</p>
                                <p>55 (11) 5056-1795 – 					
                                    <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'São Paulo – Moema'});">
                                    WhatsApp
                                    </a></strong>
                                </p>
                            </header>
                            <footer>
                                <button id="lojamoema" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'São Paulo – Moema'}); window.location='https://fogodechao.com.br/location/moema/';">Faça sua reserva</button>
                            </footer>
                        </article>
                        <article class="fdc-faca-sua-reserva col-12 col-md-12">
                            <header>
                                <h4>São Paulo – Morumbi</h4>
                                <p>morumbi@fogodechao.com.br</p>
                                <p>55 (11) 5555-6607 – 					
                                    <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'São Paulo – Morumbi'});">
                                    WhatsApp
                                    </a></strong>
                                </p>
                            </header>
                            <footer>
                                <button id="lojamoema" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'São Paulo – Morumbi'}); window.location='https://fogodechao.com.br/location/morumbi/';">Faça sua reserva</button>
                            </footer>
                        </article>
                    </div>
                </div>
                <div id="pgc-444-1-1" class="panel-grid-cell">
                    <article class="fdc-faca-sua-reserva col-12 col-md-12">
                        <header>
                            <h4>São Paulo – Center Norte</h4>
                            <p>centernorte@fogodechao.com.br</p>
                            <p>55 (11) 2089-1736 – 					
                                <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'São Paulo – Center Norte'});">
                                WhatsApp
                                </a></strong>
                            </p>
                        </header>
                        <footer>
                            <button id="lojacenternorte" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'São Paulo – Center Norte'}); window.location='https://fogodechao.com.br/location/shopping-center-norte/';">Faça sua reserva</button>
                        </footer>
                    </article>
                    <article class="fdc-faca-sua-reserva col-12 col-md-12">
                        <header>
                            <h4>Rio de Janeiro – Botafogo</h4>
                            <p>botafogo@fogodechao.com.br</p>
                            <p>55 (21) 2542-1545 – 					
                                <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'Rio de Janeiro – Botafogo'});">
                                WhatsApp
                                </a></strong>
                            </p>
                        </header>
                        <footer>
                            <button id="lojabotafogo" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'Rio de Janeiro – Botafogo'}); window.location='https://fogodechao.com.br/location/botafogo/';">Faça sua reserva</button>
                        </footer>
                    </article>
                    <article class="fdc-faca-sua-reserva col-12 col-md-12">
                        <header>
                            <h4>Rio de Janeiro – Barra da Tijuca</h4>
                            <p>barra@fogodechao.com.br</p>
                            <p>55 (21) 3195-2074 – 					
                                <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'Rio de Janeiro – Barra da Tijuca'});">
                                WhatsApp
                                </a></strong>
                            </p>
                        </header>
                        <footer>
                            <button id="lojabarra" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'Rio de Janeiro – Barra da Tijuca'}); window.location='https://fogodechao.com.br/location/barra-da-tijuca/';">Faça sua reserva</button>
                        </footer>
                    </article>
                    <article class="fdc-faca-sua-reserva col-12 col-md-12">
                        <header>
                            <h4>Brasília</h4>
                            <p>brasilia@fogodechao.com.br</p>
                            <p>55 (61) 3322-4666 – 					
                                <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'whatsapp','eventSection': 'reservas','eventAction': 'click','eventLocal': 'reserva_por_whats','eventText': 'Brasília'});">
                                WhatsApp
                                </a></strong>
                            </p>
                        </header>
                        <footer>
                            <button id="lojabrasilia" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'Brasília'}); window.location='https://fogodechao.com.br/location/brasilia/';">Faça sua reserva</button>
                        </footer>
                    </article>
                </div>
            </div>
            <div id="pg-444-2" class="panel-grid panel-has-style">
                <div class="panel-row-style panel-row-style-for-444-2">
                    <div id="pgc-444-2-0" class="panel-grid-cell">
                        <div id="panel-444-2-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="9">
                            <div class="textwidget">
                                <div style="margin:0 20px;">
                                    Se preferir levar a experiência <strong>Fogo de Chão</strong> para sua casa, conheça nosso cardápio especial <strong>Fogo To Go</strong> e retire na loja mais próxima de sua casa:
                                    <p></p>
                                    <p><a class="btn-fdc" href="https://fogodechao.com.br/menu/fogotogo/">Peça já <i class="fa fa-caret-right"></i> </a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();