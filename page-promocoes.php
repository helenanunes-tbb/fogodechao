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

/*Template Name: Promoções */

get_header();
$styles = ['promocoes.css'];
$scripts = [];
$idpage = 'promocoes';

$background = '';
$titulo = 'Fogo de Chão';
$subtitulo = 'Promoções';
$descricao = '';
$acao = [];
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
    @media(min-width: 768px){
        #promocoes .promocao .promocao-thumbnail,
        #promocoes .promocao .promocao-body{
           width: 50%;
        }
    }
    
</style>

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_header_promocoes.jpg)">
    <article>
        <h1 class="page-titulo">Fogo de Chão</h1>
        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">Promoções</p>
    </article>
</header>

<main id="promocoes" class="main-page">
    <section id="promocoes" class="p-section bg-light">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <article class="fogo-artigo fogo-artigo-black">
                        <h2 class="fogo-MrsEaves">Especialmente para você, uma condição especial.</h2>
                        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
                        <h2 class="fogo-MrsEaves"><b>Esperamos sua visita.</b></h2>
                    </article>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="promocao">
                        <div class="promocao-thumbnail">
                            <a href="#">
                            <img width="500" height="500" src="https://fogodechao.com.br/wp-content/uploads/2020/09/145851.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://fogodechao.com.br/wp-content/uploads/2020/09/145851.jpg 500w, https://fogodechao.com.br/wp-content/uploads/2020/09/145851-150x150.jpg 150w, https://fogodechao.com.br/wp-content/uploads/2020/09/145851-300x300.jpg 300w" sizes="(max-width: 500px) 100vw, 500px">                            </a>
                        </div>
                        <div class="promocao-body">
                            <h3>Gift Card Fogo de Chão. Este presente está no ponto.</h3>
                            <div class="promocao-body--content">
                                <p>Confira as grandes experiências que você pode viver com gift card Fogo de Chão.</p>
                                <p><a href="https://fogodechao.com.br/gift-card/"><strong>Acesse aqui e saiba mais!</strong> &nbsp;</a></p>
                                <p><span style="font-size: 10pt;">Este cartão pode ser utilizado em qualquer unidade da rede no Brasil e na modalidade Fogo to-go. Válidos pelo período de 6 meses. Poderá ser utilizado uma única vez e após sua validade não poderá ser prorrogado. O valor desse cartão não poderá ser trocado por dinheiro e também não permite troco. Eventuais saldos remanescentes não poderão ser utilizados e/ou devolvidos. Gift Card com bônus promocional não poderá ser utilizado junto com outras promoções.</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="promocao">
                        <div class="promocao-thumbnail">
                            <a href="#">
                            <img width="500" height="500" src="https://fogodechao.com.br/wp-content/uploads/2018/12/POST_SOBREMESA-ANIVERSARIO.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="https://fogodechao.com.br/wp-content/uploads/2018/12/POST_SOBREMESA-ANIVERSARIO.jpg 500w, https://fogodechao.com.br/wp-content/uploads/2018/12/POST_SOBREMESA-ANIVERSARIO-150x150.jpg 150w, https://fogodechao.com.br/wp-content/uploads/2018/12/POST_SOBREMESA-ANIVERSARIO-300x300.jpg 300w" sizes="(max-width: 500px) 100vw, 500px">                            </a>
                        </div>
                        <div class="promocao-body">
                            <h3>É seu aniversário? Aqui você ganha a sobremesa!</h3>
                            <div class="promocao-body--content">
                                <p>Comemore com a gente e ganhe uma sobremesa à sua escolha em nosso cardápio.<br>
                                    * A condição é válida para a semana do aniversário e deve ser apresentado documento com foto.<br>
                                    Não é válido com outros descontos, festivais ou pacotes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="promocao">
                        <div class="promocao-thumbnail">
                            <a href="#">
                            <img width="500" height="500" src="https://fogodechao.com.br/wp-content/uploads/2024/05/fogo.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">                            </a>
                        </div>
                        <div class="promocao-body">
                            <h3>Tenha a melhor experiência no seu Happy Hour!</h3>
                            <div class="promocao-body--content">
                                <p>De segunda a sexta, a partir das 17h em todas unidades no Brasil

                                </p>
                                <p>
                                    - Aperitivos super saborosos e com preços especiais<br>
                                    - Rodízio de caipirinhas por R$59<br>
                                    - Double chopp Heineken*.<br>
                                    - Ambiente e atendimento espetacular, que só o Fogo de Chão proporciona
                                </p>
                                <p>
                                    *Consulte informação de valores. Beba com moderação. Se beber não dirija.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();