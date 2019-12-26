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
	<?php
		//include('partials/sectionGroups.php');
		include('partials/sectionAbout.php');
		include('partials/sectionServices.php');
		include('partials/sectionInspiration.php');
		include('partials/sectionClients.php');
		include('partials/sectionInsta.php');
	?>
</article><!-- #post-<?php the_ID(); ?> -->
