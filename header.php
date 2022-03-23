<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SecondPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style type="text/css">
        #theHeader {
            margin-top:-40px;
            min-height:400px;
        }
        .site-header {
            background: url('<?php echo get_stylesheet_directory_uri() .'/img/slice-bg.png' ?>');
        }
        #tree {
            background: url('<?php echo get_stylesheet_directory_uri() .'/img/bonsai.jpg' ?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
        }

    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'secondpress' ); ?></a>

    <header id="masthead" class="site-header shadow-lg">
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container ms-auto">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-navbar-collapse-1" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'secondpress' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

			    <?php
			    wp_nav_menu( array(
				    'theme_location'    => 'primary',
				    'depth'             => 2,
				    'container'         => 'div',
				    'container_class'   => 'collapse navbar-collapse mt-2',
				    'container_id'      => 'bs-navbar-collapse-1',
				    'menu_class'        => 'navbar-nav ms-auto',
				    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker(),
			    ) );
			    ?>
            </div>
        </nav><!-- #site-navigation -->
        <div id="theHeader" class="container">
            <div class="row">
                <div class="col-3">
                    <div class="site-branding">
						<?php the_custom_logo() ?>
                    </div><!-- .site-branding -->
                </div>
                <div class="col-9 pt-5 hw-brown">
                    <h1 id="heading">Rozanne Lindner</h1>
                    <h3 id="headingTwo" class="hide">Specialist Wellness Counselor</h3>
                    <p id="headingThree" class="lead hide">BA(Hons)Psychology (UNISA)<br />ASCHP Reg no: 589846904</p>
                    <div id="headingFour" class="hide mb-3">
                        <h4 class="mt-2 mb-2">How can I help you?</h4>
                        <a class="btn btn-outline-dark btn-sm" href="<?php echo get_home_url().'/contact-us/' ?>">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
