<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header sectionAnimation">
        <nav id="new-navigation">
            <div class="navbar main-navigation">
                <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
                <button class="burger-icons"></button>
            </div>
            
            <div id="burger-navigation">
                <div class="burger-elements">
                    <img class="logo-burger" src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                    <ul class="burger-links">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p>STUDIO KOUKAKI</p>
                </div>
            </div>
        </nav>
		<!--<nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <ul>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); */?></a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>

		</nav>
        -->
        <!-- #site-navigation -->
	</header><!-- #masthead -->
