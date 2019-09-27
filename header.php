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
	<link href="https://fonts.googleapis.com/css?family=Spectral:400,400i,500i,600i,700i&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	get_template_part( 'template-parts/header/header', 'nav' );
?>

<div id="page" class="site">
	<div id="content" class="site-content">
