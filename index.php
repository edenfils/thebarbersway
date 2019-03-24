<?php get_header(); ?>

<!-- get post thumbnail -->

<?php

                 if(!function_exists('get_post_featured_image')) {
                   function get_post_featured_image($post_id, $size) {
                     $return_array = [];

                     $image_id = get_post_thumbnail_id($post_id);
                     $image =  wp_get_attachment_image_src($image_id, $size);
                     $image_url = $image[0];
                     $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                     $image_post = get_post($image_id);
                     $image_caption = $image_post->post_excerpt;
                     $imaged_description = $image_post->post_content;
                     $return_array['id'] = $image_id;
                     $return_array['url'] = $image_url;
                     $return_array['alt'] = $image_alt;
                     $return_array['caption'] = $image_caption;
                     $return_array['description'] = $image_description;

                     return $return_array;
                   }
                 }

                 $image_properties = get_post_featured_image($post_id, 'full');

                 // echo $image_properties['url'];


                ?>

<!-- get post thumbnail end -->


<!-- Slider #1
============================================= -->
<section id="slider" class="carousel slider slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">

    <!-- Slide #1 -->
    <div class="slide--item bg-overlay bg-overlay-dark">
        <div class="bg-section">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/sliders/slide-bg/4.jpeg" alt="background">
        </div>
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                        <div class="slide--headline">I Help Barbershops <br> Get More Clients</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                        <div class="slide--bio">by offering modern barber website design services that help you attract new customers online.</div>
                        <div class="slide-action">
                            <a class="btn btn--primary btn--rounded" href="/services">Read More </a>
                        </div>
                    </div>

                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
    </div>
    <!-- .slide-item end -->

    <!-- Slide #2 -->
    <div class="slide--item bg-overlay bg-overlay-dark">
        <div class="bg-section">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/sliders/slide-bg/1.jpg" alt="background">
        </div>
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row pagination">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                        <div class="slide--headline">Need a professional website <br> for your barbershop?</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                        <div class="slide--bio">I strive to provide high-value by creating affordable barber shop websites that don’t compromise design or functionality. </div>
                        <div class="slide-action">
                            <a class="btn btn--secondary btn--white btn--rounded mr-10" href="/services">Read More </a>
                            <a class="btn btn--white btn--bordered btn--rounded" href="/contact">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
    </div>
    <!-- .slide-item end -->

    <!-- Slide #3 -->
    <div class="slide--item bg-overlay bg-overlay-dark">
        <div class="bg-section">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/sliders/slide-bg/3.jpg" alt="background">
        </div>
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text--center">
                        <div class="slide--headline">Ready to improve your <br> online visibility?</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 text--center">
                        <div class="slide--bio">Looking to take your established business to the next level? Let me create a custom website that brings your vision to life.</div>
                        <div class="slide-action">
                            <a class="btn btn--secondary btn--white btn--rounded mr-10" href="/services">Read More </a>
                            <a class="btn btn--white btn--bordered btn--rounded" href="/contact">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
    </div>
    <!-- .slide-item end -->

</section>
<!-- #slider end -->
<!-- Services #1
============================================= -->
<section id="service1" class="services services-2 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text--center mb-80">
                    <h2 class="heading--title">I Help Barber Shops With:</h2>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
          <?php
              $servicepod = pods('service');
              $servicepod->find('name DESC');
            ?>

            <?php  while ($servicepod->fetch()) : ?>

              <?php

                 $name =  $servicepod->field('name');
                 $content = $servicepod->field('content');

                // get thumbnail
                 $row = $servicepod->row();
                 $post_id = $row['ID'];
                 $image_properties = get_post_featured_image($post_id, 'full');

                 // echo $image_properties['url'];


                ?>

            <!-- Service #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="service-panel">
                    <div class="service--img">
                        <img src="<?php echo $image_properties['url']; ?>" alt="img">
                    </div>
                    <h3><?php echo $name; ?></h3>
                    <?php echo $content; ?>
                </div>
                <!-- .container end -->
            </div>
            <!-- .col-md-4 end -->
            <?php endwhile; ?>
            <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-20 text--center">
                <a href="/services" class="btn btn--secondary btn--bordered btn--rounded">View More</a>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #service1 end -->

<!-- working-time #1
============================================= -->
<section id="working-time" class="working-time text-center bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/background/2.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading text--center pt-40 pb-40">
                    <h2 class="heading--title text-white service-title">Your clients trust you while I take care of your online presence!</h2>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
</section>
<!-- #service1 end -->

<!-- pricing #2
============================================= -->
<section id="pricing" class="pricing pricing-2 bg-white pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text--center mb-70">
                    <h2 class="heading--title">Some Of My Work</h2>
                    <p class="color-heading lead">Your website defines you. It is an extension of your brand and shows your customers what sets you apart from your local competitors. Here is a sampling of some of my recent work.</p>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">

          <!-- getting pod -->
          <?php
            $websitepod = pods('website');

            $websitepod->find('name ASC');

          ?>
            <!-- loop starts -->
             <?php while ($websitepod->fetch()): ?>

              <?php

               $websitename =  $websitepod->field('name');
               $website_url = $websitepod->field('website_url');
               $column_offset =  $websitepod->field('column_offset');

              // thumbanil info
              $row = $websitepod->row();

               $post_id = $row['ID'];

               $image_properties = get_post_featured_image($post_id, 'full');

               // echo $image_properties['url'];
                ?>

          <div class="col-xs-12 col-sm-6 col-md-4 <?php echo $column_offset ?> product-item">


              <div class="product--img">
                  <img src="<?php echo $image_properties['url'] ?>" alt="Product" />
                  <div class="product--hover">
                      <div class="product--action">
                          <a href="<?php echo $website_url; ?>">Visit Website</a>
                      </div>
                  </div>
                  <!-- .product-overlay end -->
              </div>
              <!-- .product-img end -->
              <div class="product--content">
                  <div class="product--title">
                      <h3><a href="<?php echo $website_url ?>"><?php echo $websitename; ?></a></h3>
                  </div>
                  <!-- .product-title end -->
              </div>
              <!-- .product-bio end -->
          </div>

          <?php endwhile;  ?>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #pricing1 end -->


<!-- Testimonial #2
============================================= -->
<section id="testimonial2" class="testimonial testimonial-1 bg-overlay bg-overlay-dark bg-parallax text-center">
    <div class="bg-section">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/background/8.jpeg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="text--center heading mb-70">
                    <h2 class="heading--title color-white">Clients Say</h2>
                    <p class="color-heading lead color-gray">The Barber's Way is dedicated to creating original, professional websites. Here are a few testimonials from some of my clients.</p>
                    <div class="divider--line divider--center"></div>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-carousel" class="carousel carousel-dots carousel-white" data-slide="2" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                    <!-- Testimonial #1 -->

                    <?php
                      $testimonial = pods('testimonial');
                      $testimonial->find('name ASC');

                      ?>

                    <?php while ($testimonial->fetch()): ?>

                      <?php
                          $name =  $testimonial->field('name');
                          $content = $testimonial->field('content');

                          $row = $testimonial->row();
                          $post_id = $row['ID'];
                          $image_properties = get_post_featured_image($post_id, 'full');


                        ?>


                    <div class="testimonial-panel">
                        <div class="testimonial--meta">
                            <div class="testimonial--meta-img">
                                <img src="<?php echo $image_properties['url']; ?>" alt="Testimonial Author">
                            </div>
                        </div>
                        <!-- .testimonial-meta end -->
                        <div class="testimonial--body">
                            <p><?php echo $content; ?></p>
                        </div>
                        <!-- .testimonial-body end -->
                        <div class="testimonial--meta-content">
                            <h4><?php echo $name; ?></h4>
                        </div>
                    </div>
                    <!-- .testimonial-panel end -->
                    <?php endwhile;  ?>









                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #testimonial2 end -->

<!-- Blog Grid
============================================= -->
<section id="blog" class="blog blog-grid pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text--center mb-70">
                    <h2 class="heading--title">Blog Posts</h2>
                    <p class="heading--desc">Don't forget to check out my latest posts!</p>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
          <?php query_posts('posts_per_page = 3'); ?>
          <?php if(have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>
            <!-- Blog Entry #1 -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="<?php the_permalink(); ?>">
            							<img src="<?php the_post_thumbnail_url(); ?>" alt="entry image"/>
            						</a>
                        <div class="entry--overlay">
                            <a href="<?php the_permalink(); ?>"><i class="fa fa-chain"></i></a>
                        </div>
                    </div>
                    <div class="entry--content">
                        <div class="entry--meta">
                            <span><?php the_date('M j, Y'); ?></span>
                            <?php $categories = get_the_category($post->ID);
                             ?>
                             <?php foreach($categories as $cat): ?>
                            <span><a href="<?php echo  get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></span>
                          <?php endforeach; ?>
                        </div>
                        <div class="entry--title">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="entry--bio">
                            <?php echo excerpt(15); ?>
                        </div>



                        <div class="entry--more">
                            <a href="<?php the_permalink(); ?>">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- .blog-entry end -->
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-20 text--center">
                <a href="/blog" class="btn btn--secondary btn--bordered btn--rounded">View More</a>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->

<!-- Contact #1
============================================= -->
<section id="contact1" class="contact contact-1 bg-white" style="background-image: url("<?php echo get_bloginfo('template_directory'); ?>/assets/images/background/2.jpg");">
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

<?php get_footer(); ?>
