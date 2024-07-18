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

/*Template Name: Bar Fogo */

get_header();
$styles = ['item-cardapio.css', 'bar-fogo.css'];
$scripts = ['item-cardapio.js', 'bar-fogo.js'];
$idpage = 'barfogo';
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
    @media screen and (min-width : 769px) {
        #page-header {
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/11/bg_header-barfogoNovo.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/11/bg_header-barfogoNovo.jpg');
        }
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo"><img class="logo-barfogo" src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/logo_barfogo.svg"></h1>
        <br>
        <!-- <b>Notice</b>:  Undefined variable: subtitulo in <b>/home/storage/f/0a/49/fogodechaoprofis1/public_html/wp-content/themes/fogodechao/header-item-cardapio.php</b> on line <b>75</b><br> -->
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
                <li class="active">
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
                <li class="">
                    <a href="https://fogodechao.com.br/menu/fogotogo/">
                    Fogo To Go                                </a>
                </li>
            </ul>
        </div>
    </section>
</header>
<main id="bar-fogo" class="main-page">
    <section class="submenu-nav-mobile">
        <select class="submenu-nav-mobile-select">
            <option class="nav-" value="https://fogodechao.com.br/menu/carnes/">Carnes</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/frango-cordeiro-e-porco/">Frango, Cordeiro e Porco</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/peixes/">Peixes</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/acompanhamentos/">Acompanhamentos</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/saladas/">Mesas de Saladas</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/sobremesas/">Sobremesas</option>
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/barfogo/">Bar Fogo</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/vinhos/">Vinhos</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogo-gourmet/">Fogo Gourmet</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogotogo/">Fogo To Go</option>
        </select>
    </section>
    <section id="fdc-happyour">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article class="fdc-happyour--title text-center">
                        <h2>HAPPY HOUR</h2>
                        <p>De segunda a sexta das 17h às 20h</p>
                    </article>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 fdc-happyour--description">
                    <p>Uma nova maneira de apreciar o Fogo de Chão. Petiscos deliciosos e bebidas com preços especiais*.<br>
                        Venha conhecer!
                    </p>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <a class="btn-fdc btn-fdc-dark" href="https://www.fogodechao.com.br/DownloadPrecos/BAR-E-HAPPY-HOUR_BOTAFOGO.pdf" target="_blank">Confira o Cardápio <i class="fa fa-caret-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="obs">*As condições descritas no cardápio são válidas apenas para o Happy Hour, de segunda a sexta das 17h às 20h. Taxa de serviço 13% opcional não inclusa. Se beber, não dirija. A loja da Barra da Tijuca pode ter alterações de valor.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="fdc-itens-cardapio" class="container">
        <div id="pl-155" class="panel-layout">
            <div id="pg-155-0" class="panel-grid panel-no-style">
                <div id="pgc-155-0-0" class="panel-grid-cell">
                    <div id="panel-155-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0">
                        <div class="fdc-title-orange font-mrseaves-bi panel-widget-style panel-widget-style-for-155-0-0-0">
                            <div class="textwidget">
                                <h3>Um Cardápio Especial</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pg-155-1" class="panel-grid panel-no-style">
                <div id="pgc-155-1-0" class="panel-grid-cell">
                    <div class="row panel-cell-style panel-cell-style-for-155-1-0">
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Polenta Frita</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servida com molho malagueta aioli.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Mix de Pastéis</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>6 unidades nos sabores de carne e queijo.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Dadinho de Tapioca</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servido com molho de pimenta agridoce.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Frango Apimentado no Brioche</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Peito de frango marinado, servido com rúcula, tomate, cebola, aioli de manga servido no pão brioche.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Tábua de Frios</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Pão italiano, grana padano, brie, candy bancon, salame, presunto de parma, servidos com geleia de damasco.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Costela no Brioche</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Costela marinada na cerveja, servida com cebola caramelizada e muçarela no pão brioche.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Hambúrguer Premium de Picanha</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Acompanha batatas rústicas.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Tábua de Picanha Fatiada</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servido com farofa.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Tábua de Costela</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servida com molho chimichuri.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Tábua de Costela de Porco</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servida com molho chimichuri.</p>
                        </article>
                        <article class="col-12 col-md-4 cardapio-itens">
                            <header>
                                <div class="header-wrapper">
                                    <div class="section-title">Tábua de Costeleta de Cordeiro</div>
                                    <div class="section-subtitle"></div>
                                </div>
                            </header>
                            <p>Servida com molho de hortelã.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="categoria-info">
        <div class="container">
            <div class="itens-info row">
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">Arte</h4>
                        <p>Os nossos cocktails são habilmente trabalhados, como a caipirinha com frutas frescas e nossa cachaça assinatura. Muitas vezes confundido como o rum, esse espírito é criado por destilação e depois engarrafado do suco da cana de açúcar fresco.</p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES DE ACOMPANHAMENTO</h4>
                        <p></p>
                        <p>Desfrutar de um Martini brasileiro com carne grelhada, Lombo, Espetos ou um refresco de manga com batatas fritas com parmesão e polenta.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">TRADIÇÃO</h4>
                        <p></p>
                        <p>Bar Fogo é projetado para capturar o espírito do Brasil. Desfrutar de cocktails especiais e passar grandes momentos entre amigos para saborear uma variedade de sabores.</p>
                        <p></p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();