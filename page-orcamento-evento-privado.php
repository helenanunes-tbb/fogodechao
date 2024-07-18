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

/*Template Name: Orçamento Evento Privado */

get_header();
$styles = [
	// 'evento-privado.css',
	'pickadate.js/lib/themes/default.css',
	'pickadate.js/lib/themes/default.date.css',
	'pickadate.js/lib/themes/default.time.css'
];
$scripts = [
	'evento-privado.js',
	'libs/pickadate.js/lib/picker.js',
	'libs/pickadate.js/lib/picker.date.js',
	'libs/pickadate.js/lib/picker.time.js',
	'libs/pickadate.js/lib/legacy.js'
];
?>
<style type="text/css">
  .evento-privativo {
    padding: 30px 0;
  }

  .evento-privativo .formIntegration2 > div:not([class*='Dinamize']) {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
  }

  .evento-privativo .formIntegration2 > div > div {
    width: 100%;
  }

  @media (min-width: 768px) {
    .evento-privativo {
      padding: 60px 0;
    }

    .evento-privativo .formIntegration2 > div > div {
      width: calc(50% - 8px);
    }

    .evento-privativo .formIntegration2 > div > div.block--cmp29,
    .evento-privativo .formIntegration2 > div > div.block-header {
      width: 100%;
    }

    .evento-privativo .formIntegration2 > div > div:last-child {
      width: 100%;
    }
  }
</style>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const detailsEventsHeaderHTML =
      '<div class="block-header"><h3 class="fdc-evento-privado">Detalhes do Evento</h3><p>*obrigatórios</p></div>';
    const blocks = document.querySelectorAll(
      '.evento-privativo .formIntegration2 .block'
    );

    blocks.forEach((block) => {
      let name = '';

      if (block.querySelector('input')) {
        if (block.querySelector('input[type="submit"]')) {
          name = 'submit';
          block.querySelector('input[type="submit"]').classList.add('btn-fdc');
        } else {
          name =
            block.querySelector('input').getAttribute('name') ||
            block.querySelector('input').getAttribute('hd-name');

          block.querySelectorAll('input').forEach((input) => {
            input.classList.add('form-control');
          });
        }
      } else if (block.querySelector('textarea')) {
        name = block.querySelector('textarea').getAttribute('name');
        block.querySelector('textarea').classList.add('form-control');
        block.querySelector('textarea').setAttribute('rows', '10');
        block.querySelector('textarea').setAttribute('cols', '40');
      } else if (block.querySelector('select')) {
        name = block.querySelector('select').getAttribute('name');
        block.querySelector('select').classList.add('form-control');
      }

      if (name === 'cmp26') {
        block.insertAdjacentHTML('beforebegin', detailsEventsHeaderHTML);
      }

      block.classList.add(`block--${name}`);
    });
  });
</script>
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

<header id="page-header" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_restaurantes.jpg)">
    <article>
        <h1 class="page-titulo">EVENTO PRIVADO</h1>
    </article>
</header>
<main id="fdc-pageteste" class="main-page teste-luca">

    <?php echo do_shortcode( '[contact-form-7 id="52cbb62" title="Evento Privado"]' ); ?>
    <!-- <div class="wpcf7 js" id="wpcf7-f2326-o1" lang="pt-BR" dir="ltr">
        <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
        </div>
        <form action="/#wpcf7-f2326-o1" method="post" class="wpcf7-form init" aria-label="Formulários de contato" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="2326">
                <input type="hidden" name="_wpcf7_version" value="5.9.3">
                <input type="hidden" name="_wpcf7_locale" value="pt_BR">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2326-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <p class="cleanfix"></p>
            <section id="evento-privado" class="evento-privativo">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="fdc-evento-privado">Seus Dados
                            </h3>
                            <p>*obrigatórios
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="nome"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="nome" aria-required="true" aria-invalid="false" placeholder="Nome*" value="" type="text" name="nome"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="sobrenome"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="sobrenome" aria-required="true" aria-invalid="false" placeholder="Sobrenome*" value="" type="text" name="sobrenome"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false" placeholder="E-mail*" value="" type="email" name="email"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="telefone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="telefone" aria-required="true" aria-invalid="false" placeholder="Telefone*" value="" type="text" name="telefone"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="telefone-empresa"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="telefone-empresa" aria-required="true" aria-invalid="false" placeholder="Telefone da Empresa*" value="" type="text" name="telefone-empresa"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="nome-empresa"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="nome-empresa" aria-required="true" aria-invalid="false" placeholder="Nome da Empresa*" value="" type="text" name="nome-empresa"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="hr-container">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="fdc-evento-privado">Detalhes do Evento
                            </h3>
                            <p>*obrigatórios
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="natureza"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="natureza" aria-required="true" aria-invalid="false" placeholder="Natureza do Evento*" value="" type="text" name="natureza"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group fogo-form select-triangle">
                                <p>
                                    <span class="wpcf7-form-control-wrap" data-name="local-preferido">
                                        <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control fdc-eclub--local" aria-required="true" aria-invalid="false" name="local-preferido">
                                            <option value="">—Escolha uma opção—</option>
                                            <option value="São Paulo, Jardins">São Paulo, Jardins</option>
                                            <option value="São Paulo, Moema">São Paulo, Moema</option>
                                            <option value="São Paulo, Morumbi">São Paulo, Morumbi</option>
                                            <option value="São Paulo, Center Norte">São Paulo, Center Norte</option>
                                            <option value="São Paulo, Vila Olímpia">São Paulo, Vila Olímpia</option>
                                            <option value="Rio de Janeiro, Barra da Tijuca">Rio de Janeiro, Barra da Tijuca</option>
                                            <option value="Rio de Janeiro, Botafogo">Rio de Janeiro, Botafogo</option>
                                            <option value="Brasília, Asa Sul">Brasília, Asa Sul</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group fogo-form select-triangle">
                                <p><span class="wpcf7-form-control-wrap" data-name="dtevento"><input class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date form-control" aria-required="true" aria-invalid="false" placeholder="Informe a Data do Evento" value="" type="date" name="dtevento"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="nrpessoas"><input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" min="0" max="1000" aria-required="true" aria-invalid="false" placeholder="Número de Participantes" value="" type="number" name="nrpessoas"></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group fogo-form select-triangle">
                                <p>
                                    <span class="wpcf7-form-control-wrap" data-name="hrevento">
                                        <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control dtpicker--hour" aria-required="true" aria-invalid="false" name="hrevento">
                                            <option value="Selecione o horário">Selecione o horário</option>
                                            <option value="12:00 AM">12:00 AM</option>
                                            <option value="12:30 AM">12:30 AM</option>
                                            <option value="1:00 AM">1:00 AM</option>
                                            <option value="1:30 AM">1:30 AM</option>
                                            <option value="2:00 AM">2:00 AM</option>
                                            <option value="2:30 AM">2:30 AM</option>
                                            <option value="3:00 AM">3:00 AM</option>
                                            <option value="3:30 AM">3:30 AM</option>
                                            <option value="4:00 AM">4:00 AM</option>
                                            <option value="4:30 AM">4:30 AM</option>
                                            <option value="5:00 AM">5:00 AM</option>
                                            <option value="5:30 AM">5:30 AM</option>
                                            <option value="6:00 AM">6:00 AM</option>
                                            <option value="6:30 AM">6:30 AM</option>
                                            <option value="7:00 AM">7:00 AM</option>
                                            <option value="7:30 AM">7:30 AM</option>
                                            <option value="8:00 AM">8:00 AM</option>
                                            <option value="8:30 AM">8:30 AM</option>
                                            <option value="9:00 AM">9:00 AM</option>
                                            <option value="9:30 AM">9:30 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="10:30 AM">10:30 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="11:30 AM">11:30 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="12:30 PM">12:30 PM</option>
                                            <option value="1:00 PM">1:00 PM</option>
                                            <option value="1:30 PM">1:30 PM</option>
                                            <option value="2:00 PM">2:00 PM</option>
                                            <option value="2:30 PM">2:30 PM</option>
                                            <option value="3:00 PM">3:00 PM</option>
                                            <option value="3:30 PM">3:30 PM</option>
                                            <option value="4:00 PM">4:00 PM</option>
                                            <option value="4:30 PM">4:30 PM</option>
                                            <option value="5:00 PM">5:00 PM</option>
                                            <option value="5:30 PM">5:30 PM</option>
                                            <option value="6:00 PM">6:00 PM</option>
                                            <option value="6:30 PM">6:30 PM</option>
                                            <option value="7:00 PM">7:00 PM</option>
                                            <option value="7:30 PM">7:30 PM</option>
                                            <option value="8:00 PM">8:00 PM</option>
                                            <option value="8:30 PM">8:30 PM</option>
                                            <option value="9:00 PM">9:00 PM</option>
                                            <option value="9:30 PM">9:30 PM</option>
                                            <option value="10:00 PM">10:00 PM</option>
                                            <option value="10:30 PM">10:30 PM</option>
                                            <option value="11:00 PM">11:00 PM</option>
                                            <option value="11:30 PM">11:30 PM</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group fogo-form">
                                <p><span class="wpcf7-form-control-wrap" data-name="informacao"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea form-control" id="informacao" aria-invalid="false" placeholder="Tem alguma informação adicional que gostaria de adicionar?" name="informacao"></textarea></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p><input class="wpcf7-form-control wpcf7-submit has-spinner btn-fdc" type="submit" value="Enviar"><span class="wpcf7-spinner"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <p class="cleanfix"></p>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
        </form>
    </div> -->
</main>

<?php
get_footer();