<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ympar
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $class='groupsPostListItem' ); ?>>
	<?php ympar_post_thumbnail(); ?>

	<header class="entry-header">
		<div>
			<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
					the_excerpt();
			?>
		</div>
		<?php
					echo '<a class="groupInfo" href="' . esc_url( get_permalink() ) . '" rel="bookmark">Mais informações</a>';
		?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
