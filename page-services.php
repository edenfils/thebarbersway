<?php
/**
 * Template Name: Services Page
 */

// package pods
$package_one = pods('package', 53);
$package_two = pods('package', 55);
$package_three = pods('package', 57);

// get package thumbnail

function get_pod_thumbnail($mypod, $size) {
	$row = $mypod->row();
	$post_id = $row['ID'];

	$image_id = get_post_thumbnail_id($post_id);
	$image =  wp_get_attachment_image_src($image_id, $size);
 	return $image_url = $image[0];
}

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
			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/14.jpeg" alt="Background" />
	</div>

<?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-1 text-center">
                    <div class="title--heading">
                        <h1>My Services</h1>
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

<!-- Services #1
============================================= -->
<section id="service1" class="services services-2 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text--center mb-80">
                    <h2 class="heading--title"><?php echo $package_one->field('name'); ?></h2>
                    <p class="lead color-heading">I build completely custom websites that are specifically designed to meet your barbershop business needs.</p>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->


        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6  product-item">
											<?php echo $package_one->field('content'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 product-item">
              <div class="product--img">
                  <img src="<?php echo get_pod_thumbnail($package_one,'full'); ?>" alt="Product" />
              </div>
              <!-- .product-img end -->
          </div>
        </div>
        <!-- .row end -->




    </div>
    <!-- .container end -->
</section>
<!-- #service1 end -->
<!-- Skills #2
============================================= -->
<section id="skills2" class="skills skills-theme bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/background/11.jpeg" alt="bg">
    </div>
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
              <div class="heading text--center mb-80">
                  <h2 class="heading--title text-white"><?php echo $package_two->field('name') ?></h2>
                  <!-- <p class="lead text-white">It's all about increasing the probability of your website being seen and clicked on. Effective SEO strategies involve a combination of On-Page Optimization and Off-Page Optimization techniques.</p> -->
                  <div class="divider--line"></div>
              </div>
          </div>
          <!-- .col-md-6 end -->
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 product-item">
            <div class="product--img">
                <img src="<?php echo get_pod_thumbnail($package_two,'full'); ?>" alt="Product" />
            </div>
            <!-- .product-img end -->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6  product-item">

            <?php echo $package_two->field('content'); ?>
        </div>

      </div>
      <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<!-- Services #3
============================================= -->
<section id="service3" class="services services-2 text-center bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading text--center mb-80">
                    <h2 class="heading--title"><?php echo $package_three->field('name'); ?></h2>
                    <p class="lead color-heading">It's all about increasing the probability of your website being seen and clicked on. Effective SEO strategies involve a combination of On-Page Optimization and Off-Page Optimization techniques.</p>
                    <div class="divider--line"></div>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6  product-item">

              <?php echo $package_three->field('content'); ?>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 product-item">
              <div class="product--img">
                  <img src="<?php echo get_pod_thumbnail($package_three,'full'); ?>" alt="Product" />
              </div>
              <!-- .product-img end -->
          </div>
        </div>
        <!-- .row end -->




    </div>
    <!-- .container end -->
</section>
<!-- #service3 end -->


<!-- Blog Grid
============================================= -->
<section id="blog" class="blog blog-grid pt-0 pb-100">
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

<?php get_footer(); ?>
