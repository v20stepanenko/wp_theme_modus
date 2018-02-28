
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modusVersus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="style.css">
	<?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->

<header>
    <div class="container header-wrapper">
        <div class="row">
            <h1 class="col-lg-2 logo">MODUS<span>versus</span></h1>
            <?php wp_nav_menu( array('container'       => 'nav',    
                             'container_class' => 'col-lg-8 col-lg-offset-2 col-xs-12') ); ?>
        </div>
    </div>
</header>

	<div id="content" class="site-content">

