<?php

/**
 * Template Name: About Me Page
 */

 //page thumbnail

 $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));


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
			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/11.jpeg" alt="Background" />
	</div>

<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--heading">
                        <h1>About Me</h1>
                    </div>
                    <div class="clearfix"></div>
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
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

<!-- Video #2
============================================= -->
<section id="video2" class="video-button video-button-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">

                  <?php
                        $photopod = pods('photo');
                        $photopod->find('name DESC');


                      ?>

                <?php  while ($photopod->fetch()) : ?>

                  <?php $name = $photopod->field('name');
                  $content =  $photopod->field('content'); ?>

                <div class="heading heading-2 mb-30 pt-50">
                    <h2 class="heading--title"><?php echo $name; ?> </h2>
                </div>
                <p><?php echo $content; ?></p>
                <?php  endwhile; ?>
            </div>
            <!-- .col-md-6 end -->
            <div class="pt-50 col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ">
                <div class="video--content">
                    <div class="bg-section">

                    <?php
                      $photopod = pods('photo');
                      $photopod->find('name DESC');

                      ?>

                    <?php  while ($photopod->fetch()) : ?>
                        <?php
                        // get thumbnail
                         $row = $photopod->row();
                         $post_id = $row['ID'];
                         $image_properties = get_post_featured_image($post_id, 'full');

                          ?>

                        <img src="<?php echo $image_properties['url']; ?>" alt="Background" />
                    <?php endwhile; ?>
                    </div>
                    <div class="video-overlay">

                    </div>

                    </div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #video2 end -->


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
                            <?php echo excerpt(20); ?>
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
<?php get_footer(); ?>
