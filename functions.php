<?php
/**
 * Hi Live functions and definitions
 *
 *
 */
/* Theme Setup Functions */
function hl_setup_theme() {
    register_nav_menu( 'primary',  __( 'Primary Menu', 'hilive' ) );
}
// Hooks and Filters
add_action( 'after_setup_theme', 'hl_setup_theme' );

// Shortcodes