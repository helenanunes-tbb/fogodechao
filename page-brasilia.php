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

/*Template Name: Brasilia */

get_header();
$styles = ['location.css'];
$scripts = [];
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
<header id="page-header" class="desktop" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2024/06/banner-brasilia.jpg)">

    <article>
        <h1 class="page-titulo">BRASILIA, DISTRITO FEDERAL</h1>
        <!-- <br>
        <b>Notice</b>:  Undefined variable: subtitulo in <b>/home/storage/f/0a/49/fogodechaoprofis1/public_html/wp-content/themes/fogodechao/page-header-location.php</b> on line <b>6</b><br> -->
        <p class="page-descricao">
        ST DE CLUBES ESPORTIVOS SUL TRECHO 2 - Numero: 2/11 - ASA SUL |<br> <a href="tel:(61) 3322 4666"> (61) 3322 4666 </a>&nbsp;|&nbsp;MAPA <a title="Abrir no Maps" class="fdc-icon-maps" target="__blank" href="http://maps.google.com?saddr=Current+Location&amp;daddr=-15.819597036933319, -47.86767526095192&amp;ll="><i class="fa fa-compass"></i></a>            
        </p>
    </article>
</header>
<main id="fdc-location" class="main-page">
    <section class="fdc-location--content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="fdc-page-content">
                        <div id="pl-373" class="panel-layout">
                            <div id="pg-373-0" class="panel-grid panel-no-style">
                                <div id="pgc-373-0-0" class="panel-grid-cell">
                                    <div id="panel-373-0-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="0">
                                        <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                            <div class="siteorigin-widget-tinymce textwidget">
                                                <h2>BRASILIA</h2>
                                                <div class="btn-reserva">
                                                    <a href="https://reservation-widget.tagme.com.br/reservation/schedule/615db324948ffa0041676419/reservationWidget" target="_blank" id="lojabrasilia" type="button" class="fdc-btn-gold" onclick="dataLayer.push({'event': 'gaEvent','eventName': 'reserva','eventSection': 'reservas','eventAction': 'click','eventLocal': 'cta_faca_sua_reserva','eventText': 'Brasília'});">Faça sua reserva</a>
                                                </div>
                                                <p>No coração do centro político brasileiro, a Fogo de Chão Brasília recebe magistrados, diplomatas, juízes e estrangeiros</p>
                                                <div>
                                                    <p>
                                                        Endereço: ST DE CLUBES ESPORTIVOS SUL TRECHO 2 - Numero: 2/11 - ASA SUL
                                                    </p>
                                                    <p>Capacidade: 350 pessoas</p>
                                                    <div>
                                                    segunda a sabado: 12h às 23h30<br>
                                                    domingo 12h às 21h30
                                                    </div>
                                                    <p>Outros serviços: l Cc: todos l Cd: todos l Valet l Acesso PPD l Wi-Fi</p>
                                                </div>
                                                <div class="parking">
                                                    <h2>CONTATO</h2>
                                                    <p><a href="mailto:brasilia@fogodechao.com.br">brasilia@fogodechao.com.br</a> – (61) 3322 4666 - <img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><a style="color: inherit;" href="https://api.whatsapp.com/send/?phone=5511970624267" target="_blank" rel="noopener"> WhatsApp</a></p>
                                                    <p>&nbsp;</p>
                                                </div>
                                                <p style="font-weight: 400;">Sua segurança e saúde são nossa principal prioridade e estamos trabalhando diligentemente com as leis locais e nacionais para atender às crescentes necessidades de adaptação.</p>
                                                <p style="font-weight: 400;">Para garantir que estamos disponíveis para atendê-lo em nossos salões, entre em contato com o restaurante antes de visitar para confirmar nossos horários de operação.</p>
                                                <p style="font-weight: 400;">Agradecemos sua paciência, apoio e por nos permitir atendê-lo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panel-373-0-0-1" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="1">
                                        <div class="textwidget">
                                            <p>
                                                <script>
                                                    window.dataLayer = window.dataLayer || [];
                                                    function gtag(){dataLayer.push(arguments)};
                                                    gtag('js', new Date());
                                                    gtag('config', 'UA-33947052-1');
                                                </script><br>
                                                <script>
                                                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                                                    ga('create', 'UA-33947052-1', 'auto');
                                                      ga('require', 'ecommerce');
                                                     ga('ecommerce:addTransaction', {
                                                      'id': '008',
                                                      'affiliation': 'Fogo de Chão', 
                                                      'revenue': '150.00',
                                                      'shipping': '0',
                                                      'tax': '0',
                                                      'currency': 'BRL'
                                                      });
                                                      ga('ecommerce:addItem', {
                                                        'id': '0008',
                                                        'name': 'Brasilia',
                                                        'sku': 'FCB1',
                                                        'category': 'Restaurantes',
                                                        'price': '150.00',
                                                        'quantity': '1',
                                                        'currency': 'BRL'
                                                      });
                                                      ga('ecommerce:send');
                                                      ga('send:pageview');
                                                </script>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <!-- <article class="fdc-reserva">
                        <h3>Faça aqui sua reserva!</h3>
                        <iframe src="https://reservation-widget.tagme.com.br/reservation/schedule/615db324948ffa0041676419/reservationWidget?utm_campaign=&amp;utm_source=&amp;utm_medium=&amp;utm_content=&amp;utm_term=" frameborder="0" scrolling="auto" width="320" height="694"> Desculpe o seu navegador não suporta iframes. </iframe>                
                    </article> -->
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();