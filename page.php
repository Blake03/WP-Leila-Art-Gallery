<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leila-Art-Gallery
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!--start-welcome-section
=============================================================================-->

<section id="welcome" class="welcome">
    <div class="welcome__wrapper">

        <h1>
            <span class="welcome__heading">Hello I'm Leila Alexandra</span><br> 
            <span class="welcome__sub-heading">I'm super awesome and beautiful</span>
        </h1>

        <nav>
            <a class="welcome__ghost-button" href="#about">More About Leila</a>
            <a class="welcome__ghost-button" href="#gallery">Leila's Art Gallery</a>
        </nav>

        <a class="welcome__email" href="mailto:leila.nutrition@gmail.com">leila.nutrition@gmail.com</a>

        <span class="welcome__social-icons">
            <a target="_blank" href="https://www.linkedin.com/in/leila-davis-6694811a?trk=miniprofile-primary-view-button"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.instagram.com/leilalexandra/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.facebook.com/alexandra.couture?fref=ts"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        </span><!--socila-icons-->

    </div><!--wrapper-->
</section><!--welcome-->

<!--end-welcome-section
=============================================================================-->



<!--start-gallery-section
=============================================================================-->

<section id="gallery" class="gallery">
    <div class="gallery__wrapper">

<!--instagram feed-->
<?php echo wdi_feed(array('id'=>'1')); ?>

  </div><!--wrapper-->
</section><!--Gallery-->

<!--end-gallery-section
=============================================================================-->


<!--start-about-section
=============================================================================-->

<section id="about" class="about">

    <article class="about__text-box">
        <h2 class="about__heading">More About Leila</h2>

        <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        
    </article>

  <h4 class="about__copyright">&#169; 2016 BlakeSimsDesign.com</h4>
</section><!--about-->

<a href="#" class="back-to-top">Back to Top</a>

<!--end-about-section
=============================================================================-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
