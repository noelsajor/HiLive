<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hilive
 * @since hilive 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header class="mainHeader row row--stackSM">
			<div class="logo col">
				<a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/HiLive-Logo.svg" alt="<?php bloginfo( 'name' ); ?>" /></a>
			</div>
			<nav class="col alignRight mainNav row--stackSM">
				<?php
					if( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( [
						'theme_location'      =>    'primary',
						'menu_class'          =>    'mainMenu',
						'container'           =>    false,
						'fallback_cb'         =>    false,
						'depth'               =>    1,
						] );
					};        
				?>
				<a href="mailto:info@hi.live" class="btn">BOOK A DEMO</a>
			</nav>
		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
