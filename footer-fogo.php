
<footer id="footer_fogo" class="w-100">
	<div class="footer_info_fogo">
		<div class="container">
			<article>
				<p class="desktop">
					<span class="desktop">Faça parte do Fogo eClub</span>
					<a href="/fogo-eclub" class="btn-fdc btn-fdc-outline">
						Inscreva-se
						<i class="fa fa-caret-right"></i>
					</a>
				</p>
				<p class="mobile">
					<span class="desktop">Faça parte do Fogo eClub</span>
					<a href="/fogo-eclub" class="btn-fdc btn-fdc-outline">
						Inscreva-se no <span class="lowercase">e</span>Club
						<i class="fa fa-caret-right"></i>
					</a>
				</p>
				<p>
					<span class="desktop">Dúvidas Frequentes</span>
					<a href="/fogopedia" class="btn-fdc btn-fdc-outline">
						Acesse
						<i class="fa fa-caret-right"></i>
					</a>
				</p>
			</article>
		</div>
	</div>
	<div class="footer_menu_fogo">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<div class="navbar-collapse justify-content-center" id="top-nav-collapse">
				<?php wp_nav_menu( [
                    'menu' => 'Menu Rodape',
                    'menu_class' => 'navbar-nav',
                    'container' => '',
                    'theme_location' => 'menu-rodape',
                    'link_class' => 'nav-link'
                    ] ); ?>
            	</div>
			</div>
		</nav>
	</div>
	<div class="footer_copyright_fogo">
		<div class="container">
			<div class="row">
				<div class="col desktop">
					<div class="logo-copyright">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-copyright.svg" alt="">
					</div>
				</div>
				<div class="col fdc-copyright">
					<p>© 2024 Fogo de Chão, Inc. All Rights Reserved.</p>
				</div>
				<div class="col desktop">
					<ul class="social-fogo">
						<li>
							<a href="https://www.facebook.com/fogodechaobr/" target="_blank">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/fogodechaobr" target="_blank">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="http://instagram.com.br/fogodechaobr" target="_blank">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/FogodeChao1979" target="_blank">
								<span class="fa fa-youtube"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>