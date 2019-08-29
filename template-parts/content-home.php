<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ympar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class='section sectionAbout'>
		<h2>Quem somos</h2>
		<div class='sectionWrapper'>
			<div class='sectionColumn'>
				<p>Fazer uma viagem inesquec&iacute;vel, casar em um destino paradis&iacute;aco, fidelizar clientes com uma experi&ecirc;ncia exclusiva, surpreender seus funcion&aacute;rios com uma festa de final de ano dos &uacute;ltimos tempos, reinventar experi&ecirc;ncias.<br />Com o conceito de <i>concierge</i> a Ympar tem a audaciosa filosofia de contrariar os pensamentos convencionais e lhe entregar algo &uacute;nico. Organiza suas necessidades tornando momentos em experi&ecirc;ncias exclusivas e personalizadas.</p>
				<p><em><b>Ympar</b> &eacute; nosso nome e aquilo que entregamos.</em></p>
				<a href="#">Saiba mais</a>
			</div>
			<div class='sectionColumn'>
				<img src="" alt="">
			</div>
		</div>
		<img src="" alt="">
	</section>

	<section class='section sectionServices'>
		<h2>O que fazemos</h2>
		<div class='sectionWrapper'>
			<div class="servicesImg">
				<div class="serviceImg imgVertical">
					<p>Grupos com acompanhamento em portugu&ecirc;s</p>
					<img src="" alt="">
				</div>
				<div class="serviceImg imgHorizontal">
					<p>Social</p>
					<img src="" alt="">
				</div>
				<div class="serviceImg imgHorizontal">
					<p>Corporativo</p>
					<img src="" alt="">
				</div>
				<div class="serviceImg imgHorizontal">
					<p>Wedding destination</p>
					<img src="" alt="">
				</div>
				<div class="serviceImg imgHorizontal">
					<p>Viagens</p>
					<img src="" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class='section sectionInspiration'>
		<h2>Inspire-se</h2>
		<div class='sectionWrapper'>
			<p>Conhe&ccedil;a um pouquinho os sonhos que j&aacute; realizamos e experi&ecirc;ncias que proporcionamos.</p>
			<img src="" alt="">
		</div>
	</section>

	<section class='section sectionClients'>
		<h2>Marcas atendidas</h2>
		<div class='sectionWrapper'>
			<ul id="clientsSlider">
				<li class='slide'>
					<img src="" alt="">
				</li>
				<li class='slide'>
					<img src="" alt="">
				</li>
				<li class='slide'>
					<img src="" alt="">
				</li>
				<li class='slide'>
					<img src="" alt="">
				</li>
				<li class='slide'>
					<img src="" alt="">
				</li>
			</ul>
		</div>
	</section>

	<section class='section sectionGroups'>
		<h2>Grupos</h2>
		<div class='sectionWrapper'>
			<p>Fa&ccedil;a parte dos nossos grupos de viagens.</p>
			<a href="#">Confira</a>
		</div>
	</section>

	<section class='section sectionInsta'>
		<h2>Instagram</h2>
		<div class='sectionWrapper'>
			<div id='instaFeed'></div>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
