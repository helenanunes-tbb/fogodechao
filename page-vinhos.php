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

/*Template Name: Vinhos */

get_header();
$styles = ['item-cardapio.css', 'bar-fogo.css'];
$scripts = ['item-cardapio.js', 'bar-fogo.js'];
$idpage = 'vinhos';
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
<style>
    .panel-grid.panel-has-style>.panel-row-style,.panel-grid.panel-no-style{display:flex;-ms-flex-wrap:wrap;flex-wrap:nowrap;-ms-justify-content:space-between;justify-content:space-between}.panel-grid .so-parallax{position:relative}.panel-grid .so-parallax>:not(.simpleParallax){position:relative;z-index:1}.panel-grid .so-parallax .simpleParallax{overflow:hidden}.panel-grid .so-parallax .simpleParallax,.panel-grid .so-parallax img[data-siteorigin-parallax]{bottom:0;left:0;position:absolute;right:0;top:0;width:100%;z-index:0}.panel-layout.panel-is-rtl .panel-grid.panel-has-style>.panel-row-style,.panel-layout.panel-is-rtl .panel-grid.panel-no-style{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.panel-grid-cell{-ms-box-sizing:border-box;box-sizing:border-box}.panel-grid-cell .panel-cell-style{height:100%}.panel-grid-cell .so-panel{zoom:1}.panel-grid-cell .so-panel:before{content:"";display:block}.panel-grid-cell .so-panel:after{content:"";display:table;clear:both}.panel-grid-cell .panel-last-child{margin-bottom:0}.panel-grid-cell .widget-title{margin-top:0}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container){overflow-x:hidden}body.siteorigin-panels-before-js:not(.siteorigin-panels-css-container) .siteorigin-panels-stretch{margin-right:-1000px!important;margin-left:-1000px!important;padding-right:1000px!important;padding-left:1000px!important}

    #pgc-158-0-0 , #pgc-158-1-0 { width:30%;width:calc(30% - ( 0.7 * 30px ) ) } #pgc-158-0-1 , #pgc-158-1-1 { width:70%;width:calc(70% - ( 0.3 * 30px ) ) } #pg-158-0 , #pl-158 .so-panel { margin-bottom:30px } #pl-158 .so-panel:last-of-type { margin-bottom:0px } #pg-158-0.panel-has-style > .panel-row-style, #pg-158-0.panel-no-style , #pg-158-1.panel-has-style > .panel-row-style, #pg-158-1.panel-no-style { -webkit-align-items:flex-start;align-items:flex-start } #pgc-158-0-1 , #pgc-158-1-1 { align-self:auto } @media (max-width:780px){ #pg-158-0.panel-no-style, #pg-158-0.panel-has-style > .panel-row-style, #pg-158-0 , #pg-158-1.panel-no-style, #pg-158-1.panel-has-style > .panel-row-style, #pg-158-1 { -webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column } #pg-158-0 > .panel-grid-cell , #pg-158-0 > .panel-row-style > .panel-grid-cell , #pg-158-1 > .panel-grid-cell , #pg-158-1 > .panel-row-style > .panel-grid-cell { width:100%;margin-right:0 } #pgc-158-0-0 , #pgc-158-1-0 { margin-bottom:30px } #pl-158 .panel-grid-cell { padding:0 } #pl-158 .panel-grid .panel-grid-cell-empty { display:none } #pl-158 .panel-grid .panel-grid-cell-mobile-last { margin-bottom:0px }  }


    @media screen and (min-width : 769px) {
        #page-header {
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-wines.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-wines.jpg');
        }
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo">VINHOS</h1>
        <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">HARMONIZAR. ESTA É A PALAVRA-CHAVE UTILIZADA NA CUIDADOSA SELEÇÃO DE VINHOS QUE COMPÕEM NOSSA ADEGA.</p>
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
                <li class="active">
                    <a href="https://fogodechao.com.br/menu/vinhos/">
                    Vinhos                                </a>
                </li>
                <li class="">
                    <a href="https://fogodechao.com.br/menu/fogo-gourmet/">
                    Fogo Gourmet                                </a>
                </li>
                <li class="">
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
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/vinhos/">Vinhos</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogo-gourmet/">Fogo Gourmet</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogotogo/">Fogo To Go</option>
        </select>
    </section>
    <section id="itens-cardapio" class="container fdc-cardapio--vinhos">
        <div id="pl-158" class="panel-layout">
            <div id="pg-158-0" class="panel-grid panel-no-style">
                <div id="pgc-158-0-0" class="panel-grid-cell">
                    <div id="panel-158-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0">
                        <div class="fdc-title-orange panel-widget-style panel-widget-style-for-158-0-0-0">
                            <h3 class="widget-title">Nacionais</h3>
                            <div class="textwidget">
                                <p>A Carta de Vinho Fogo de Chão recebeu o certificado “Award of Excellence” pela revista Wine Spectator nos últimos dez anos consecutivos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pgc-158-0-1" class="panel-grid-cell">
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CASA VALDUGA RAIZES PREMIUM</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Cabernet Sauvignon</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">MIOLO CUVEE GIUSEPPE</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Cabernet Sauvignon / Merlot</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">SALTON DESEJO</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Merlot</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CHANDON</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>brut</p>
                    </article>
                </div>
            </div>
            <div id="pg-158-1" class="panel-grid panel-no-style">
                <div id="pgc-158-1-0" class="panel-grid-cell">
                    <div id="panel-158-1-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="5">
                        <div class="fdc-title-orange panel-widget-style panel-widget-style-for-158-1-0-0">
                            <h3 class="widget-title">Importados</h3>
                            <div class="textwidget">
                                <p>Há uma variedade de rótulos que incluem espumantes, brancos, rosés, tintos e fortificados, de diversos países e regiões do mundo. São representantes das melhores safras dos mais renomados produtores.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pgc-158-1-1" class="panel-grid-cell">
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CATENA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Chardonnay</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">MONTES</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Sauvignon Blanc</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">ALAMOS</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Malbec</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">FOGO DE CHÃO</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Gran Malbec Susana Balbo</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">LUIGI BOSCA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Reserva Malbec</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">SAURUS</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Pinot Noir</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">TRIBUTO CARMENERE CALITERRA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Single Vineyard</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CARMEN CLASSIC</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Cabernet Sauvignon</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CASA LAPOSTOLE</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Merlot</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">FOGO DE CHÃO TERRANOBLE GRAN RESERVA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Cabernet Sauvignon</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">MONTES RESERVA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p>Cabernet Sauvignon</p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">CRASTO DOURO</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p></p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">QUINTA DA LAGOAVA COSTELAO &amp; TOURIGA RIBATEJO</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p></p>
                    </article>
                    <article class="col-12 col-md-6 cardapio-itens">
                        <header>
                            <div class="header-wrapper">
                                <div class="section-title">DUARTE RAPARIGA QUINTA COLHEITA</div>
                                <div class="section-subtitle"></div>
                            </div>
                        </header>
                        <p></p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section id="categoria-info">
        <div class="container">
            <div class="itens-info row">
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">SELO DE QUALIDADE | PREMIAÇÕES</h4>
                        <p>A Carta de Vinho Fogo de Chão recebeu o certificado “Award of Excellence” pela revista Wine Spectator nos últimos dez anos consecutivos. Além disso, é ganhadora dos prêmios “Excelência em Vinhos” e “Melhor Carta de Vinhos” pela revista Prazeres da Mesa.</p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">SOMMELIER</h4>
                        <p>Importante também é a atuação do Sommelier na hora de decidir pelo melhor vinho. Aqui todos os garçons são treinados para entender rapidamente o gosto do cliente e sugerir um vinho que harmonize com as carnes e com o paladar do cliente.</p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">CASAMENTO PERFEITO</h4>
                        <p>O vinho combina perfeitamente com a carne. Juntos formam um casamento quase tão natural quanto antigo. É o tipo de par em que cada um ressalta o melhor que há no outro.<br>
                            Se não for acompanhado por uma boa garrafa, um corte pode até perder parte de seu sabor original.<br>
                            E mesmo que não seja tarefa das mais fáceis, fazer essa combinação dar certo é uma das maiores recompensas da gastronomia.
                        </p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();