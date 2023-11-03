	<?php do_action('before_footer'); ?>

	<footer role="contentinfo">

		<div class="footer__menus">
			<div class="max__width">
				
				<?php
				while (have_rows('footer_menus', 'options')) : the_row();

					$footer_menu = get_sub_field('footer_menu');
				?>
					<article class="footer__menu">
						<?php if ($footer_menu) : ?>
							<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
							<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
						<?php endif; ?>
					</article>

				<?php endwhile; ?>

				<!-- <article class="footer__social">
					<ul>
						<li><a href="https://www.facebook.com/pollardsopticianswakefield/" target="_blank"><i class="fa-brands fa-instagram"></i>Facebook</a></li>
						<li><a href="https://uk.linkedin.com/in/pollards-opticians-66716ba7" target="_blank"><i class="fa-brands fa-instagram"></i>Linkedin</a></li>
						<li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fpollardsopti" target="_blank"><i class="fa-brands fa-instagram"></i>Twitter</a></li>
					</ul>
				</article> -->

				<article class="footer__details">
					<ul>
						<li>
							<i class="fa-light fa-location-dot"></i>
							21 Cross Square,<br> Wakefield<br> WF1 1PQ
						</li>
						<li><i class="fa-light fa-phone"></i> 01924 373 697</li>
					</ul>
				</article>
			</div>
		</div>
	</footer>

	<div class="spotlight-search">
		<div class="spotlight-search--content">
			<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

			<h2>Search Pollards Opticians</h2>
			<form action="<?php echo esc_url(home_url()); ?>">
				<input type="text" name="s" placeholder="ie. News" />
				<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
			</form>
		</div>
	</div>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	</body>

	</html>