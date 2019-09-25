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
	<style>
		section#hero{width:100%;height:100vh;background-image:linear-gradient(to bottom, rgba(34,97,148,0.8), rgba(34,97,148,0.8)),url(img/heroBg.jpg);background-repeat:no-repeat;background-size:cover;background-position:top center;display:flex;flex-direction:column;justify-content:center;align-items:center;padding-top:10vh}@media screen and (min-width: 1000px){section#hero{display:block;text-align:center;padding-top:40vh}}section#hero p,section#hero a{color:#fff}section#hero p{margin-bottom:30px}section#hero h1{color:#f1f9d8;margin-bottom:120px;position:relative;font-weight:lighter;font-size:xx-large;text-transform:uppercase;text-align:center}section#hero h1:after{content:"";width:60px;height:2px;background-color:#fff;display:block;margin:20px auto 0}section#hero a{background-color:#a53f74}section#hero a:first-of-type{margin-bottom:30px}@media screen and (min-width: 1000px){section#hero a{margin:0 30px}}
		nav.main-navigation{padding:10px 0}@media screen and (min-width: 1000px){nav.main-navigation{padding-left:100px;padding-right:100px;position:relative}}nav.main-navigation img.logo,nav.main-navigation button.menu-toggle{display:block}nav.main-navigation img.logo{width:95px;margin:0 auto;transition:all 300ms ease}nav.main-navigation button.menu-toggle{border:none;background-color:transparent;margin:30px auto 0}@media screen and (min-width: 1000px){nav.main-navigation button.menu-toggle{display:none}}nav.main-navigation button.menu-toggle span.menuBtnBar{display:block;width:16px;height:3px;border-radius:3px;background-color:#000}nav.main-navigation button.menu-toggle span.menuBtnBar:not(:first-of-type){margin-top:3px}@media screen and (min-width: 1000px){nav.main-navigation div.menu-menu-container{position:absolute;top:50%;left:10%;width:80%}}nav.main-navigation div.menu-menu-container ul.menu.nav-menu{display:none;list-style:none;text-align:center;padding:20px 0}@media screen and (min-width: 1000px){nav.main-navigation div.menu-menu-container ul.menu.nav-menu{padding:0}}nav.main-navigation div.menu-menu-container ul.menu.nav-menu li:not(:first-of-type){margin-top:30px}@media screen and (min-width: 1000px){nav.main-navigation div.menu-menu-container ul.menu.nav-menu li:not(:first-of-type){margin-top:0px}}@media screen and (min-width: 1000px){nav.main-navigation div.menu-menu-container ul.menu.nav-menu li:nth-of-type(3){margin-right:300px}}nav.main-navigation div.menu-menu-container ul.menu.nav-menu li a{text-decoration:none;text-transform:uppercase;color:#000;font-size:.8rem}@media screen and (min-width: 1000px){nav.main-navigation div.menu-menu-container ul.menu.nav-menu{display:flex;justify-content:space-between;align-items:center}}nav.toggled div.menu-menu-container ul.menu.nav-menu{display:block}nav.sticky{position:fixed;top:0;width:100%;z-index:2;background-color:#fff}nav.sticky+div#page{padding-top:150px}@media screen and (min-width: 1000px){nav.sticky+div#page{padding-top:105px}}nav.sticky img.logo{width:80px;transition:all 300ms ease}
	</style>

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
