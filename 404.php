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
        <div class="infoBlock--wide rowSpacer">
            <div class="">
                <h1>Page Not Found</h1>
                <h3>Error 404</h3>

                <div class="bodyTxt--big">
                    <p>'This page does't exist or was removed! We suggest you to go back home.</p>
                </div>
                <a href="<?php echo get_home_url(); ?>" class="btn">BACK TO HOME</a>
            </div>
            <div class="container">
                <div class="wrapper numberFour">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="wrapper numberCero">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="wrapper numberFourDelayed">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <!-- <div class="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404-img.svg" alt="">
            </div> -->
        </div>
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