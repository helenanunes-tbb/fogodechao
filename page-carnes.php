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

/*Template Name: Carnes */

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
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-chicken.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-chicken.jpg');
        }
    }
</style>
<header id="page-header">
   <article>
      <h1 class="page-titulo">CARNES</h1>
      <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
      <h2 class="page-subtitulo"> </h2>
      <p class="page-descricao">OS MELHORES CORTES DO MUNDO</p>
   </article>
   <section class="categorias">
      <div class="container-fluid">
         <ul class="categorias-lista">
            <li class="active">
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
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/frango-cordeiro-e-porco/">Frango, Cordeiro e Porco</option>
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
    <!-- <section id="itens-cardapio" class="container fdc-cardapio--frango-cordeiro-e-porco">
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
    </section> -->

    <section id="itens-cardapio" class="container fdc-cardapio--carnes">
        <div class="row">
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ASSADO DE TIRA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Corte saboroso extraído da parte mais nobre da costela.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">PICANHA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>A picanha é um corte tipicamente brasileiro, muito saboroso e macio. Um dos cortes mais vendidos em nossas unidades.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ANCHO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Os cortes de bife ancho são assados lentamente, garantindo uma carne macia e suculenta com sabor único.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">FRALDINHA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Corte com paladar diferenciado, disputa com a picanha o primeiro lugar nas vendas no Fogo de Chão.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">COSTELA PREMIUM</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Este corte clássico é preparado de forma tradicional, proporcionando um sabor autêntico.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ALCATRA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>É um dos cortes mais versáteis do boi. Possui fibras macias o que a deixa extremamente saborosa.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">Bife de Chorizo</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Corte nobre tradicional da Argentina perfeitamente suculento.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CUPIM</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Caracterizado pela gordura entremeada nas fibras, este corte é lentamente assado e desmancha na boca.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">COSTELÃO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Este corte é assado lentamente por até 7 horas até alcançar o ponto perfeito.</p>
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
                        <p>A qualidade e variedade de nossas carnes vêm desde nossa fundação. Premissas que são fundamentais na tradicional culinária do sul do Brasil. É raro encontrar uma casa no Rio Grande do Sul sem uma churrasqueira construída. Este estilo de trato com a carne no modo de assar, suas facas de corte, sal, brasa e temperos é que trazem a harmonia entre sabor, suculência e textura.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES DE ACOMPANHAMENTO</h4>
                        <p></p>
                        <p>Carnes robustas são melhor apreciadas com alho, batatas e acompanhadas de um encorpado Napa Cabernet como Silver Oak ou um dos nossos especialíssimos chilenos, Don Melchor.</p>
                        <p></p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">NOSSAS SUGESTÕES</h4>
                        <p></p>
                        <p>Venha nos visitar sem pressa. Aproveite o tempo para saborear seus cortes preferidos, ou todos eles. Harmonize sua refeição com caipirinhas, vinhos, cervejas e drinks especialmente preparados.</p>
                        <p></p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();