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

/*Template Name: Frango, Cordeiro e Porco */

get_header();
$styles = ['item-cardapio.css'];
$scripts = ['item-cardapio.js'];
$idpage = 'frango-cordeiro-frango';
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
            /* background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-beef.jpg'); */
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2024/06/bg_header_submenu-beef24.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
            /* background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-beef.jpg'); */
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2024/06/bg_header_submenu-beef24.jpg');
        }
    }
</style>
<header id="page-header">
   <article>
      <h1 class="page-titulo">FRANGO, CORDEIRO E PORCO</h1>
      <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
      <h2 class="page-subtitulo"> </h2>
      <p class="page-descricao">UMA VARIEDADE DE CORTES ASSADOS CUIDADOSAMENTE</p>
   </article>
   <section class="categorias">
      <div class="container-fluid">
         <ul class="categorias-lista">
            <li class="">
               <a href="https://fogodechao.com.br/menu/carnes/">
               Carnes                                </a>
            </li>
            <li class="active">
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
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/carnes/">Carnes</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/frango-cordeiro-e-porco/">Frango, Cordeiro e Porco</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/peixes/">Peixes</option>
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
    

    <section id="itens-cardapio" class="container fdc-cardapio--frango-cordeiro-e-porco">
        <div class="row">
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CORDEIRO</div>
                        <div class="section-subtitle">Costeleta</div>
                    </div>
                </header>
                <p>Consagrada como corte refinado.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CORDEIRO</div>
                        <div class="section-subtitle">Paleta</div>
                    </div>
                </header>
                <p>Corte fresco e jovem com sabor adocicado.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">FRANGO</div>
                        <div class="section-subtitle">Coração</div>
                    </div>
                </header>
                <p>Suculentos e finamente temperados.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">GALETO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Assado ao ponto e com sabor especial.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">LINGUIÇA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Trio de linguiças: linguiça de pernil, apimentada e morcilla.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SUÍNO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Costela assada lentamente com textura crocante.</p>
            </article>
        </div>
    </section>

    <section id="categoria-info">
        <div class="container">
            <div class="itens-info row">
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">PREPARO</h4>
                        <p></p>
                        <p>Sejam em costelas de porco assadas lentamente ou nas costeletas de cordeiro, todas as nossas carnes são temperadas para enaltecer sutilmente o sabor natural do corte, o que nos mantém dentro dos mesmos métodos dos nossos chefs gaúchos, que aprenderam a arte do churrasco com seus antepassados. Você vai experimentar sabores e texturas de maneiras completamente diferenciadas a cada mordida.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES DE ACOMPANHAMENTO</h4>
                        <p></p>
                        <p>Os cortes de carne de porco e linguiças combinam perfeitamente com um vinho da casta Riesling.<br>Já os cortes de frango são muito bem acompanhados por cervejas escuras, e não há nada como nossas costeletas de degustadas com uma taça de um vinho russo Vale Pinot Noir. Com uma variedade de carnes e temperos junto a uma seleção especialíssima de vinhos e cervejas é quase impossível escolher. No entanto, nossos funcionários estão aptos e treinados para ajudá-lo a encontrar a combinação perfeita para o seu paladar.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">TRADIÇÃO</h4>
                        <p></p>
                        <p>Descubra a história e a cultura que inspirou o Fogo de Chão e seu tradicional churrasco gaúcho.</p>
                        <p></p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();