<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

		<div class="prefooter">
			<div class="wrapper">
				<?php 
					$trans = explode('/', get_permalink() );
				?>
				<a href="<?php echo site_url(); ?>/<?php echo $trans[3]; ?>/category/news-and-press/"><button>
					<?php if ($trans[3] == 'en'){ ?>News from PayMe<?php } ?>
					<?php if ($trans[3] == 'es'){ ?>Novedades de ePayMe<?php } ?>
					<?php if ($trans[3] == 'es_pe'){ ?>Noticias sobre ePayMe <?php } ?>
					<?php if ($trans[3] == 'pt'){ ?>Notícias do ePayMe<?php } ?>
					</button></a>
				<span id="bar"></span>
				<a href="<?php echo site_url(); ?>/<?php echo $trans[3]; ?>/contact-us/"><button>
					<?php if ($trans[3] == 'en'){ ?>Connect with Us<?php } ?>
					<?php if ($trans[3] == 'es'){ ?>Conéctese<?php } ?>
					<?php if ($trans[3] == 'es_pe'){ ?>Conecte con Nosotros<?php } ?>
					<?php if ($trans[3] == 'pt'){ ?>Conecte-se ao ePayMe<?php } ?>
				</button>
				</a>
			</div>
		</div>


			<footer id="Main-footer">
				<div class="et_pb_row">
					<div class="Fleft">
						<p class="Ftext">
							<?php if ($trans[3] == 'en'){ ?>The P logo is a trademark of Aztec Exchange, Ltd. Any unauthorized use is prohibited<?php } ?>
							<?php if ($trans[3] == 'es'){ ?>El logotipo de la "P" es una marca comercial de Aztec Exchange, Ltd. Se prohíbe cualquier uso sin autorización.<?php } ?>
							<?php if ($trans[3] == 'es_pe'){ ?>El logotipo de la P es una marca comercial registrada de Aztec Exchange, Ltd. Queda prohibido cualquier uso no autorizado.<?php } ?>
							<?php if ($trans[3] == 'pt'){ ?>O logotipo P é uma marca comercial da Aztec Exchange, Ltd. É proibido qualquer uso não autorizado<?php } ?>
						</p>
					</div>
					<div class="Fright">
						<?php 
						if ( has_nav_menu( 'footer-menu' ) ) : ?>
							
							<div id="Fnav">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'footer-menu',
											'depth'          => '1',
											'menu_class'     => 'bottom-nav',
											'container'      => '',
											'fallback_cb'    => '',
										) );
									?>
							</div> <!-- #et-footer-nav -->
			
						<?php endif; ?>
						<div class="socialMedia">
							<a href="
								<?php if ($trans[3] == 'en' || $trans[3] == 'pt' ){ ?>https://twitter.com/PayMeCloud<?php } ?>
								<?php if ($trans[3] == 'es' || $trans[3] == 'es_pe'){ ?>https://twitter.com/PayMeCloud<?php } ?>
								" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="PayMe Twitter"></a>
							<a href="
								<?php if ($trans[3] == 'en' || $trans[3] == 'pt' ){ ?>https://www.facebook.com/paymecloud/<?php } ?>
								<?php if ($trans[3] == 'es' || $trans[3] == 'es_pe'){ ?>https://www.facebook.com/EPayMe-Espa%C3%B1ol-482850095243116/<?php } ?>
								" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="PayMe Facebook"></a>
							<a href="
								<?php if ($trans[3] == 'en' || $trans[3] == 'pt' ){ ?>https://www.linkedin.com/company/payme-powered-by-aztec-exchange?trk=company_logo<?php } ?>
								<?php if ($trans[3] == 'es' || $trans[3] == 'es_pe'){ ?>https://www.linkedin.com/company/payme-espa%C3%B1ol?trk=biz-brand-tree-co-name<?php } ?>
								" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="PayMe LinkedIn"></a>
							<a href="https://plus.google.com/118024584872492883613/posts" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/googleplus.png" alt="PayMe GooglePlus"></a>
						</div>

					</div>
				</div>
            </footer>


						
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script src="https://vimeo.com/162564886/vimeo.ga.min.js" type="text/javascript"></script>
</body>
</html>
