<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helderberg-wellness
 */

get_header();
?>
<section id="home-one" class="home-section text-white">
    <div id="bodyOne" class="container pt-5 hide">
        <div class="row p-5">
            <div class="col text-center p-5 hw-brown">
                <h2 class="display-4 mt-4">I am here to help you</h2>
                <p class="lead home-lead mx-5">Have you experienced trauma or are you having difficulty coping with your day to day life due to depression or anxiety? Have you been struggling to live your life to the fullest ?</p>
            </div>
        </div>
    </div>
</section>
    <div class="hr">
        <span class="outer-line"></span>
        <span class="fas fa-hands-helping" aria-hidden="true"></span>
        <span class="outer-line"></span>
    </div>
<section id="home-two" class="home-section">
    <div class="container scrollIn">
        <div class="row pt-6 pb-6">
            <div class="col-md-6 text-center p-5 hw-brown">
                <h2 class="display-4 mb-4">You do not have to struggle alone</h2>
                <p class="lead home-lead">I follow a holistic approach.<br/>I will walk with you to recover your well-being. I use Cognitive Behavioral Therapy by guiding  you to be able to live life to the fullest again.</p>
                <p class="lead home-lead">My approach is completely gender, culture and race sensitive.</p>
            </div>
            <div id="tree" class="col-md-6">

            </div>
        </div>
    </div>
</section>
<div class="hr">
    <span class="outer-line"></span>
    <span class="fas fa-hands-helping" aria-hidden="true"></span>
    <span class="outer-line"></span>
</div>
<section id="home-three" class="home-section bg-light">
    <div class="container scrollIn">
        <div class="row pt-4 pb-4">
            <div class="col-md-6 text-center">
                <img class="rozanne-img shadow-sm" src='<?php echo get_stylesheet_directory_uri() .'/img/rozanne_lindner.jpg' ?>' alt="Rozanne Lindner | Wellness Counselor | Helderberg" />
            </div>
            <div class="col- md-6 text-center p-5 mt-5 hw-brown">
                <h2 class="display-4 mb-5">Find out more about the services I offer:</h2>
                <a class="btn btn-lg btn-success shadow-sm mt-4" href="<?php echo get_home_url().'/services/' ?>">Our Services</a>
            </div>
        </div>
    </div>
</section>

<section id="home-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main id="primary" class="site-main">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
