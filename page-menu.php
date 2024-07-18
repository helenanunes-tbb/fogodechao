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

/*Template Name: Menu */

get_header();
$styles = ['cardapio.css'];
$scripts = ['cardapio.js'];
$idpage = 'cardapio';
$background = '';
$titulo = 'FOGO DE CHÃO <img src="'.get_template_directory_uri().'/assets/images/tile-prop.svg"/> <span class="serif-regular">Os melhores cortes estão aqui</span>';
$descricao = 'Uma nova opção para o seu almoço ou jantar no Fogo de Chão.';
$acao = [
    'nome' => 'FOGO GOURMET A PARTIR DE R$79,00 ',
    'link' => '/fogo-gourmet'
];
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
<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg-cardapio.jpg)">
    <article>
        <h1 class="page-titulo">FOGO DE CHÃO <img class="tile-prop" src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-prop.svg"> <span class="page-title-pos2">Os melhores cortes estão aqui</span></h1>
        <p class="page-descricao">Uma nova opção para o seu almoço ou jantar no Fogo de Chão.</p>
        <a class="page-acao btn-fdc" href="/menu/fogo-gourmet">FOGO GOURMET A PARTIR DE R$89,00</a>
    </article>
</header>
<main id="cardapio" class="main-page">
    <section id="cardapio">
        <div class="row m-0">
            <a href="/menu/carnes" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2021/02/menu_picanha.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>CARNES<span>Os Melhores Cortes Estão Aqui</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/frango-cordeiro-e-porco" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2021/02/menu_cordeiro.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Frango, Cordeiro e Porco<span>Assados Cuidadosamente</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/peixes" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2019/03/menu_seafood_new.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Peixes<span>Leve E Delicadamente Preparados</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/saladas" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/09/menu_market-table.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Mesa de Saladas<span>Uma Experiência Culinária</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/acompanhamentos" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/09/menu_sides.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Acompanhamentos<span>Um Mundo de Sabores</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/sobremesas" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2019/03/menu_desserts.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Sobremesas<span>Delicadas, Leves, Com Texturas Consistentes</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/barfogo" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/09/menu_barfogo.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Bar Fogo<span>Bebidas Especiais E Petiscos Saborosos</span></p>
                    </div>
                </div>
            </a>
            <!-- <a href="/menus/vinhos" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/09/menu_wine.jpg)"> -->
            <a href="/menus/vinhos" class="cardapio-categoria col-6 col-md-3 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2024/06/menu_wine24.png)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Vinhos<span>Combinação Perfeitamente Com A Carne</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/fogo-gourmet" class="cardapio-categoria col-6 col-md-6 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2019/03/5M1A8312_site.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Fogo Gourmet<span>Uma Novidade Para Sua Refeição Diária</span></p>
                    </div>
                </div>
            </a>
            <a href="/menu/fogotogo/" class="cardapio-categoria col-6 col-md-6 p-0" style="display: block; background-image: url(https://fogodechao.com.br/wp-content/uploads/2020/04/web_fotos_fogodechao_churrasco-40.jpg)">
                <div class="cardapio-categoria--wrapper">
                    <div class="cardapio-categoria--top"></div>
                    <div class="cardapio-categoria--titulo">
                        <p>Fogo to go<span>Faça seu pedido e retire em uma de nossas unidades</span></p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <section id="cardapio-perguntas">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cardapio-perguntas--titulo">Perguntas Frequentes:</div><br><br>
                    <div class="tile"><!--<img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt="">--></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1150px;">
                            <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                <div class="item">
                                    <div class="questao"><i>Temos opções livre de glúten?</i></div>
                                    <div class="textwidget">
                                        <p>Sim, temos! Nossas opções sem glúten mais populares são: pão de queijo, polenta frita, batatas amassadas ao alho e bananas caramelizadas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                <div class="item">
                                    <div class="questao"><i>Quais as opções para vegetarianos?</i></div>
                                    <div class="textwidget">
                                        <div>
                                            <p>Nossa mesa de saladas dispõe de uma incrível seleção de saladas sazonais e legumes frescos aspargos, palmito, cogumelos além de muitos outros.</p>
                                            <p>Além disso, dispomos também de ampla seleção de queijos importados bem como pratos à base de vegetais.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 373.333px; margin-right: 10px;">
                                <div class="item">
                                    <div class="questao"><i>Temos valores diferenciados para crianças?</i></div>
                                    <div class="textwidget">
                                        <p>Sim, nós oferecemos preços reduzidos que pode variar dependendo da idade.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div>
                </div>
            </div>
        </div>
    </section>
    <section id="encontrar">
        <article>
            <h3>Não encontrou o que estava procurando?</h3>
            <p>Escolha uma das opções abaixo:</p>
            <div class="btn-group text-center">
                <a href="/fogopedia" class="btn-fdc btn-fdc-dark m-2">
                <i class="fa fa-search"></i> Visite a FAQ
                </a>
                <a href="/faleconosco" class="btn-fdc btn-fdc-dark m-2">
                <i class="fa fa-envelope"></i> Fale Conosco
                </a>
            </div>
        </article>
    </section>
</main>

<?php
get_footer();