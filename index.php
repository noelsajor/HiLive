<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
</head>
<body>
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
    </header>
    <main class="content">
        <?php //Start the loop ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php //the_title(); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php edit_post_link(); ?>
        <?php endwhile; ?>
        <?php
        if ( get_next_posts_link() ) {
        next_posts_link();
        }
        ?>
        <?php
        if ( get_previous_posts_link() ) {
        previous_posts_link();
        }
        ?>
        <?php else: ?>
            <p>No posts found. :(</p>
        <?php endif; ?>
        <?php //End of loop ?>
    </main>
    <footer class="container mainFooter">
          <div class="logofooter">
          <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/HiLive-Logo.svg" alt="HiLive"></a>
          </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>