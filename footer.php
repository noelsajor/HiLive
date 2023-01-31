<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage hilive
 * @since hilive 1.0
 */

?>
			<footer class="container mainFooter">
				<div class="logofooter">
				<a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/HiLive-Logo.svg" alt="HiLive"></a>
				</div>
    		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
