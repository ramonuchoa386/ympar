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
 * @package ympar
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main postsListWrapper">

		<?php
		$blogQuery = new WP_Query( array( 'category__not_in' => array( 2, 4, 5 ) ) );
		if ( $blogQuery->have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif;?>
				<section class="posts-main">
					<?php
						/* Start the Loop */
						while ( $blogQuery->have_posts() ) :
							$blogQuery->the_post();
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'list' );

						endwhile;
					?>
			</section>
		<?php
			the_posts_navigation();

			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
