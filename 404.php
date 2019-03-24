<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package barbershop
 */

get_header();
?>

<!--404
=============================================-->
<section class="page-404 text-center bg-overlay bg-overlay-dark fullscreen pb-0 mtop-100">
    <div class="bg-section">
        <img src="http://demo.zytheme.com/hairy/assets/images/background/9.jpg" alt="Background" />
    </div>
    <div class="pos-vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <h3 class="text-white">404</h3>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="clearfix"></div>
                    <p class="mb-40 text-white">The page you were looking for could not be found you seem to be lost don’t worry we will get you back on the track.</p>
                    <a class="btn btn--primary btn--rounded" href="/">Go Home</a>
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .cotainer end -->
    </div>
</section>
<!-- .page-404 end -->

</div>
<!-- #wrapper end -->

<?php get_footer(); ?>
