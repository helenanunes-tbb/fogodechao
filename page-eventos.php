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

/*Template Name: Eventos */

get_header();
$styles = ['eventos.css'];
$scripts = ['eventos.js'];
$idpage = 'eventos';
$background = '';
$titulo = '';
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

    img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;}
</style>
<style type="text/css" id="wp-custom-css">
			
.owl-carousel{
 margin-top: -3em !important;
}

.imagem-promo{
 position: relative;
 left:25%;

}@media only screen and (max-width: 750px) {
  .imagem-promo{
    position: relative !important;
    left:0% !important;
   }
   .owl-carousel{
    margin-top: -1em !important;
   }
	
	.botao-agende {
    position: relative !important;
    left: 22% !important;
   }
	.texto-principal {
    font-size: 32px !important;
   }
	.texto-secundario {
    font-size: 16px !important;
    margin: 8% !important;
		margin-top: 0em !important;
  }
	.lista {
    left: 2% !important;
    font-size: 12px !important;
   }
}

.texto-principal{
	text-align: center;
	font-size: 44px
}
.texto-secundario{
	text-align: center;
	font-size: 20px;
	margin: 25%;
}
.imagem-options{
	position: relative;
  width: 100%;
  height: auto;
}
.botao-agende{
	position: relative;
	left: 37%
}
.lista{
    position: relative;
    left: 8%;
    font-size: 23px;
}
.lista li{
	margin: 0.7em
}

.quadro{
}

.texto{
	background-color: #d8d1ba;
}

.condicoes{
	padding: 2em;
  font-size: 14px;
  text-align: justify;
}

#eventos #depoimentos .depoimento .depoimento-header .depoimento-header--title{
    width: calc(100% - 100px);
}
.owl-theme .owl-dots .owl-dot:focus{outline:none;}
		</style>
<header id="page-header" class="desktop" style="background-image: url(https://fogodechao.com.br/wp-content/uploads/2018/08/bg_header_group-dining-desktop.jpg)">
    <article>
        <h1 class="page-titulo">EVENTOS EM GRUPOS E SALAS PRIVATIVAS</h1>
        <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
        <h2 class="page-subtitulo"> </h2>
    </article>
</header>
<main id="eventos" class="main-page">
    <section id="orcamento" class="p-section-medium bg-light">
        <div class="container">
            <div class="textwidget">
                <p>Uma experiência gastronômica gaúcha elegantemente apresentada por nossa equipe hábil e experiente que fará do Fogo de Chão, o local perfeito para o seu grupo, evento ou reunião.</p>
            </div>
            <ul class="group-events">
                <li class="col-12 col-md-4">REUNIÕES EMPRESARIAIS</li>
                <li class="col-12 col-md-4">CURSOS</li>
                <li class="col-12 col-md-4">WEBINARS DE NEGÓCIOS</li>
                <li class="col-12 col-md-4">REUNIÕES DE CONSELHO</li>
                <li class="col-12 col-md-4">ENCONTROS DE VENDAS</li>
                <li class="col-12 col-md-4">ANIVERSÁRIOS E DATAS COMEMORATIVAS</li>
                <li class="col-12 col-md-4">CASAMENTOS &amp; EVENTOS</li>
                <li class="col-12 col-md-4">DESPEDIDAS DE SOLTEIRO (A)</li>
                <li class="col-12 col-md-4">FORMATURAS</li>
                <li class="col-12 col-md-4">CELEBRAÇÕES ESPECIAIS</li>
                <li class="col-12 col-md-4">EVENTOS CORPORATIVOS</li>
                <li class="col-12 col-md-4">REUNIÕES EMPRESARIAIS MENSAIS</li>
            </ul>
            <a id="widget-fdc_botao_widget-3-nome" class="btn-fdc btn-fdc-dark" href="/orcamento-evento-privado">Solicite seu orçamento</a>            
        </div>
    </section>
    <section id="area-grupos">
        <div class="row m-0">
            <div class="col-12 col-md-6 area-grupos--img p-0">
                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/Fogo02727-group-dining.png" alt="">
            </div>
            <div class="col-12 col-md-6 area-grupos--content">
                <article>
                    <h3>ÁREA RESERVADA PARA GRUPOS</h3>
                    <p class="area-grupos--descricao">Cada restaurante oferece espaços únicos para grupos, sejam eles: privado, semi-privado e público para todas as ocasiões. Para mais informações sobre grupos de 15 ou mais pessoas, preencha o formulário de reserva para grupos ou ligue diretamente para nosso gerente de vendas.</p>
                    <div class="desktop area-grupos--contato text-center">
                        <h4>Entre em contato: <a href="tel:"></a></h4>
                        <p><img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;">
                            WhatsApp
                            </a></strong><br>
                        </p>
                        <a href="/orcamento-evento-privado" id="btneventos-last" class="btn-fdc w-100">SOLICITE SEU ORÇAMENTO</a>
                    </div>
                    <div class="mobile area-grupos--contato text-center">
                        <div class="btn-group">
                            <!--<button class="btn"><a href="groupevents@fogo.com"><i class="fa fa-envelope-o"></i></a></button>
                                <button class="btn-fdc"><a href="tel:" class="phone-grp-centerXXX"><i class="fa fa-phone"></i></a></button>-->
                        </div>
                        <h4>Entre em contato: <a href="tel:"></a></h4>
                        <p><img src="https://fogodechao.com.br/wp-content/uploads/2022/09/icon-whats.png"><strong><a href="https://web.whatsapp.com/send?phone=5511970624267" target="_blank" style="color: inherit;">
                            WhatsApp
                            </a></strong><br>
                        </p>
                        <div class="btn-group">
                            <!-- <button class="btn private-dining" onClick="window.location='/group-dining-request'">Group Dining 
                                Request</button> -->
                            <button id="btneventos-last" class="btn-fdc private-dining" onclick="window.location='//orcamento-evento-privado'">SOLICITE SEU ORÇAMENTO</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section id="depoimentos" class="p-section">
        <div class="container">
            <div id="owl-testemunhos" class="owl-carousel owl-theme">
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="http://www.yelp.com/biz/fogo-de-ch%C3%A3o-s%C3%A3o-paulo-3?hrid=a26WROl3rxgHOLKKbmBRHw&amp;utm_campaign=www_review_share_popup&amp;utm_medium=copy_link&amp;utm_source=(direct)" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-yelp.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    THALITA G.                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            A maior parte dos produtos são feitos por eles mesmos, como sobremesa o petit gateau é de dar lamber os beiços!!!                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.yelp.com.br/biz/fogo-de-ch%C3%A3o-rio-de-janeiro?hrid=_iIPZ2JQ8vy4dAc4wL0Nzw&amp;utm_campaign=www_review_share_popup&amp;utm_medium=copy_link&amp;utm_source=(direct)" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-yelp.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    ANNA S                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            A churrascaria Fogo de Chão é uma das melhores churrascarias. Suas carnes de primeira e o buffet fresquinho são ótimas opções. Um ótimo lugar para ir com a família.                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.yelp.com/biz/churrascaria-fogo-de-ch%C3%A3o-s%C3%A3o-paulo?hrid=qMw1V8zMYaoaFqtYR3E0bQ&amp;utm_campaign=www_review_share_popup&amp;utm_medium=copy_link&amp;utm_source=(direct)" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-yelp.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    ADRIANO A.                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Atendimento espetacular, garçons muito educados, vestidos a carater, carne de primeiríssima qualidade, buffet sensacional, e um lugar muito bonito e agradável de se estar com família, amigos, ou em casal. Gosto bastante!                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.tripadvisor.com.br/ShowUserReviews-g303631-d1792484-r453871690-Fogo_De_Chao-Sao_Paulo_State_of_Sao_Paulo.html#REVIEWS" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-tripadvisor.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    CAMILA G.                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Meus amigos me levaram para conhecer esse restaurante pois sabem que eu adoro carne, e confesso que foi um dos melhores que já fui, amei as sobremesas tb, o atendimento super prestativo.                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.tripadvisor.com.br/ShowUserReviews-g303631-d4697466-r451927408-Fogo_de_Chao-Sao_Paulo_State_of_Sao_Paulo.html#REVIEWS" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-tripadvisor.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    PATTY P.                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Frequentamos há anos e nada nos decepciona!!! Atendimento maravilhoso, sempre nos surpreendendo da melhor maneira possível! Do bolinho de aipim aos melhores cortes, tudo aqui é perfeito! Super indicada!!!
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.tripadvisor.com.br/ShowUserReviews-g303506-d2235233-r453746399-Fogo_de_Chao-Rio_de_Janeiro_State_of_Rio_de_Janeiro.html#REVIEWS" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-tripadvisor.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    SABRINAPIN                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Excelente no atendimento e na variedade de opções. Preço faz jus ao serviço! Vista linda, ambiente agradável, garçons estão de prontidão a todo momento para nós servir.                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.google.com/maps/contrib/101412523026439673031/reviews?sa=X&amp;ved=0ahUKEwiDg4WG99jRAhWETJAKHXQQCAAQvvQBCEU" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-googleplus.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    CRISTINA SCOTT                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Um lugar incrivel, atendimento marravilhoso super recomendo, muito bom do inicio ao fim incrivel as sobremesas novas estão sensacionais e o atendimento maravilhoso.                    
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.google.com/maps/contrib/114527977297674313815/reviews?sa=X&amp;ved=0ahUKEwiywL7x99jRAhUGf5AKHTHtBsIQvvQBCEQ" target="blank">
                                <img src="https://fogodechao.com.brprovisorio.ws/wp-content/uploads/2019/01/reviews-googleplus.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    OHANA SILVA                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Melhor atendimento! ótimas opções de carne e no buffet.                     
                        </div>
                    </article>
                </section>
                <section class="depoimento">
                    <article>
                        <div class="depoimento-header">
                            <div class="depoimento-header--image">
                                <a href="https://www.google.com/maps/contrib/101127083523934049917/reviews?sa=X&amp;ved=0ahUKEwjE8d6W-NjRAhWMkZAKHclrBEIQvvQBCD4" target="blank">
                                <img src="https://fogodechao.com.br/wp-content/uploads/2019/01/reviews-googleplus.png" alt="">
                                </a>
                            </div>
                            <div class="depoimento-header--title">
                                <div class="title">
                                    DANIEL PAMPLONA                            
                                </div>
                                <div class="separator">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="depoimento-content">
                            Maravilhoso. Carne muito boa e atendimento excelente. Vale cada centavo pago.                    
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </section>
    <section id="beneficios" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article class="fdc-titulo">
                        <h2>BENEFÍCIOS PARA GRUPOS E ENCONTROS PRIVADOS</h2>
                    </article>
                </div>
                <div class="col-12">
                    <div id="owl-beneficios" class="owl-carousel owl-theme">
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">PROGRAMAS DE INCENTIVO</h3>
                                <p class="beneficio-descricao">Nossos clientes cativos são recompensados quando atingirem suas metas. </p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">OPÇÕES DINÂMICAS PARA EVENTOS</h3>
                                <p class="beneficio-descricao">Nossas salas privadas estão equipadas com internet banda larga com velocidade suficiente para streaming de alta definição, telas tripé padrão, projetores LCD, microfone e alto-falantes que irão proporcionar mais dinamismo as suas necessidades.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">ESPAÇO FLEXÍVEL</h3>
                                <p class="beneficio-descricao">Nossas salas privadas, semi-privadas e espaços públicos podem ser configurados para atender às suas necessidades específicas e também a reserva do restaurante, em sua totalidade, para o evento. Contate-nos para mais informações.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">MULTILÍNGUE</h3>
                                <p class="beneficio-descricao">Todos os nossos funcionários falam mais de um idioma. Seus convidados internacionais se sentirão mais confortáveis em nosso ambiente multi-cultural.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">PACOTES CUSTOMIZADOS</h3>
                                <p class="beneficio-descricao">Nossos pacotes oferecem opções facilitadas a você, incluindo variações de preços e condições. Escolha a opção que mais se adequa as suas necessidades, assim terá um orçamento definido enquanto seus convidados desfrutam de tudo o que temos para oferecer.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">CENTRAL DE DECISÕES</h3>
                                <p class="beneficio-descricao">O processo é tão simples como pegar o telefone ou enviar um e-mail. Nosso gerente de vendas está disponível para responder a perguntas e ajudar você a planejar sua próxima reunião, festa ou evento especial.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">REUNIÕES E ENCONTROS TURÍSTICOS</h3>
                                <p class="beneficio-descricao">Os planejadores de reuniões e parceiros de viagens podem tirar proveito de nossa experiência global e de nossos pacotes de incentivos. Ideal para descobrir mais sobre o seu próximo grupo internacional ou nacional.</p>
                            </div>
                        </div>
                        <div class="item beneficio-column">
                            <div class="beneficio">
                                <h3 class="beneficio-titulo">REFEIÇÕES PARA PESSOAS COM DIETAS ESPECIAIS</h3>
                                <p class="beneficio-descricao">Nosso variado menu vai surpreender veganos, vegetarianos, pescetarianos, alérgicos a glúten e lactose com opções para suas refeições – sem qualquer acréscimo nos valores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reconhecimento-section row mt-5">
                <div class="col-12">
                    <article class="fdc-titulo">
                        <h2>RECONHECIMENTOS E CERTIFICAÇÕES</h2>
                    </article>
                </div>
                <div class="col-6">
                    <div class="reconhecimento">
                        <div class="reconhecimento-titulo">
                            <span>D</span>ata <span>F</span>olha e <span>V</span>eja                
                        </div>
                        <div class="reconhecimento-descricao">
                            Prêmio o melhor rodízio de São Paulo                
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="reconhecimento">
                        <div class="reconhecimento-titulo">
                            <span>E</span>ncontro                
                        </div>
                        <div class="reconhecimento-descricao">
                            Prêmio o melhor rodízio de Belo Horizonte                
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="reconhecimento">
                        <div class="reconhecimento-titulo">
                            <span>E</span>ncontro                
                        </div>
                        <div class="reconhecimento-descricao">
                            Prêmio o melhor rodízio de Brasília                
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="reconhecimento">
                        <div class="reconhecimento-titulo">
                            <span>W</span>ine <span>S</span>pectator <span>EUA</span>                
                        </div>
                        <div class="reconhecimento-descricao">
                            Prêmio excelência em vinhos                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fogo-mundo" class="p-section">
        <div class="container">
            <div class="fdc-fogo-mundo">
                <article class="fogo-artigo">
                    <h2>FOGO DE CHÃO NO MUNDO</h2>
                    <div class="tile"><img src="https://fogodechao.com.br/wp-content/themes/fogodechao/assets/images/tile-horz.svg" alt=""></div>
                    <p>Com mais de 52 restaurantes em todo o mundo, 8 unidades no Brasil e novas aberturas de todos os anos, oferecemos pacotes de eventos nos principais mercados para atender todas as suas necessidades.</p>
                    <hr>
                </article>
                <div class="fogo-contato">
                    <p class="titulo">DESCUBRA OS BENEFÍCIOS ENTRANDO EM CONTATO COM:</p>
                    <div class="contact-info">
                        <a class="email" href="mailto:falecomfogo@fogodechao.com.br">falecomfogo@fogodechao.com.br</a>
                    </div>
                    <div class="contact-info-mobile">
                        <div class="btn-group inline-buttons">
                            <a class="btn-fdc" href="mailto:falecomfogo@fogodechao.com.br">
                            <i class="fa fa-envelope-o"></i>
                            </a>
                            <a class="btn-fdc" href="tel:2148863562">
                            <i class="fa fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();