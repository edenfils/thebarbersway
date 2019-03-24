<?php

/**
 * Template Name: Brand Questionnaire Page
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
			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/13.jpg" alt="Background" />
	</div>
<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Client Questionnaire</h1>
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
                    <h2 class="heading--title">Brand In Brief</h2>
                    <div class="divider--line"></div>
                    <p class="lead mt-20 color-heading">The following questions are designed to determine the essence of your brand creation. All identities are based off information gathered in this form and my follow-up brand consultation to better ensure I produce a website that suits your needs. Be very specific and give as much information as possible, the future of your brand is at stake!</p>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="contact-form">
                    <!-- <form class="mb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name: *" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="contact-email" id="email" placeholder="Email: *" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="business-name" id="name" placeholder="Bussiness Name: *" required>
                            </div>
                            <div class="col-md-12">
                              <label for="brand-meaning">1. What is the meaning behind the name? *</label>
                                <textarea class="form-control" name="brand-meaning" id="message" rows="4" placeholder="" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="business-purpose"> 2. What is your business purpose? *</label>
                                <textarea class="form-control" name="business-purpose" id="message" rows="4" placeholder="Try to sum up the goals + mission of your business in one sentence. Make sure to include  what your business has to offer, as well as how  your clients benefit from your service" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="audience">3. Who is your ideal client / target audience? *</label>
                                <textarea class="form-control" name="audience" id="message" rows="4" placeholder="Please Try to get specific Are they a certain age or demographic?" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="brand-unique">4. What makes your business unique from your competitors? *</label>
                                <textarea class="form-control" name="brand-unique" id="message" rows="4" placeholder="Price, service, bonuses, experience, etc." required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="brand-admire">5. What companies or brands have a look and feel you admire and why? *</label>
                                <textarea class="form-control" name="brand-admire" id="message" rows="4" placeholder="" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="brand-goal">6. What is your main goal for a website visitor *</label>
                                <textarea class="form-control" name="brand-goal" id="message" rows="4" placeholder="" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="tagline">7. Do you have a tagline? If so, would you like it stated alongside your logo? *</label>
                                <textarea class="form-control" name="tagline" id="message" rows="4" placeholder="" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="color">8. Do you have any color preferences, or existing brand colors that need to remain? *</label>
                                <textarea class="form-control" name="color" id="message" rows="4" placeholder="if you don't know exactly the name of the color feel free to send me an image as an example, also any color you want to steer away from." required></textarea>
                            </div>



                            <div class="col-md-12">
                              <label for="typography">9. Do you have a preference on typography? *</label>
                                <textarea class="form-control" name="typography" id="message" rows="4" placeholder="(ex: script, bold, light, hand drawn, custom lettering, etc.)" required></textarea>
                            </div>

                            <div class="col-md-12">
                              <label for="details">10. Any additional details or creative considerations? </label>
                                <textarea class="form-control" name="details" id="message" rows="4" placeholder="I want to ensure I can build the best website for your business throughout this collaborative process!"></textarea>
                            </div>


                            <div class="col-md-12">
                                <input type="submit" value="Send Now" name="submit" class="btn btn--secondary btn--rounded">
                            </div>
                        </div>
                    </form> -->
                    <?php echo do_shortcode( '[contact-form-7 id="105" title="Questionnaire"]' ); ?>
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
