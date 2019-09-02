<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ympar
 */

?>

	</div><!-- #content -->

	<section id="sectionContact" class='section sectionContact'>
		<h2>Contato</h2>
		<div class='sectionWrapper'>
			<p>Para maiores informa&ccedil;&otilde;es, preencha o formul&aacute;rio ou entre em contato pelo telefone:<br/ ><a href="tel:+55-21-99024-1620">+55 (21) 99024-1620</a>.</p>
			<div id='contactForm'>
				<?php echo do_shortcode('[contact-form-7 id="29" title="Formulário de contato"]'); ?>
			</div>
		</div>
	</section>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<a href="tel:+55-21-2499-0213" target="_blank">+55 (21) 2499-0213</a>
				<a href="tel:+55-21-99380-0355">+55 (21) 99380-0355</a>
				<a href="mailto:ympar@ymparexperiencias.com.br">ympar@ymparexperiencias.com.br</a>
			</p>
			<a href="#">
				<svg width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
					<path fill="#FFFFFF" d="M13.8,0H2.2C1,0,0,1,0,2.2v11.7C0,15,1,16,2.2,16h5.8l0-5.7H6.4c-0.2,0-0.3-0.2-0.4-0.3l0-1.8
						c0-0.2,0.2-0.4,0.4-0.4h1.5V6c0-2.1,1.3-3.2,3.1-3.2h1.5c0.2,0,0.4,0.2,0.4,0.4v1.6c0,0.2-0.2,0.4-0.4,0.4l-0.9,0
						c-1,0-1.2,0.5-1.2,1.2v1.5h2.2c0.2,0,0.4,0.2,0.3,0.4L12.7,10c0,0.2-0.2,0.3-0.3,0.3h-2l0,5.7h3.4c1.2,0,2.2-1,2.2-2.2V2.2
						C16,1,15,0,13.8,0z"/>
				</svg>
			</a>
			<a href="#">
				<svg width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
					<path fill="#FFFFFF" d="M11.6,0H4.4C2,0,0,2,0,4.4v7.2C0,14,2,16,4.4,16h7.2c2.4,0,4.4-2,4.4-4.4V4.4C16,2,14,0,11.6,0z M14.6,11.6
						c0,1.7-1.3,3-3,3H4.4c-1.7,0-3-1.3-3-3V4.4c0-1.7,1.3-3,3-3h7.2c1.7,0,3,1.3,3,3L14.6,11.6L14.6,11.6z"/>
					<path fill="#FFFFFF" d="M8,3.9C5.7,3.9,3.9,5.7,3.9,8c0,2.3,1.8,4.1,4.1,4.1s4.1-1.8,4.1-4.1C12.1,5.7,10.3,3.9,8,3.9z M8,10.7
						c-1.5,0-2.7-1.2-2.7-2.7c0-1.5,1.2-2.7,2.7-2.7s2.7,1.2,2.7,2.7C10.7,9.5,9.5,10.7,8,10.7z"/>
					<path fill="#FFFFFF" d="M12.3,2.7c-0.3,0-0.5,0.1-0.7,0.3c-0.2,0.2-0.3,0.5-0.3,0.7c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.7,0.3
						c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.5,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7C12.8,2.8,12.6,2.7,12.3,2.7z"/>
				</svg>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
