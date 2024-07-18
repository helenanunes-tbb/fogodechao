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

/*Template Name: Peixes */

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
<style>
    @media screen and (min-width : 769px) {
        #page-header {
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-seafood_new.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-seafood_new.jpg');
        }
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo">PEIXES</h1>
        <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">A LA CARTE OU ACOMPANHADO DO BUFFET DE SALADAS</p>
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
                <li class="active">
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
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/peixes/">Peixes</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/acompanhamentos/">Acompanhamentos</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/saladas/">Mesas de Saladas</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/sobremesas/">Sobremesas</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/barfogo/">Bar Fogo</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/vinhos/">Vinhos</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogo-gourmet/">Fogo Gourmet</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogotogo/">Fogo To Go</option>
        </select>
    </section>
    <style>
        h2 (
        font-family: AvenirLT-Book, sans-serif !important;
        )
    </style>
    <section id="itens-cardapio" class="container fdc-cardapio--peixes">
        <div class="row">
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALMÃO ASSADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Prato à la carte - Posta de 220gr de Salmão guarnecido com palmito pupunha marinado no azeite e assado em churrasqueira.</p>
            </article>
            <!-- <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">COD FISH</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Prato à la carte - Posta de 220gr de Cod Fish guarnecido com espinafre azeitado e refogado de azeitonas pretas, tomate e alcaparra.</p>
            </article> -->
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALMÃO DEFUMADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Parte da nossa mesa de saladas, este peixe é uma pedida especial para surpreender o seu paladar. Não deixe de provar.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SURUBIM DEFUMADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Parte da nossa mesa de saladas, este peixe de carne branca, tenra e bastante saborosa que agrada a todos os paladares. É de dar água na boca!</p>
            </article>
        </div>
    </section>
    <section id="categoria-info">
        <div class="container">
            <div class="itens-info row">
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">PREPARAÇÃO</h4>
                        <p></p>
                        <p>Nossos chefs desenvolveram leves e elegantes receitas que destacam os sabores naturais dos peixes com uma pitada de tempero e especiarias brasileiras.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES DE ACOMPANHAMENTO</h4>
                        <p></p>
                        <p>Peixes harmonizam perfeitamente com os sabores suaves de um amanteigado Napa Valley Chardonnay ou uma caipirinha leve e refrescante. Pescados assados em brasa complementam a experiência do churrasco completo, sendo uma escolha muito apreciada e saborosa.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OUTRAS OPÇÕES</h4>
                        <p></p>
                        <p>Além de uma rica fonte de vitaminas e complexos, o peixe é uma ótima opção para aqueles que apreciam sabores especiais e únicos. Você encontra essas iguarias em versão à la carte, no menu Fogo Gourmet e em nossa mesa de saladas.</p>
                        <p></p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();