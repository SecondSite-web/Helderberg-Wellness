<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SecondPress
 */

?>
	<footer id="colophon" class="site-footer bg-dark hw-green">
        <a href="#" class="btn btn-primary btn-sm back-to-top move-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
            <i class="fa fa-chevron-up"></i>
        </a>
        <div class="container-fluid">
            <div class="row pt-5 pb-5 text-center">
                <div class="col pb-5">
                    <h4 class="display-6 mb-2">How can I help you?</h4>
                    <a class="btn btn-lg btn-success shadow-sm mt-3 text-dark" href="<?php echo get_home_url().'/contact-us/' ?>">Contact Us</a>
                    <div class="hr">
                        <span class="outer-line"></span>
                        <span class="fas fa-hands-helping" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-light pt-4 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <div class="col-md-4"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col text-center">
                    <div class="hr">
                        <span class="outer-line"></span>
                        <span class="fas fa-hands-helping" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://secondsite.xyz/', 'secondpress' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'secondpress' ), 'SecondSite' );
                            ?>
                        </a>
                        <span class="sep"> | </span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( '%1$s Theme', 'secondpress' ), '<a href="http://secondsite.xyz/">SecondPress</a>' );
                        ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
