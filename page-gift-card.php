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

/*Template Name: Gift card */

get_header();

$styles = ['gift-card.css'];
$scripts = [];
$idpage = 'gift-card';

$background = '';
$titulo = '';
$subtitulo = '';
$descricao = '';
$acao = [];
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

<style type="text/css" media="all"id="siteorigin-panels-layouts-head">/* Layout 501 */ #pgc-501-0-0 { width:35.7143%;width:calc(35.7143% - ( 0.64285714285714 * 30px ) ) } f{ width:64.2857%;width:calc(64.2857% - ( 0.35714285714286 * 30px ) ) } #pg-501-0 , #pl-501 .so-panel { margin-bottom:30px } #pgc-501-1-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) } #pl-501 .so-panel:last-of-type { margin-bottom:0px } #pg-501-0.panel-has-style > .panel-row-style, #pg-501-0.panel-no-style , #pg-501-1.panel-has-style > .panel-row-style, #pg-501-1.panel-no-style { -webkit-align-items:flex-start;align-items:flex-start } @media (max-width:780px){ #pg-501-0.panel-no-style, #pg-501-0.panel-has-style > .panel-row-style, #pg-501-0 , #pg-501-1.panel-no-style, #pg-501-1.panel-has-style > .panel-row-style, #pg-501-1 { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-501-0 > .panel-grid-cell , #pg-501-0 > .panel-row-style > .panel-grid-cell , #pg-501-1 > .panel-grid-cell , #pg-501-1 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pgc-501-0-0 { margin-bottom:30px } #pl-501 .panel-grid-cell { padding:0 } #pl-501 .panel-grid .panel-grid-cell-empty { display:none } #pl-501 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } #pl-501{display:flex;} </style><link rel="icon" href="https://fogodechao.com.br/wp-content/uploads/2022/02/cropped-apple-touch-icon-32x32.png" sizes="32x32" />

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2020/09/GIFT_CARD_1276x379_banner_site_fogo-2.png)">
    <article>
        <h1 class="page-titulo">Presenteie alguém especial com uma experiência inesquecível.</h1>
        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo">Garanta seu Gift Card</h2>
    </article>
</header>
<main id="gift-card" class="main-page">
    <section id="fdc-giftcard" class="p-section">
        <div class="container">
            <div id="pl-501" class="panel-layout" >
                <div id="pg-501-0" class="panel-grid panel-no-style" style="display:flex;">
                    <div id="pgc-501-0-0" class="panel-grid-cell">
                        <div id="panel-501-0-0-0" class="so-panel widget widget_media_image panel-first-child panel-last-child" data-index="0">
                            <img width="300" height="188" src="https://fogodechao.com.br/wp-content/uploads/2020/09/123086_20_FOG_118973_GIFT-CARD_DEFINIÇÃO-DE-LAYOUT-CARTÃO_CRIAÇÃO_rodízi...-1-300x188.jpg" class="image wp-image-1827  attachment-medium size-medium" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://fogodechao.com.br/wp-content/uploads/2020/09/123086_20_FOG_118973_GIFT-CARD_DEFINIÇÃO-DE-LAYOUT-CARTÃO_CRIAÇÃO_rodízi...-1-300x188.jpg 300w, https://fogodechao.com.br/wp-content/uploads/2020/09/123086_20_FOG_118973_GIFT-CARD_DEFINIÇÃO-DE-LAYOUT-CARTÃO_CRIAÇÃO_rodízi...-1-768x482.jpg 768w, https://fogodechao.com.br/wp-content/uploads/2020/09/123086_20_FOG_118973_GIFT-CARD_DEFINIÇÃO-DE-LAYOUT-CARTÃO_CRIAÇÃO_rodízi...-1.jpg 1016w" sizes="(max-width: 300px) 100vw, 300px">
                        </div>
                    </div>
                    <div id="pgc-501-0-1" class="panel-grid-cell">
                        <div id="panel-501-0-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="1">
                            <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                <div class="siteorigin-widget-tinymce textwidget">
                                    <h3><strong>Gift Card Fogo de Chão. Este presente está no ponto.</strong></h3>
                                    <p>&nbsp;</p>
                                    <h3><strong>Gift Card Pessoa Física</strong></h3>
                                    <p>Seus amigos e familiares vão adorar receber um Gift Card do Fogo de Chão de presente.<br>
                                    Isso porque com um Gift Card na mão eles podem aproveitar tudo o que há de melhor no<br>
                                    Fogo de Chão.<br>
                                    Escolha um dos valores disponíveis entre R$75,00 e R$500,00, indique o e-mail da pessoa<br>
                                    que você deseja presentear e pronto. Ela receberá o Gift Card digital e poderá viver uma<br>
                                    experiência Fogo de Chão quando e como quiser.</p>
                                    <p><a class="page-acao btn-fdc" href="https://fogodechao.todocartoes.com.br/">COMPRE AGORA</a></p>
                                    <h3><strong>Gift Card Corporativo</strong></h3>
                                    <p>Alguns funcionários e parceiros comerciais merecem mais do que uma homenagem, merecem Fogo de Chão. Por isso, aproveite o Gift Card do Fogo de Chão para empresas.</p>
                                    <p><a class="page-acao btn-fdc" href="https://vendacorporativa.todoincomm.com.br/marca/fogodechao#/purchase">COMPRE AGORA</a></p>
                                    <p>Este cartão pode ser utilizado em qualquer unidade da rede no Brasil e na modalidade<br>
                                    Fogo to-go. Válidos pelo período de 6 meses.</p>
                                    <p><strong>Quer saber mais sobre o Gift Card Fogo de Chão?<br>
                                    </strong><br>
                                    Entre em contato com Todo Cartões pelo e-mail: fogodechao@todocartoes.com.br ou<br>
                                    acesse o nosso Fale Conosco.<br>
                                    O horário de atendimento é das 9h às 18h de segunda a sexta-feira (exceto feriados).</p>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-501-1" class="panel-grid panel-no-style">
                    <div id="pgc-501-1-0" class="panel-grid-cell panel-grid-cell-empty"></div>
                </div>
            </div>
        </div>
    </section>
</main>



<?php
get_footer();