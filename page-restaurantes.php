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

/*Template Name: Restaurantes */

get_header();

?>

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_restaurantes.jpg)">
   <article>
      <h1 class="page-titulo">NOSSAS UNIDADES</h1>
      <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
      <h2 class="page-subtitulo">SELECIONE NO MAPA ABAIXO A UNIDADE DE SUA PREFERÊNCIA</h2>
   </article>
</header>
<main id="fdc-pageteste" class="main-page"><section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="fdc-page-content">
          <p><iframe src="https://fogodechao.com/locations-iframe/br/" scrolling="no" width="100%" height="1900" style="border: none;"></iframe></p>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
    <?php
get_footer();
