

<?php

/**
 * Template Name: Contact Page
 */


 //page thumbnail

 $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

 ?>

 <?php get_header(); ?>

<!-- Page Title #1
============================================= -->

<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
  <?php if(has_post_thumbnail()) { ?>
    <div class="bg-section">
        <img src="<?php echo $thumbnail_url;?>" alt="Background" />
    </div>
<?php } else { ?>

	<div class="bg-section">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/16.jpeg" alt="Background" />
	</div>

<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>contact me</h1>
                        </div>
                        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
                    </div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-1 mb-80 text--center">
                    <h2 class="heading--title">Get In Touch</h2>
                    <div class="divider--line"></div>
                    <p class="heading--desc">Let's Do Business!</p>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="contact-form">
                      <?php echo do_shortcode( '[contact-form-7 id="103" title="Main Contact Form"]' ); ?>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #contact1 end -->


<?php  get_footer(); ?>
