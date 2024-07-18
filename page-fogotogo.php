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

/*Template Name: Fogo To Go */

get_header();
$styles = ['item-cardapio.css'];
$scripts = ['item-cardapio.js'];
$idpage = 'carnes';
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
<style type="text/css" media="all"
    id="siteorigin-panels-layouts-head">/* Layout 1458 */ #pgc-1458-0-0 , #pgc-1458-2-0 , #pgc-1458-4-0 , #pgc-1458-6-0 , #pgc-1458-7-0 , #pgc-1458-8-0 , #pgc-1458-9-0 , #pgc-1458-10-0 , #pgc-1458-12-0 , #pgc-1458-14-0 , #pgc-1458-16-0 , #pgc-1458-18-0 , #pgc-1458-20-0 , #pgc-1458-22-0 , #pgc-1458-24-0 , #pgc-1458-26-0 , #pgc-1458-27-0 , #pgc-1458-28-0 , #pgc-1458-30-0 { width:100%;width:calc(100% - ( 0 * 30px ) ) } #pg-1458-0 , #pg-1458-1 , #pg-1458-2 , #pg-1458-3 , #pg-1458-4 , #pg-1458-5 , #pg-1458-6 , #pg-1458-7 , #pg-1458-8 , #pg-1458-9 , #pg-1458-10 , #pg-1458-11 , #pg-1458-12 , #pg-1458-13 , #pg-1458-14 , #pg-1458-15 , #pg-1458-16 , #pg-1458-17 , #pg-1458-18 , #pg-1458-19 , #pg-1458-20 , #pg-1458-21 , #pg-1458-22 , #pg-1458-23 , #pg-1458-24 , #pg-1458-25 , #pg-1458-26 , #pg-1458-27 , #pg-1458-28 , #pg-1458-29 , #pl-1458 .so-panel { margin-bottom:30px } #pgc-1458-1-0 , #pgc-1458-1-1 , #pgc-1458-3-0 , #pgc-1458-3-1 , #pgc-1458-5-0 , #pgc-1458-5-1 , #pgc-1458-11-0 , #pgc-1458-11-1 , #pgc-1458-13-0 , #pgc-1458-13-1 , #pgc-1458-15-0 , #pgc-1458-15-1 , #pgc-1458-17-0 , #pgc-1458-17-1 , #pgc-1458-19-0 , #pgc-1458-19-1 , #pgc-1458-21-0 , #pgc-1458-21-1 , #pgc-1458-23-0 , #pgc-1458-23-1 , #pgc-1458-25-0 , #pgc-1458-25-1 , #pgc-1458-29-0 , #pgc-1458-29-1 { width:50%;width:calc(50% - ( 0.5 * 30px ) ) } #pl-1458 .so-panel:last-of-type { margin-bottom:0px } #pg-1458-0> .panel-row-style , #panel-1458-0-0-0> .panel-widget-style , #pg-1458-1> .panel-row-style , #pg-1458-2> .panel-row-style , #panel-1458-2-0-0> .panel-widget-style , #pg-1458-3> .panel-row-style , #pg-1458-4> .panel-row-style , #panel-1458-4-0-0> .panel-widget-style , #pg-1458-5> .panel-row-style , #pg-1458-10> .panel-row-style , #panel-1458-10-0-0> .panel-widget-style , #pg-1458-11> .panel-row-style , #pg-1458-12> .panel-row-style , #panel-1458-12-0-0> .panel-widget-style , #pg-1458-13> .panel-row-style , #pg-1458-14> .panel-row-style , #panel-1458-14-0-0> .panel-widget-style , #pg-1458-15> .panel-row-style , #pg-1458-16> .panel-row-style , #panel-1458-16-0-0> .panel-widget-style , #pg-1458-17> .panel-row-style , #pg-1458-18> .panel-row-style , #panel-1458-18-0-0> .panel-widget-style , #pg-1458-19> .panel-row-style , #pg-1458-20> .panel-row-style , #panel-1458-20-0-0> .panel-widget-style , #pg-1458-21> .panel-row-style , #pg-1458-22> .panel-row-style , #panel-1458-22-0-0> .panel-widget-style , #pg-1458-23> .panel-row-style , #pg-1458-24> .panel-row-style , #panel-1458-24-0-0> .panel-widget-style , #pg-1458-25> .panel-row-style , #pg-1458-26> .panel-row-style , #pg-1458-27> .panel-row-style , #pg-1458-28> .panel-row-style , #panel-1458-28-0-0> .panel-widget-style , #pg-1458-29> .panel-row-style , #pg-1458-30> .panel-row-style { font-family:AvenirLT-Book, sans-serif !important } #pg-1458-0.panel-has-style > .panel-row-style, #pg-1458-0.panel-no-style , #pg-1458-1.panel-has-style > .panel-row-style, #pg-1458-1.panel-no-style , #pg-1458-2.panel-has-style > .panel-row-style, #pg-1458-2.panel-no-style , #pg-1458-3.panel-has-style > .panel-row-style, #pg-1458-3.panel-no-style , #pg-1458-4.panel-has-style > .panel-row-style, #pg-1458-4.panel-no-style , #pg-1458-5.panel-has-style > .panel-row-style, #pg-1458-5.panel-no-style , #pg-1458-6.panel-has-style > .panel-row-style, #pg-1458-6.panel-no-style , #pg-1458-7.panel-has-style > .panel-row-style, #pg-1458-7.panel-no-style , #pg-1458-8.panel-has-style > .panel-row-style, #pg-1458-8.panel-no-style , #pg-1458-9.panel-has-style > .panel-row-style, #pg-1458-9.panel-no-style , #pg-1458-10.panel-has-style > .panel-row-style, #pg-1458-10.panel-no-style , #pg-1458-11.panel-has-style > .panel-row-style, #pg-1458-11.panel-no-style , #pg-1458-12.panel-has-style > .panel-row-style, #pg-1458-12.panel-no-style , #pg-1458-13.panel-has-style > .panel-row-style, #pg-1458-13.panel-no-style , #pg-1458-14.panel-has-style > .panel-row-style, #pg-1458-14.panel-no-style , #pg-1458-15.panel-has-style > .panel-row-style, #pg-1458-15.panel-no-style , #pg-1458-16.panel-has-style > .panel-row-style, #pg-1458-16.panel-no-style , #pg-1458-17.panel-has-style > .panel-row-style, #pg-1458-17.panel-no-style , #pg-1458-18.panel-has-style > .panel-row-style, #pg-1458-18.panel-no-style , #pg-1458-19.panel-has-style > .panel-row-style, #pg-1458-19.panel-no-style , #pg-1458-20.panel-has-style > .panel-row-style, #pg-1458-20.panel-no-style , #pg-1458-21.panel-has-style > .panel-row-style, #pg-1458-21.panel-no-style , #pg-1458-22.panel-has-style > .panel-row-style, #pg-1458-22.panel-no-style , #pg-1458-23.panel-has-style > .panel-row-style, #pg-1458-23.panel-no-style , #pg-1458-24.panel-has-style > .panel-row-style, #pg-1458-24.panel-no-style , #pg-1458-25.panel-has-style > .panel-row-style, #pg-1458-25.panel-no-style , #pg-1458-26.panel-has-style > .panel-row-style, #pg-1458-26.panel-no-style , #pg-1458-27.panel-has-style > .panel-row-style, #pg-1458-27.panel-no-style , #pg-1458-28.panel-has-style > .panel-row-style, #pg-1458-28.panel-no-style , #pg-1458-29.panel-has-style > .panel-row-style, #pg-1458-29.panel-no-style , #pg-1458-30.panel-has-style > .panel-row-style, #pg-1458-30.panel-no-style { -webkit-align-items:flex-start;align-items:flex-start } @media (max-width:780px){ #pg-1458-0.panel-no-style, #pg-1458-0.panel-has-style > .panel-row-style, #pg-1458-0 , #pg-1458-1.panel-no-style, #pg-1458-1.panel-has-style > .panel-row-style, #pg-1458-1 , #pg-1458-2.panel-no-style, #pg-1458-2.panel-has-style > .panel-row-style, #pg-1458-2 , #pg-1458-3.panel-no-style, #pg-1458-3.panel-has-style > .panel-row-style, #pg-1458-3 , #pg-1458-4.panel-no-style, #pg-1458-4.panel-has-style > .panel-row-style, #pg-1458-4 , #pg-1458-5.panel-no-style, #pg-1458-5.panel-has-style > .panel-row-style, #pg-1458-5 , #pg-1458-6.panel-no-style, #pg-1458-6.panel-has-style > .panel-row-style, #pg-1458-6 , #pg-1458-7.panel-no-style, #pg-1458-7.panel-has-style > .panel-row-style, #pg-1458-7 , #pg-1458-8.panel-no-style, #pg-1458-8.panel-has-style > .panel-row-style, #pg-1458-8 , #pg-1458-9.panel-no-style, #pg-1458-9.panel-has-style > .panel-row-style, #pg-1458-9 , #pg-1458-10.panel-no-style, #pg-1458-10.panel-has-style > .panel-row-style, #pg-1458-10 , #pg-1458-11.panel-no-style, #pg-1458-11.panel-has-style > .panel-row-style, #pg-1458-11 , #pg-1458-12.panel-no-style, #pg-1458-12.panel-has-style > .panel-row-style, #pg-1458-12 , #pg-1458-13.panel-no-style, #pg-1458-13.panel-has-style > .panel-row-style, #pg-1458-13 , #pg-1458-14.panel-no-style, #pg-1458-14.panel-has-style > .panel-row-style, #pg-1458-14 , #pg-1458-15.panel-no-style, #pg-1458-15.panel-has-style > .panel-row-style, #pg-1458-15 , #pg-1458-16.panel-no-style, #pg-1458-16.panel-has-style > .panel-row-style, #pg-1458-16 , #pg-1458-17.panel-no-style, #pg-1458-17.panel-has-style > .panel-row-style, #pg-1458-17 , #pg-1458-18.panel-no-style, #pg-1458-18.panel-has-style > .panel-row-style, #pg-1458-18 , #pg-1458-19.panel-no-style, #pg-1458-19.panel-has-style > .panel-row-style, #pg-1458-19 , #pg-1458-20.panel-no-style, #pg-1458-20.panel-has-style > .panel-row-style, #pg-1458-20 , #pg-1458-21.panel-no-style, #pg-1458-21.panel-has-style > .panel-row-style, #pg-1458-21 , #pg-1458-22.panel-no-style, #pg-1458-22.panel-has-style > .panel-row-style, #pg-1458-22 , #pg-1458-23.panel-no-style, #pg-1458-23.panel-has-style > .panel-row-style, #pg-1458-23 , #pg-1458-24.panel-no-style, #pg-1458-24.panel-has-style > .panel-row-style, #pg-1458-24 , #pg-1458-25.panel-no-style, #pg-1458-25.panel-has-style > .panel-row-style, #pg-1458-25 , #pg-1458-26.panel-no-style, #pg-1458-26.panel-has-style > .panel-row-style, #pg-1458-26 , #pg-1458-27.panel-no-style, #pg-1458-27.panel-has-style > .panel-row-style, #pg-1458-27 , #pg-1458-28.panel-no-style, #pg-1458-28.panel-has-style > .panel-row-style, #pg-1458-28 , #pg-1458-29.panel-no-style, #pg-1458-29.panel-has-style > .panel-row-style, #pg-1458-29 , #pg-1458-30.panel-no-style, #pg-1458-30.panel-has-style > .panel-row-style, #pg-1458-30 { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-1458-0 > .panel-grid-cell , #pg-1458-0 > .panel-row-style > .panel-grid-cell , #pg-1458-1 > .panel-grid-cell , #pg-1458-1 > .panel-row-style > .panel-grid-cell , #pg-1458-2 > .panel-grid-cell , #pg-1458-2 > .panel-row-style > .panel-grid-cell , #pg-1458-3 > .panel-grid-cell , #pg-1458-3 > .panel-row-style > .panel-grid-cell , #pg-1458-4 > .panel-grid-cell , #pg-1458-4 > .panel-row-style > .panel-grid-cell , #pg-1458-5 > .panel-grid-cell , #pg-1458-5 > .panel-row-style > .panel-grid-cell , #pg-1458-6 > .panel-grid-cell , #pg-1458-6 > .panel-row-style > .panel-grid-cell , #pg-1458-7 > .panel-grid-cell , #pg-1458-7 > .panel-row-style > .panel-grid-cell , #pg-1458-8 > .panel-grid-cell , #pg-1458-8 > .panel-row-style > .panel-grid-cell , #pg-1458-9 > .panel-grid-cell , #pg-1458-9 > .panel-row-style > .panel-grid-cell , #pg-1458-10 > .panel-grid-cell , #pg-1458-10 > .panel-row-style > .panel-grid-cell , #pg-1458-11 > .panel-grid-cell , #pg-1458-11 > .panel-row-style > .panel-grid-cell , #pg-1458-12 > .panel-grid-cell , #pg-1458-12 > .panel-row-style > .panel-grid-cell , #pg-1458-13 > .panel-grid-cell , #pg-1458-13 > .panel-row-style > .panel-grid-cell , #pg-1458-14 > .panel-grid-cell , #pg-1458-14 > .panel-row-style > .panel-grid-cell , #pg-1458-15 > .panel-grid-cell , #pg-1458-15 > .panel-row-style > .panel-grid-cell , #pg-1458-16 > .panel-grid-cell , #pg-1458-16 > .panel-row-style > .panel-grid-cell , #pg-1458-17 > .panel-grid-cell , #pg-1458-17 > .panel-row-style > .panel-grid-cell , #pg-1458-18 > .panel-grid-cell , #pg-1458-18 > .panel-row-style > .panel-grid-cell , #pg-1458-19 > .panel-grid-cell , #pg-1458-19 > .panel-row-style > .panel-grid-cell , #pg-1458-20 > .panel-grid-cell , #pg-1458-20 > .panel-row-style > .panel-grid-cell , #pg-1458-21 > .panel-grid-cell , #pg-1458-21 > .panel-row-style > .panel-grid-cell , #pg-1458-22 > .panel-grid-cell , #pg-1458-22 > .panel-row-style > .panel-grid-cell , #pg-1458-23 > .panel-grid-cell , #pg-1458-23 > .panel-row-style > .panel-grid-cell , #pg-1458-24 > .panel-grid-cell , #pg-1458-24 > .panel-row-style > .panel-grid-cell , #pg-1458-25 > .panel-grid-cell , #pg-1458-25 > .panel-row-style > .panel-grid-cell , #pg-1458-26 > .panel-grid-cell , #pg-1458-26 > .panel-row-style > .panel-grid-cell , #pg-1458-27 > .panel-grid-cell , #pg-1458-27 > .panel-row-style > .panel-grid-cell , #pg-1458-28 > .panel-grid-cell , #pg-1458-28 > .panel-row-style > .panel-grid-cell , #pg-1458-29 > .panel-grid-cell , #pg-1458-29 > .panel-row-style > .panel-grid-cell , #pg-1458-30 > .panel-grid-cell , #pg-1458-30 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pgc-1458-1-0 , #pgc-1458-3-0 , #pgc-1458-5-0 , #pgc-1458-11-0 , #pgc-1458-13-0 , #pgc-1458-15-0 , #pgc-1458-17-0 , #pgc-1458-19-0 , #pgc-1458-21-0 , #pgc-1458-23-0 , #pgc-1458-25-0 , #pgc-1458-29-0 { margin-bottom:30px } #pl-1458 .panel-grid-cell { padding:0 } #pl-1458 .panel-grid .panel-grid-cell-empty { display:none } #pl-1458 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  } 

.panel-grid.panel-has-style>.panel-row-style,.panel-grid.panel-no-style{display:flex;-ms-flex-wrap:wrap;flex-wrap:nowrap;-ms-justify-content:space-between;justify-content:space-between}.panel-grid .so-parallax{position:relative}.panel-grid .so-parallax>:not(.simpleParallax){position:relative;z-index:1}.panel-grid .so-parallax .simpleParallax{overflow:hidden}.panel-grid .so-parallax .simpleParallax,.panel-grid .so-parallax img[data-siteorigin-parallax]{bottom:0;left:0;position:absolute;right:0;top:0;width:100%;z-index:0}.panel-layout.panel-is-rtl .panel-grid.panel-has-style>.panel-row-style,.panel-layout.panel-is-rtl .panel-grid.panel-no-style{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.panel-grid-cell{-ms-box-sizing:border-box;box-sizing:border-box}.panel-grid-cell .panel-cell-style{height:100%}.panel-grid-cell .so-panel{zoom:1}.panel-grid-cell .so-panel:before{content:"";display:block}.panel-grid-cell .so-panel:after{content:"";display:table;clear:both}.panel-grid-cell .panel-last-child{margin-bottom:0}.panel-grid-cell .widget-title{margin-top:0}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container){overflow-x:hidden}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container) .siteorigin-panels-stretch{margin-right:-1000px!important;margin-left:-1000px!important;padding-right:1000px!important;padding-left:1000px!important}

@media screen and (min-width : 769px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2020/04/web_fotos_fogodechao_churrasco-34.jpg');
            }
        }
        @media screen and (max-width : 768px) {
            #page-header {
                                    background-image: url('https://fogodechao.com.br/wp-content/uploads/2020/04/web_fotos_fogodechao_churrasco-34.jpg');
                            }
        }
</style>
<header id="page-header">
   <article>
      <h1 class="page-titulo">FOGO TO GO</h1>
      <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
      <h2 class="page-subtitulo">FAÇA SEU PEDIDO PELO WHATSAPP E RETIRE EM SUA UNIDADE DE PREFERÊNCIA</h2>
   </article>
   <section class="categorias">
      <div class="container-fluid">
         <ul class="categorias-lista">
            <li class="">
               <a href="https://fogodechao.com.br/menu/carnes/">
               Carnes                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/frango-cordeiro-e-porco/">
               Frango, Cordeiro e Porco                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/peixes/">
               Peixes                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/acompanhamentos/">
               Acompanhamentos                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/saladas/">
               Mesas de Saladas                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/sobremesas/">
               Sobremesas                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/barfogo/">
               Bar Fogo                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/vinhos/">
               Vinhos                                </a>
            </li>
            <li class="">
               <a href="https://fogodechao.com.br/menu/fogo-gourmet/">
               Fogo Gourmet                                </a>
            </li>
            <li class="active">
               <a href="https://fogodechao.com.br/menu/fogotogo/">
               Fogo To Go                                </a>
            </li>
         </ul>
      </div>
   </section>
</header>
<main id="item-cardapio" class="main-page">
   <section class="submenu-nav-mobile">
      <select class="submenu-nav-mobile-select">
         <option class="nav-" value="https://fogodechao.com.br/menu/carnes/">Carnes</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/frango-cordeiro-e-porco/">Frango, Cordeiro e Porco</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/peixes/">Peixes</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/acompanhamentos/">Acompanhamentos</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/saladas/">Mesas de Saladas</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/sobremesas/">Sobremesas</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/barfogo/">Bar Fogo</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/vinhos/">Vinhos</option>
         <option class="nav-" value="https://fogodechao.com.br/menu/fogo-gourmet/">Fogo Gourmet</option>
         <option class="nav-" selected="" value="https://fogodechao.com.br/menu/fogotogo/">Fogo To Go</option>
      </select>
   </section>
   <section id="itens-cardapio" class="container fdc-cardapio--fogo-to-go">
      <div id="pl-1458" class="panel-layout">
         <div id="pg-1458-0" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-0">
               <div id="pgc-1458-0-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Fogo Pocket 1 - Porção Individual</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-1" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-1">
               <div id="pgc-1458-1-0" class="panel-grid-cell">
                  <div id="panel-1458-1-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="1">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Filé de Frango</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td><strong>Coxa de Frango</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td><strong>Picanha</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-1-1" class="panel-grid-cell">
                  <div id="panel-1458-1-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="2">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Fraldinha</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Filé Mignon</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Bife Ancho</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por 1 assado (aprox 150g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-2" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-2">
               <div id="pgc-1458-2-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Fogo Pocket 2 - Porção para duas pessoas</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-3" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-3">
               <div id="pgc-1458-3-0" class="panel-grid-cell">
                  <div id="panel-1458-3-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="4">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Filé de Frango</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Coxa de Frango</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Picanha </strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-3-1" class="panel-grid-cell">
                  <div id="panel-1458-3-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="5">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Fraldinha</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Filé Mignon</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Bife Ancho</strong><br>
                                       Uma porção ideal para uma refeição leve e rápida composta por uma opção de assado (aprox. 300 g) + 2 opções de acompanhamentos: Arroz branco, Arroz Biro-Biro, Polenta Frita, Salada de Maionese, Rúcula com Manga ou Salada Verde.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-4" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-4">
               <div id="pgc-1458-4-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Saladas e acompanhamentos</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-5" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-5">
               <div id="pgc-1458-5-0" class="panel-grid-cell">
                  <div id="panel-1458-5-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="7">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Arroz biro-biro</strong><br>
                                       Arroz branco com ovos, cebola, batata-palha e bacon
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Arroz branco</strong><br>
                                       Arroz branco soltinho
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Batatas fritas</strong><br>
                                       Porção de Batatas Fritas
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Farofa de Ovos</strong><br>
                                       Farinha de mandioca torrada, acrescida de ovos, bacon e temperos verdes
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Feijão Preto com Carne</strong><br>
                                       Tradicional feijão mexido gaúcho feito com feijão preto com linguiça e costelinha
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Salada de Maionese</strong><br>
                                       Salada de batata e cenoura com molho de maionese
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Mix de Folhas Verdes</strong><br>
                                       Combinação de folhas verdes da estação, acompanha molho mostarda
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-5-1" class="panel-grid-cell">
                  <div id="panel-1458-5-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="8">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Palmito com tomate</strong><br>
                                       Deliciosa salada fresca com palmitos e tomates caqui
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Polenta Frita</strong><br>
                                       Porção de polentas fritas
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Pão de Queijo</strong><br>
                                       Porção com 12 pães de queijo quentinhos
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Rúcula com Manga</strong><br>
                                       Tenras folhas de rúcula com pedaços de manga, acompanha molho italiano
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Salada Caesar</strong><br>
                                       Alface romana baby temperada com molho à base de maionese, filé de anchovas , alho e mostarda. Para finalizar um toque de queijo parmesão ralado.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Salpicão de Frango</strong><br>
                                       Salada com peito de frango desfiado, maionese, creme de leite, salsão e temperos.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-6" class="panel-grid panel-no-style">
            <div id="pgc-1458-6-0" class="panel-grid-cell">
               <div id="panel-1458-6-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="9">
                  <div class="so-widget-sow-editor so-widget-sow-editor-base">
                     <div class="siteorigin-widget-tinymce textwidget">
                        <article class="fdc-titulo">
                           <h2 style="font-family: AvenirLT-Book, sans-serif !important;">Fogo para família Ancho – 04 pessoas</h2>
                        </article>
                        <p>&nbsp;</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="5">
                           <tbody>
                              <tr>
                                 <td style="font-family: AvenirLT-Book, sans-serif !important;">Bife Ancho 375g, coxa de frango 300g, costela de porco 325g, linguiça 150g, 5 acompanhamentos ou salada para escolha, dentre as opções: arroz branco, arroz biro biro, batata frita, vinagrete, mix de folhas verdes, rúcula com manga e salada de maionese.</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-7" class="panel-grid panel-no-style">
            <div id="pgc-1458-7-0" class="panel-grid-cell">
               <div id="panel-1458-7-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="10">
                  <div class="so-widget-sow-editor so-widget-sow-editor-base">
                     <div class="siteorigin-widget-tinymce textwidget">
                        <article class="fdc-titulo">
                           <h2 style="font-family: AvenirLT-Book, sans-serif !important;">Fogo para família Ancho – 06 pessoas</h2>
                        </article>
                        <p>&nbsp;</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="5">
                           <tbody>
                              <tr>
                                 <td style="font-family: AvenirLT-Book, sans-serif !important;">Bife Ancho 570g, coxa de frango 450g, costela de porco 490g, linguiça 225g, 5 acompanhamentos ou salada para escolha, dentre as opções: arroz branco, arroz biro biro, batata frita, vinagrete, mix de folhas verdes, rúcula com manga e salada de maionese.</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-8" class="panel-grid panel-no-style">
            <div id="pgc-1458-8-0" class="panel-grid-cell">
               <div id="panel-1458-8-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="11">
                  <div class="so-widget-sow-editor so-widget-sow-editor-base">
                     <div class="siteorigin-widget-tinymce textwidget">
                        <article class="fdc-titulo">
                           <h2 style="font-family: AvenirLT-Book, sans-serif !important;">Fogo para família Maminha - 4 pessoas</h2>
                        </article>
                        <p>&nbsp;</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="5">
                           <tbody>
                              <tr>
                                 <td style="font-family: AvenirLT-Book, sans-serif !important;">Maminha 400g, coxa de frango 300g, costela de porco 200g, linguiça 240g, saladas e acompanhamentos.</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-9" class="panel-grid panel-no-style">
            <div id="pgc-1458-9-0" class="panel-grid-cell">
               <div id="panel-1458-9-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="12">
                  <div class="so-widget-sow-editor so-widget-sow-editor-base">
                     <div class="siteorigin-widget-tinymce textwidget">
                        <article class="fdc-titulo">
                           <h2 style="font-family: AvenirLT-Book, sans-serif !important;">Fogo para família Maminha - 6 pessoas</h2>
                        </article>
                        <p>&nbsp;</p>
                        <table border="0" width="100%" cellspacing="0" cellpadding="5">
                           <tbody>
                              <tr>
                                 <td style="font-family: AvenirLT-Book, sans-serif !important;">Maminha 550g, coxa de frango 450g, costela de porco 490g, linguiça 225g, saladas e acompanhamentos.</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-10" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-10">
               <div id="pgc-1458-10-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Molhos</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-11" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-11">
               <div id="pgc-1458-11-0" class="panel-grid-cell">
                  <div id="panel-1458-11-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="14">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td width="90%"><strong>Vinagrete</strong><br>
                                       Típico molho vinagrete gaúcho com tomates e cebolas
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-11-1" class="panel-grid-cell">
                  <div id="panel-1458-11-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="15">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Chimichurri</strong><br>
                                       Molho especial para carnes vermelhas levemente picante à base de ervas e especiarias.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-12" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-12">
               <div id="pgc-1458-12-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Direto da Churrasqueira - porção individual</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-13" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-13">
               <div id="pgc-1458-13-0" class="panel-grid-cell">
                  <div id="panel-1458-13-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="17">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Bife ancho</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Fraldinha</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Picanha</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Linguiça de Pernil</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-13-1" class="panel-grid-cell">
                  <div id="panel-1458-13-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="18">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Costela de Porco</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Coxa de Frango</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Peito de frango</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Salmão</strong><br>
                                       Aproximadamente 250g
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-14" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-14">
               <div id="pgc-1458-14-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Direto da Churrasqueira - porção para duas pessoas</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-15" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-15">
               <div id="pgc-1458-15-0" class="panel-grid-cell">
                  <div id="panel-1458-15-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="20">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Bife ancho</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Fraldinha</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Picanha</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Linguiça de Pernil</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-15-1" class="panel-grid-cell">
                  <div id="panel-1458-15-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="21">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Costela de Porco</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Coxa de Frango</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Peito de frango</strong><br>
                                       Aproximadamente 500g
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-16" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-16">
               <div id="pgc-1458-16-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Sobremesas</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-17" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-17">
               <div id="pgc-1458-17-0" class="panel-grid-cell">
                  <div id="panel-1458-17-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="23">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td>
                                       <strong>Petit Gateau </strong>
                                       <p></p>
                                       <div>Bolo de chocolate quente com sorvete de creme ou chocolate.</div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-17-1" class="panel-grid-cell">
                  <div id="panel-1458-17-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="24">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Pudim</strong><br>
                                       Delicioso pudim de leite condensado.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-18" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-18">
               <div id="pgc-1458-18-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Bebidas</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-19" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-19">
               <div id="pgc-1458-19-0" class="panel-grid-cell">
                  <div id="panel-1458-19-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="26">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table width="100%" border="0" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Água mineral</strong><br>
                                       Água Mineral Crystal Vip sem gás - 350ml
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Água mineral com gás</strong><br>
                                       Água Mineral Crystal Vip com gás - 350ml
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Refrigerante em lata</strong><br>
                                       Coca-Cola, Coca-Cola sem açúcar, Sprite e citrus e Guaraná - 350 ml
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-19-1" class="panel-grid-cell">
                  <div id="panel-1458-19-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="27">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Suco natural de fruta</strong><br>
                                       Sucos naturais de abacaxi, laranja, limão, melancia - 450 ml
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Cerveja Heineken Long Neck - 330ml</strong><br>
                                       Fermentada em tanques horizontais com a Levedura A por 28 dias, o dobro de tempo da maioria das cervejas, o que garante o perfeito equilíbrio de aromas e sabores.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-20" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-20">
               <div id="pgc-1458-20-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Vinho em garrafa 187ml</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-21" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-21">
               <div id="pgc-1458-21-0" class="panel-grid-cell">
                  <div id="panel-1458-21-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="29">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Chandon Brut</strong><br>
                                       Espumante
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Petirrojo</strong><br>
                                       Vinho tinto
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-21-1" class="panel-grid-cell">
                  <div id="panel-1458-21-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="30">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Pinot Grigio</strong><br>
                                       Vinho tinto
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-22" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-22">
               <div id="pgc-1458-22-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Vinho em garrafa 750ml</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-23" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-23">
               <div id="pgc-1458-23-0" class="panel-grid-cell">
                  <div id="panel-1458-23-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="32">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Alto las Hormigas blend&nbsp;</strong><br>
                                       Assinado por Alberto Antonini, Attilio Pagli e Leonardo Erazo, enólogos do projeto Altos las Hormigas, este blend é fresco, frutado e equilibrado. Fermentado em tanques de cimento, revela notas de frutas vermelhas maduras, como cerejas e framboesas, a toques florais e de amoras.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><strong>Jorjão- Família Zuccardi Malbec&nbsp;</strong><br>
                                       Um Malbec de corpo médio, com acidez natural e mais fresco em função da altitude do Valle de Uco e do estilo que Zuccardi traz para seus vinhos atualmente.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-23-1" class="panel-grid-cell">
                  <div id="panel-1458-23-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="33">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Petirrojo Cabernet / Carmenere</strong><br>
                                       Elegante e equilibrado cabernet / carménère elaborado pelas mãos habilidosas de Alberto Antonini, este tinto revela notas de frutas vermelhas e toques defumados. Um autêntico carménère com excelente relação qualidade x preço.
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div><strong>Fogo de Chão Cabernet Sauvignon / Carmenere - Vina Montes</strong><br>
                                          Segundo a revista Wine Spectator, “é difícil não gostar deste vinho”. Ótimo tinto elaborado com uma emblemática mescla chilena: Cabernet Sauvignon (70%) e Carménère (30%), plantadas no vinhedo Apalta, na zona do Vale de Colchagua. Possui um delicioso toque de baunilha, proveniente do envelhecimento em barricas de carvalho americano.
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-24" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-24">
               <div id="pgc-1458-24-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>Fogo butchery - carnes in natura</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-25" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-25">
               <div id="pgc-1458-25-0" class="panel-grid-cell">
                  <div id="panel-1458-25-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="35">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Kit Churrasco 1 - carnes in natura</strong><br>
                                       Carnes in natura para você preparar o churrasco na sua casa, com a qualidade Fogo de Chão - Serve 06 pessoas.<br>
                                       Picanha 500 g, bife ancho 500 g, coxa de frango 400 g, linguiça de pernil 300 g, molho chimichurri, vinagrete e farofa.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-25-1" class="panel-grid-cell">
                  <div id="panel-1458-25-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="36">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="5">
                              <tbody>
                                 <tr>
                                    <td><strong>Kit Churrasco 2 - carnes in natura</strong><br>
                                       Carnes in natura para você preparar o churrasco na sua casa, com a qualidade Fogo de Chão - Serve 06 pessoas<br>
                                       Filé mignon 500 g, bife de chorizo 500 g, peito de frango 500 g, molho chimichurri, vinagrete e farofa.
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-26" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-26">
               <div id="pgc-1458-26-0" class="panel-grid-cell">
                  <div id="panel-1458-26-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="37">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <p style="text-align: center !important;"><span style="font-size: 14pt;">Faça aqui o <a href="https://fogodechao.com.br/wp-content/uploads/2023/05/Fogo_TOGO_Menu_ATUALIZADO_V3.pdf" target="_blank" rel="noopener noreferrer" download="">download do cardápio »</a></span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-27" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-27">
               <div id="pgc-1458-27-0" class="panel-grid-cell">
                  <div id="panel-1458-27-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="38">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <h3>Faça seu pedido pelo whatsapp, retire em sua unidade de preferência e garanta 10% de desconto.</h3>
                           <p><span style="font-size: 10pt;">*Desconto não é aplicado em pedidos do iFood. Válido apenas na modalidade Fogo to-go, mencionando a promoção.</span></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-28" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-28">
               <div id="pgc-1458-28-0" class="panel-grid-cell">
                  <div class="col-12">
                     <article class="fdc-titulo">
                        <h2>TELEFONES</h2>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-29" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-29">
               <div id="pgc-1458-29-0" class="panel-grid-cell">
                  <div id="panel-1458-29-0-0" class="so-panel widget widget_sow-editor panel-first-child" data-index="40">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td><strong>São Paulo</strong><br>
                                       • Jardins <a href="tel:1130622223">(11) 3062-2223</a> / <a href="https://api.whatsapp.com/send?phone=5511957803669&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11) 95780-3669</a><br>
                                       • Center Norte <a href="tel:1120891736" target="_blank" rel="noopener noreferrer">(11) 2089-1736</a> / <a href="https://api.whatsapp.com/send?phone=5511976309133&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11) 97630-9133</a><br>
                                       • Vila Olímpia <a href="tel:1155050791" target="_blank" rel="noopener noreferrer">(11) 5505-0791</a> / <a href="https://api.whatsapp.com/send?phone=55991109093&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11)99110-9093</a><br>
                                       • Moema <a href="tel:1150561795" target="_blank" rel="noopener noreferrer">(11) 5056-1795</a> / <a href="https://api.whatsapp.com/send?phone=55992309631&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11) 99230-9631</a>
                                    </td>
                                    <td valign="bottom" nowrap="nowrap"></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td valign="bottom" nowrap="nowrap"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="panel-1458-29-0-1" class="so-panel widget widget_sow-editor panel-last-child" data-index="41">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                        </div>
                     </div>
                  </div>
               </div>
               <div id="pgc-1458-29-1" class="panel-grid-cell">
                  <div id="panel-1458-29-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="42">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <table border="0" width="100%" cellspacing="0" cellpadding="0">
                              <tbody>
                                 <tr>
                                    <td>
                                       <strong>Rio de Janeiro</strong><br>
                                       • Botafogo <a href="tel:2125421545">(21) 2542-1545</a> / <a href="https://api.whatsapp.com/send?phone=55119991201779&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11) 999120-1779</a>
                                       <p></p>
                                       <p><strong>Brasília<br>
                                          </strong> • <a href="tel:6133224666" target="_blank" rel="noopener noreferrer">(61) 3322-4666</a> / <a href="https://api.whatsapp.com/send?phone=5511991105886&amp;text=Fa%C3%A7a%20seu%20pedido" target="_blank" rel="noopener noreferrer">(11) 99110-5886</a>
                                       </p>
                                    </td>
                                    <td valign="bottom" nowrap="nowrap"></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td valign="bottom" nowrap="nowrap"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="pg-1458-30" class="panel-grid panel-has-style">
            <div class="panel-row-style panel-row-style-for-1458-30">
               <div id="pgc-1458-30-0" class="panel-grid-cell">
                  <div id="panel-1458-30-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="43">
                     <div class="so-widget-sow-editor so-widget-sow-editor-base">
                        <div class="siteorigin-widget-tinymce textwidget">
                           <p>Se preferir faça seu pedido através do iFood e receba na comodidade de sua casa.</p>
                           <p><a class="btn-fdc" href="https://www.ifood.com.br/">iFood <i class="fa fa-caret-right"></i> </a></p>
                           <p>Ou, viva a experiência completa Fogo de Chão em uma de nossas unidades.</p>
                           <p><a class="btn-fdc" href="https://fogodechao.com.br/reservas/">Reserve já <i class="fa fa-caret-right"></i> </a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="categoria-info">
      <div class="container">
         <div class="itens-info row">
         </div>
      </div>
   </section>
</main>
<?php
get_footer();