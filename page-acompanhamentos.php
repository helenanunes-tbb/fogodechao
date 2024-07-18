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

/*Template Name: Acompanhamentos */

get_header();
$styles = ['item-cardapio.css'];
$scripts = ['item-cardapio.js'];
$idpage = 'acompanhamentos';
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
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-sides.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-sides.jpg');
        }
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo">ACOMPANHAMENTOS</h1>
        <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">COMPARTILHÁVEL E SERVIDO EM ESTILO FAMILIAR COMO PARTE DA EXPERIÊNCIA DO CHURRASCO</p>
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
                <li class="active">
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
            <option class="nav-" value="https://fogodechao.com.br/menu/peixes/">Peixes</option>
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/acompanhamentos/">Acompanhamentos</option>
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
    <section id="itens-cardapio" class="container fdc-cardapio--acompanhamentos">
        <div class="row">
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">BATATA FRITA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Super crocante e sequinha.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">PÃO DE QUEIJO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Leve e saboroso, o Pão de Queijo é uma receita exclusiva do Fogo de Chão.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ARROZ CARRETEIRO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>O tradicional arroz carreteiro gaúcho é feito com arroz tipo agulha (grão longo) e carne de charque.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">POLENTA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Polenta vem em versão saudável, cortada bem fininha e grelhada.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">BANANA ASSADA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Brasileiríssima, tem um toque adocicado.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">FEIJÃO MEXIDO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Originalmente feito com feijão preto, pedaços de charque, linguiça e outras carnes são desfiados ou cortados bem miúdo. Um prato no melhor estilo rústico e saboroso.</p>
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
                        <p>Estes pratos cuidadosamente selecionados são uma parte importante da experiência de churrasco. Não são apenas deliciosos, mas além de ótimas companhias para o churrasco, também limpar e refrescam o paladar para provar o próximo pedaço de seu corte preferido.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES DE ACOMPANHAMENTO</h4>
                        <p></p>
                        <p>Nossos acompanhamentos entregues às mesas, inspirados nas variadas cozinhas que compõe o rico cardápio brasileiro. Queremos proporcionar aos nossos clientes a riqueza de sabores e tradições culinárias disponíveis em nosso cardápio.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">TRADIÇÃO</h4>
                        <p></p>
                        <p>Descubra a tradição que nos inspira todos os dias a mantermos a cultura regional em destaque.</p>
                        <p></p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();