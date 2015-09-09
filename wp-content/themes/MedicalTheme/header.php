		
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <body>

		<div id="primaryContainer" class="primaryContainer clearfix">
			<header>
				<img id="image" src="<?php bloginfo('stylesheet_directory');?>/img/pastedsvg%201.svg" class="image" />
				<p id="text">
				<span id="textspan">Mors&oslash; Mink</span><br />Harrev&aelig;nget 2<br />Nyk&oslash;bing Mors<br /><br />Tlf&#x3a;  24 82 29 98<br />Fax&#x3a; 97 71 00 01<br />
				</p>
				<nav id="Nav" class="bar-blue clearfix">
					<ul>
						<li class="current-menu-item"><a class="input" href="#">Nyheder</a></li>
						<li><a class="input" href="#">Kontakt</a></li>
						<li><a class="input" href="#">Produkter</a></li>
						<li><a class="input" href="#">Minksystem</a></li>
						<li><a class="input" href="#">Stregkodekort</a></li>
					</ul>
					<div class="getWinMink">
						<p class="softwareVersion">Nyeste WinMink&#x3a; 12.7</p>
						<a class="btn-white" href="#">Hent</a>
					</div>
				</nav>