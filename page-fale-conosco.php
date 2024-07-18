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

/*Template Name: Fale Conosco */

get_header();

$styles = ['contato.css'];
$scripts = ['jquery-mask/dist/jquery.mask.min.js', 'contato.js'];
$idpage = 'contato';
$background = '';
$titulo = 'Fale Conosco';
$subtitulo = 'Fogo de Chão';
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
<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_header-contactus.png)">
    <article>
    <h1 class="page-titulo">FALE CONOSCO</h1>
    <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
    <h2 class="page-subtitulo"> </h2>
    <p class="page-descricao"><span>F</span>ogo de <span>C</span>hão</p>
    </article>
    </header>
<section id="contato" class="p-section">
    <div class="container contato-content">
        <div class="row">
            <div class="col-12 p-0">
                <h3 class="contato-titulo">Complete o Formulário ou Visite <a href="/fogopedia">Dúvidas Frequentes</a></h3>
            </div>
        </div>
    </div>
    <div class="container contato-content">
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
		.formIntegration select {
			height: 40px;
    padding: 0 5px;
		}
        </style>
        <!--<iframe id="fogof" title="fogo de chão" src="https://fogodechao.activehosted.com/f/3" width="" height="900px"></iframe>-->
		<!-- <?php echo apply_filters('the_content', '[dinamize-form id="2575"]'); ?> -->
		<!-- <?php echo apply_filters('the_content', '[dinamize-form id="2531"]'); ?> -->
		<?php echo apply_filters('the_content', '[dinamize-form id="2633"]'); ?>

        

        
        <!-- <form version="2.0" class="formIntegration formIntegration2 " accept-charset="UTF-8" method="post" onsubmit="return dinForms.ValidateForm(this)" action="https://receiver.emkt.dinamize.com/in/332859/1/c2845/0" target="DinamizeIframeFormIntegration">
		    <input type="hidden" name="update_mode" value="AS">
		    <input type="hidden" name="form-code" value="3">
		    <input type="hidden" name="isMsg" value="true"><div class="DinamizeDivCaptchaMessage">Captcha obrigatório</div><input type="hidden" class="emailInvalid" value="E-mail inválido" disabled=""><input type="hidden" class="required" value="Campo obrigatório" disabled=""><input type="hidden" class="dateInvalid" value="Data inválida" disabled=""><input type="hidden" class="phoneInvalid" value="Telefone inválido" disabled=""><div class="DinamizeDivMessageAlert"></div>
		        <div class="DinamizeDivMessageSuccess">Seu e-mail foi cadastrado com sucesso!</div>
		        <div class="DinamizeDivMessageError"></div>
		        <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE=">
		        <input type="hidden" name="text-error" value="">
		        <input type="hidden" name="text-alert" value=""><input type="hidden" name="phase-change" value="off"><div class=""><div class="block"><div class="vertical divlabel label-text"><label>Nome completo</label></div><div class="vertical divinput"><input type="text" name="cmp17" placeholder="" format="" class="type_VC field-required  input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>E-mail</label></div><div class="vertical divinput"><input type="text" name="cmp1" placeholder="" format="" class="type_EMAIL field-required  input-field" maxlength="80">
		                            </div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>Telefone com DDD</label></div><div class="vertical divinput"><div class="div_PHN ">
		                                <div class="div_PHN_DDI">
		                                    <input type="text" name="cmp13_DDI" hd-name="cmp13" maxlength="5" placeholder="+1" value="" class="type_PHN_DDI field-required input-field ">
		                                </div><div class="div_PHN_NUM">
		                                    <input type="text" name="cmp13_NUM" hd-name="cmp13" maxlength="20" placeholder="(00) 0000-0000" class="type_PHN_NUM field-required input-field ">
		                                </div>
		                                <input type="hidden" name="cmp13">
		                            </div></div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>Assunto</label></div><div class="vertical divinput"><select name="cmp18" class="type_LVU field-required input-field ">
		                                <option value="">Selecione</option><option value="Comentários">Comentários</option><option value="Elogios">Elogios</option><option value="Expansão">Expansão</option><option value="Gift Card">Gift Card</option><option value="Grupos e Eventos">Grupos e Eventos</option><option value="Imprensa">Imprensa</option><option value="Mídias/Publicidade">Mídias/Publicidade</option><option value="Orçamentos">Orçamentos</option><option value="Parcerias">Parcerias</option><option value="Reclamações">Reclamações</option><option value="Sugestões">Sugestões</option></select></div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>Como nos conheceu?</label></div><div class="vertical divinput"><textarea name="cmp19" placeholder="" format="" class="type_TXT field-required  input-field" maxlength="3000"></textarea></div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>Por favor digite seu comentário</label></div><div class="vertical divinput"><textarea name="cmp20" placeholder="" format="" class="type_TXT field-required  input-field" maxlength="3000"></textarea></div>
		            </div><div class="block"><div class="vertical divlabel label-text"><label>Local preferido</label></div><div class="vertical divinput"><select name="cmp21" class="type_LVU field-required input-field ">
		                                <option value="">Selecione</option><option value="BAND">BAND</option><option value="Brasília, Asa Sul">Brasília, Asa Sul</option><option value="CN">CN</option><option value="JARDINS">JARDINS</option><option value="MOEMA">MOEMA</option><option value="MORUMBI">MORUMBI</option><option value="Rio de Janeiro, Botafogo">Rio de Janeiro, Botafogo</option><option value="São Paulo, Center Norte">São Paulo, Center Norte</option><option value="São Paulo, Jardins">São Paulo, Jardins</option><option value="São Paulo, Moema">São Paulo, Moema</option><option value="São Paulo, Morumbi Shopping">São Paulo, Morumbi Shopping</option><option value="São Paulo, Vila Olímpia">São Paulo, Vila Olímpia</option></select></div>
		            </div><div class="block">
		            <div class="vertical class1 submit submit-button-td">
		                <input type="submit" value="Enviar" original-value="Enviar" class="dinSubmit submit-btn">
		                <div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>
		            </div>
		        </div>
		    </div>
		</form> -->

</div>
</section>


<?php
get_footer();