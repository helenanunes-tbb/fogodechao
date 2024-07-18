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

/*Template Name: Fogo Gourmet */

get_header();
$styles = ['item-cardapio.css', 'fogo-gourmet.css'];
$scripts = ['item-cardapio.js', 'fogo-gourmet.js'];
$idpage = 'fogo-gourmet';
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
            background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-gourmet.jpg');
        }
    }
    @media screen and (max-width : 768px) {
            #page-header {
                background-image: url('https://fogodechao.com.br/wp-content/uploads/2018/12/bg_header_submenu-gourmet.jpg');
        }
    }
    .panel-row-style{
        display: flex;
    }

    .panel-grid-cell-info{
        width: 90%;
    }

    .panel-grid-cell-price{
        width: 10%;
    }
</style>
<header id="page-header">
    <article>
        <h1 class="page-titulo">Fogo Gourmet</h1>
        <div class="title"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">Novas opções para seu  almoço ou jantar.</p>
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
                <li class="active">
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
<main id="fogo-gourmet" class="main-page">
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
            <option class="nav-" selected="" value="https://fogodechao.com.br/menu/fogo-gourmet/">Fogo Gourmet</option>
            <option class="nav-" value="https://fogodechao.com.br/menu/fogotogo/">Fogo To Go</option>
        </select>
    </section>
    <section id="fdc-fogo-gourmet">
        <div class="container">
            <div id="pl-161" class="panel-layout">
                <div id="pg-161-0" class="panel-grid panel-no-style">
                    <div id="pgc-161-0-0" class="panel-grid-cell">
                        <div id="panel-161-0-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="0">
                            <div class="fogo-gourmet-destaque panel-widget-style panel-widget-style-for-161-0-0-0">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: center;">Trazemos a você novas opções para seu almoço ou jantar. Os cortes de carne, frango ou peixe podem ser escolhidos e consumidos separadamente do rodízio completo e acompanhadas pela Mesa de Saladas livre. Ou se desejar, você pode optar pelo consumo somente da Mesa de Saladas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div id="pg-161-1" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-1">
                        <div id="pgc-161-1-0" class="panel-grid-cell  panel-grid-cell-info">
                            <div id="panel-161-1-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="1">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p><strong style="border-bottom: solid 1px #D59903">Mesa de Saladas e Feijoada</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-1-1" class="panel-grid-cell  panel-grid-cell-price">
                            <div id="panel-161-1-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="2">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$89</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-2" class="panel-grid panel-no-style">
                    <div id="pgc-161-2-0" class="panel-grid-cell">
                        <div id="panel-161-2-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="3">
                            <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                <div class="siteorigin-widget-tinymce textwidget">
                                    <p>Degustação livre das variadas opções de saladas, que inclui cogumelos, endívias, aspargos, alcachofras, grãos e outros vegetais, peixe como salmão, também queijos finos, presuntos, pães fresquinhos, azeites nobres, molhos e temperos, além dos pratos típicos gaúchos. Às quartas e sábados, servimos feijoada.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-3" class="panel-grid panel-no-style">
                    <div id="pgc-161-3-0" class="panel-grid-cell">
                        <div id="panel-161-3-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="4">
                            <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                <div class="siteorigin-widget-tinymce textwidget">
                                    <p><strong style="border-bottom: 1px solid #D59903;">Adicione uma das opções à Mesa de Saladas</strong></p>
                                    <p>(Peixe do dia em posta de 250gr.)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-4" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-4">
                        <div id="pgc-161-4-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-4-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="5">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Frango -</strong> Opção leve e saborosa. Frango finamente temperado e assado cuidadosamente para preservação do sabor e da suculência deste delicioso corte.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-4-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-4-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="6">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$101</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-5" class="panel-grid panel-has-style" style="display: none;">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-5">
                        <div id="pgc-161-5-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-5-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="7">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Bacalhau -</strong> Opção leve e saudável.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-5-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-5-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="8">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$ 110</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-6" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-6">
                        <div id="pgc-161-6-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-6-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="9">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Salmão -</strong> Opção leve e saudável.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-6-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-6-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="10">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$114</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-7" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-7">
                        <div id="pgc-161-7-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-7-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="11">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Costela Premium:</strong>&nbsp;Este corte clássico é preparado de forma tradicional, proporcionando um sabor autêntico.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-7-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-7-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="12">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$123</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-8" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-8">
                        <div id="pgc-161-8-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-8-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="13">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Fraldinha:</strong>&nbsp;Corte com paladar diferenciado, macio e muito apreciado por nossos clientes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-8-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-8-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="14">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$123</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-9" class="panel-grid panel-has-style">
                    <div class="fdc-gourmet--opcoes panel-row-style panel-row-style-for-161-9">
                        <div id="pgc-161-9-0" class="panel-grid-cell panel-grid-cell-info">
                            <div id="panel-161-9-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="15">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: left;"><strong>Alcatra:</strong>&nbsp;Com fibras macias que a deixa extremamente suculenta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pgc-161-9-1" class="panel-grid-cell panel-grid-cell-price">
                            <div id="panel-161-9-1-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="16">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: right;"><strong>R$123</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-10" class="panel-grid panel-no-style">
                    <div id="pgc-161-10-0" class="panel-grid-cell panel-grid-cell-empty"></div>
                </div>
                <div id="pg-161-11" class="panel-grid panel-no-style">
                    <div id="pgc-161-11-0" class="panel-grid-cell panel-grid-cell-empty"></div>
                </div>
                <div id="pg-161-12" class="panel-grid panel-has-style">
                    <div class="m-0 panel-row-style panel-row-style-for-161-12">
                        <div id="pgc-161-12-0" class="panel-grid-cell">
                            <div id="panel-161-12-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="17">
                                <div class="panel-widget-style panel-widget-style-for-161-12-0-0">
                                    <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                        <div class="siteorigin-widget-tinymce textwidget">
                                            <p style="margin: 0; font-weight: 700">Endereços</p>
                                            <hr style="margin: 0">
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pg-161-13" class="panel-grid panel-no-style">
                    <div id="pgc-161-13-0" class="panel-grid-cell">
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Jardins</strong><br>
                                    (11) 3062-2223 <br>
                                    Rua Augusta, 2. 077                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_jardinsJD.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/JARDINS.pdf">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/jardins/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Vila Olímpia</strong><br>
                                    (11) 5505-0791 <br>
                                    Av. dos Bandeirantes, 538                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_vila-olimpiaBAND.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/vila-olimpia.pdf">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/vila-olimpia/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Moema</strong><br>
                                    (11) 5056-1795 <br>
                                    Av. Moreira Guimarães, 964                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_moemaMOE.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/moema.pdf">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/moema/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Morumbi</strong><br>
                                    (11) 5555-6607<br>
                                    Piso Térreo<br>
                                    Av. Roque Petroni Júnior, 1089 - Jardim das Acácias                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_morumbiSM.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/morumbi.pdf">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/morumbi/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                    </div>
                    <div id="pgc-161-13-1" class="panel-grid-cell">
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Shopping Center Norte</strong><br>
                                    (11) 2089-1736 <br>
                                    Trav. Casalbuono, 120 <br>
                                    Estacionamento do Shopping Center Norte <br>
                                    Vila Guilherme – SP                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_center-norteCN.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/center-norte.pdf">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/shopping-center-norte/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Brasília</strong><br>
                                    (61) 3322 4666<br>
                                    ST DE CLUBES ESPORTIVOS SUL TRECHO 2 - Numero: 2/11 - ASA SUL <br>
                                    Confira aqui o cardápio e preços para Brasília                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_brasiliaDF.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/BRASILIA.PDF">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/brasilia/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Botafogo</strong><br>
                                    (21) 2542-1545<br>
                                    Av. Repórter Nestor Moreira, s/n                
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_botafogoRJ.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/BOTAFOGO.PDF">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/botafogo/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                        <div class="col-12 col-md-10 p-0">
                            <article class="fdc-endereco">
                                <header>
                                    <strong>Barra da Tijuca</strong><br>
                                    barra@fogodechao.com.br<br>
                                    (21) 3195-2074<br>
                                    Av. Das Américas, 4666 – Loja 160                 
                                </header>
                                <footer>
                                    <!-- <a href="https://fogodechao.com.br/wp-content/uploads/2023/06/Fogo-Dinner-Menu_G7_barra-da-tijucaBS.pdf">Cardápio »</a> -->
                                    <a href="https://www.fogodechao.com.br/DownloadPrecos/BARRA.PDF">Cardápio »</a>
                                    <a href="https://fogodechao.com.br/location/barra-da-tijuca/">Reservas »</a>
                                </footer>
                            </article>
                        </div>
                    </div>
                </div>
                <div id="pg-161-14" class="panel-grid panel-no-style">
                    <div id="pgc-161-14-0" class="panel-grid-cell">
                        <div id="panel-161-14-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="26">
                            <div class="fogo-gourmet-obs panel-widget-style panel-widget-style-for-161-14-0-0">
                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                    <div class="siteorigin-widget-tinymce textwidget">
                                        <p style="text-align: center;">*Não estão inclusos, bebidas, sobremesas e itens do Bar Fogo. Não é válido com outros descontos, festivais ou pacotes. Taxa de serviço 13% opcional não inclusa. Se beber, não dirija.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();