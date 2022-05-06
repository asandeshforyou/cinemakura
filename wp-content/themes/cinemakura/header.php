<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cinemakura
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cinemakura' ); ?></a>

	<nav class="navbar sticky-top">
      <div class="container">
        <a class="navbar-brand navTitle" href="/cinemakura">Cinemaकुरा</a>
        
        <a href="http://localhost/cinemakura/login/">
            <button type="button" class="login">
                Login
            </button>
        </a>

        
        <a href="/cinemakura/create-discussion">
            <button type="button" class="navButton">
                Start a discussion
            </button>
        </a>
      </div>
    </nav>   