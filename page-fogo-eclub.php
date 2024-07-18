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

/*Template Name: Fogo eClub */

get_header();

$styles = ['fogo-eclub.css', 'pickadate-themes/default.css', 'pickadate-themes/default.date.css'];
$scripts = ['pickadate.js/lib/picker.js', 'pickadate.js/lib/picker.date.js', 'jquery-mask/dist/jquery.mask.min.js', 'eclub.js'];
$idpage = 'fogo-eclub';

$background = '';
$titulo = 'Fogo eCLUB';
$subtitulo = '';
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

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/12/page_header_reservation.jpg)">
    <article>
        <h1 class="page-titulo">eCLUB INSCRIÇÃO</h1>
        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
        <p class="page-descricao">Fogo eClub, fique por dentro das últimas notícias, eventos e promoções.</p>
    </article>
    </header>
<main id="fogo-eclub" class="main-page">
    <style type="text/css">
    html,
    body,
    div,
    iframe {
        margin: 0;
        padding: 0;
        
    }

    iframe {
        display: block;
        width: 100%;
        border: none;
        overflow: hidden;
    }
</style>
 
<section id="fdc-eclub-form">
    <div class="container teste">
        <!-- <iframe title="fogo de chão" src="https://fogodechao.activehosted.com/f/1" width="" height="900px"></iframe> -->
			<?php echo apply_filters('the_content', '[dinamize-form id="2560"]'); ?>
		<!-- <form version="2.0" class="formIntegration formIntegration2 " accept-charset="UTF-8" method="post" onsubmit="return dinForms.ValidateForm(this)" action="https://receiver.emkt.dinamize.com/in/332859/1/08a1a/1" target="DinamizeIframeFormIntegration" data-name="Rm9ybSAtIGVDbHViIGNvbSBkYXRhIGRlIG5hc2NpbWVudG8=" data-campaign="">
		    <input type="hidden" name="update_mode" value="AS">
		    <input type="hidden" name="form-code" value="6">
		    <input type="hidden" name="isMsg" value="true"><div class="DinamizeDivCaptchaMessage">Captcha obrigatório</div><input type="hidden" class="emailInvalid" value="E-mail inválido" disabled=""><input type="hidden" class="required" value="Campo obrigatório" disabled=""><input type="hidden" class="dateInvalid" value="Data inválida" disabled=""><input type="hidden" class="phoneInvalid" value="Telefone inválido" disabled=""><div class="DinamizeDivMessageAlert"></div>
		        <div class="DinamizeDivMessageSuccess">Seu e-mail foi cadastrado com sucesso!<br>Bem-vindo ao Fogo eCLUB</div>
		        <div class="DinamizeDivMessageError"></div>
		        <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE8YnIgLz5CZW0tdmluZG8gYW8gRm9nbyBlQ0xVQg==">
		        <input type="hidden" name="text-error" value="">
		        <input type="hidden" name="text-alert" value=""><input type="hidden" name="cmp4" value="cliente_eclub"><input type="hidden" name="phase-change" value="off"><div class=""><div class="block"><div class="horizontal divlabel label-text"><label>Nome</label></div><div class="horizontal divinput"><input type="text" name="cmp2" placeholder="" format="" class="type_VC   input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Sobrenome</label></div><div class="horizontal divinput"><input type="text" name="cmp8" placeholder="" format="" class="type_VC   input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Endereço</label></div><div class="horizontal divinput"><input type="text" name="cmp9" placeholder="" format="" class="type_VC   input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Cidade</label></div><div class="horizontal divinput"><input type="text" name="cmp10" placeholder="" format="" class="type_VC   input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Estado</label></div><div class="horizontal divinput"><input type="text" name="cmp11" placeholder="" format="" class="type_VC   input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>CEP</label></div><div class="horizontal divinput"><input type="text" name="cmp12" din-mask-type="INT" placeholder="" format="" class="type_INT  din-input-mask input-field" maxlength="10">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Email</label></div><div class="horizontal divinput"><input type="text" name="cmp1" placeholder="" format="" class="type_EMAIL field-required  input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Telefone com DDD</label></div><div class="horizontal divinput"><div class="div_PHN ">
		                                <div class="div_PHN_DDI">
		                                    <input type="text" name="cmp13_DDI" hd-name="cmp13" maxlength="5" placeholder="+1" value="" class="type_PHN_DDI  input-field ">
		                                </div><div class="div_PHN_NUM">
		                                    <input type="text" name="cmp13_NUM" hd-name="cmp13" maxlength="20" placeholder="(00) 0000-0000" class="type_PHN_NUM  input-field ">
		                                </div>
		                                <input type="hidden" name="cmp13">
		                            </div></div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Local Preferido</label></div><div class="horizontal divinput"><div class="containerMultiple containerMultiple_cmp14 input-field " style="max-height: 100%">
		                                <select multiple="multiple" hd-name="cmp14" class="invi-select  type_LVM"></select><div> <label><input type="checkbox" class="chk_cmp14" value="Brasília"> Brasília</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="Rio de Janeiro, Barra"> Rio de Janeiro, Barra</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="Rio de Janeiro, Botafogo"> Rio de Janeiro, Botafogo</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="São Paulo, Center Norte"> São Paulo, Center Norte</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="São Paulo, Jardins"> São Paulo, Jardins</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="São Paulo, Moema"> São Paulo, Moema</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="São Paulo, Shopping Morumbi"> São Paulo, Shopping Morumbi</label> </div><div> <label><input type="checkbox" class="chk_cmp14" value="São Paulo, Vila Olímpia"> São Paulo, Vila Olímpia</label> </div><input type="hidden" name="cmp14"><input type="hidden" name="cmp14_action" value="replacement">
		                            </div></div>
		            </div><div class="block"><div class="horizontal divlabel label-text"><label>Data de Nascimento</label></div><div class="horizontal divinput"><input type="text" hd-name="cmp32" din-mask-type="DT" placeholder="DD/MM/AAAA" format="DD/MM/AAAA" class="type_DT  din-input-mask input-field" maxlength="10">
		                            <input type="hidden" name="cmp32"></div>
		            </div><div class="block">
		                <div class="g-recaptcha" data-sitekey="6LeKBkMoAAAAAKohT6gkCSOB78JskOmCPP65MUCS"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-zdnk6xkbqt47" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeKBkMoAAAAAKohT6gkCSOB78JskOmCPP65MUCS&amp;co=aHR0cHM6Ly9mb2dvZGVjaGFvLmNvbS5icjo0NDM.&amp;hl=en-GB&amp;v=rz4DvU-cY2JYCwHSTck0_qm-&amp;size=normal&amp;cb=r8v5m3wggfc8"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
		                
		            </div><div class="block">
		            <div class="horizontal class1 submit submit-button-td">
		                <input type="submit" value="Cadastre-se" original-value="Cadastre-se" class="dinSubmit submit-btn">
		                <div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
		            </div>
		        </div>
		    </div>
		</form><script src="https://www.google.com/recaptcha/api.js"></script> -->
    </div>
</section>
</main>

<?php
get_footer();