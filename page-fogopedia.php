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

/*Template Name: Fogopedia */

get_header();
$styles = ['fogopedia.css'];
$scripts = [];
$idpage = 'fogopedia';
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

<?php
$perguntas = new WP_Query([
    'post_type' => 'fogopedia',
    'order'     => 'DESC',
    'posts_per_page' => -1,
]);
?>

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2019/01/bg_header-fogopedia.jpg)">
   <article>
      <h1 class="page-titulo">FAQ</h1>
      <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
      <h2 class="page-subtitulo"> </h2>
      <p class="page-descricao">Confira aqui as perguntas mais frequentes dos nossos clientes ao nosso restaurante.</p>
   </article>
</header>



<main id="fogopedia" class="main-page">
<section id="fdc-fogopedia">
    <div class="container">
        <div class="row row-eq-height">
        <?php if ( $perguntas->have_posts() ) : while( $perguntas->have_posts() ) : $perguntas->the_post(); ?>
            <?php $pergunta = get_the_title(); ?>
            <?php $cliente = CFS()->get('cliente'); ?>
            <?php $local = CFS()->get('local'); ?>
            <?php $resposta = CFS()->get('resposta'); ?>
            <div class="faq-col col-12 col-md-6  mb-4">
                <div class="half faq">
                    <div class="question"><?php echo $pergunta; ?></div>
                    <div class="faq-triangle"></div>
                    <div class="faq-name"><?php echo $cliente; ?></div>
                    <div class="faq-location"><?php echo $local; ?></div>
                    <hr><div class="answer"><?php echo $resposta; ?></div>
                    <br><div class="faq-fogo"></div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>
</main>


<?php
get_footer();