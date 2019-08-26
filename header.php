<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ympar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ramon Uch&ocirc;a Gon&ccedil;alves de Pinho">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	if ( is_front_page() ) :
		get_template_part( 'template-parts/header/header', 'hero' );
	endif;

	get_template_part( 'template-parts/header/header', 'nav' );
?>

<div id="page" class="site">
	<div id="content" class="site-content">
