<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fogodechao
 */

get_header();
?>
	<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_restaurantes.jpg)">
		<article>
			<h1 class="page-titulo"><?php the_title(); ?></h1>
		</article>
	</header>

	<main id="primary" class="site-page">
		<div class="container"> 
			<?php if ( have_posts() ) : while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
