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

/*Template Name: Saladas */

get_header();
$styles = ['item-cardapio.css'];
$scripts = ['item-cardapio.js'];
$idpage = 'saladas';
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
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/03/salada2-min-1.png');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2019/03/salada2-min-1.png');
        }
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo">MESA DE SALADAS</h1>
        <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">UMA EXPERIÊNCIA CULINÁRIA</p>
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
                <li class="active">
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
            <option class="nav-" value="https://fogodechao.com.br/menu/acompanhamentos/">Acompanhamentos</option>
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/saladas/">Mesas de Saladas</option>
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
    <section id="itens-cardapio" class="container fdc-cardapio--mesas-de-saladas">
        <div class="row">
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ABÓBORA GRELHADA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ABOBRINHA GRELHADA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SURUBIM DEFUMADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">ASPARGOS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">AZEITES NOBRES</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">AZEITONAS PRETAS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">BACON FRITO (TORRESMO)</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">BERINJELA AGRIDOCE</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">BRÓCOLIS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CARPACCIO DE ABOBRINHA ITALIANA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Abobrinha, queijo parmesão ralado grosso e presunto parma tostado</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CARPACIO DE CARNE</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Lâminas de carne, queijo parmesão e lascas de queijo parmesão.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CEBOLA EM CONSERVA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CEBOLA GRELHADA COM MOLHO SHOYU</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">CORAÇÃO DE ALCACHOFRA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">FAROFA CRISPY</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALADAS VERDES</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Alface americana, rúcula, agrião e endívias.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">MAIONESE DE OVOS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Batata, ovos cozidos, salsinha e maionese</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">MIX DE COGUMELOS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Cogumelos e tomate cereja temperados com um leve toque de manjericão.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">MOLHOS VARIADOS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">MOZARELA DE BÚFALA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">OVOS DE CODORNA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">PALMITO PUPUNHA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">PÃO ITALIANO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">PRESUNTO PARMA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">QUEIJO GRANA PADANO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Queijo duro e granuloso. Com um sabor fresco, frutado e doce, lembra a fruta do abacaxi.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">QUEIJO BRIE</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Queijo de pasta mole e crosta branca, originários da região de Brie, na França</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALADA CEASAR</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Alface americana, alface romana, frango em tiras, queijo parmesão, croutons e molho caesar.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALADA CAPRESE</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Mussarela de búfala, tomates, folhas de manjericão e pesto de rúcula</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALADA GREGA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Mix com queijo feta, tomate, pepino, azeitona preta e cebola roxa.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALMÃO DEFUMADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">SALADA PRIMAVERA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Mix de folhas, tomate cereja e flor de amor perfeito.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TABULE</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Tomate, pepino, hortelã e salsa picadas e trigo para kibe</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TABULE DE QUINUA</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Quinua Vermelha e Branca, tomate e cebola roxa azeite, sal, pimenta do reino, salsinha e raspas limão siciliano.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TABULE DE FRUTAS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p>Alface americana, rúcula, uva thompson, morango, melão, maracujá, mel e gergelim preto.</p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TEMPEROS DIVERSOS</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TOMATE SECO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
            <article class="col-12 col-md-4 cardapio-itens">
                <header>
                    <div class="header-wrapper">
                        <div class="section-title">TOMATE GRELHADO</div>
                        <div class="section-subtitle"></div>
                    </div>
                </header>
                <p></p>
            </article>
        </div>
    </section>
    <section id="categoria-info">
        <div class="container">
            <div class="itens-info row">
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">PREPARAÇÃO</h4>
                        <p>Você pode desfrutar somente de nossa mesa de saladas ou saboreá-la como acompanhamento para a experiência máxima do churrasco. Mais de 40 opções entre legumes, verduras, grãos, pães, queijos, molhos e azeites selecionados para a perfeita combinação com seu paladar. Deixamos a sua disposição o que há de melhor em sabores e aromas para sua vivência ser a mais completa possível.</p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">OPÇÕES VEGETARIANAS</h4>
                        <p>Para quem não é fã de carnes, nossa mesa de saladas surpreende com a variedade de ingredientes que podem compor sua refeição. Acima de tudo, queremos nossos clientes satisfeitos em todos os aspectos e desejos que pudermos atender.</p>
                    </section>
                </article>
                <article class="col-12 col-md-4 item">
                    <section class="item-info">
                        <h4 class="font-avenir">TRADIÇÃO</h4>
                        <p>Nossa mesa de saladas reflete uma multiplicidade de influências culinárias A imigração alemã italiana entre outras, trouxeram ao Sul do Brasil especiarias memoráveis e sabores únicos para enriquecer a nossa tradição. Nossos menus são regularmente incrementados para trazer essas heranças culinárias tão fundamentais.</p>
                    </section>
                </article>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();