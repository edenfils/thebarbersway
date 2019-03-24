<?php

/**
 * Template Name: Blog
 */

 ?>


<?php
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
?>

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
  <div class="bg-section">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/10.jpg" alt="Background" />
  </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1 class="page-title">
													<?php
													/* translators: %s: search query. */
													printf( esc_html__( 'Search Results for: %s', 'barbershop' ), '<span>' . get_search_query() . '</span>' );
													?>
                        </h1>
                    </div>
                    <div class="clearfix"></div>
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

<!-- Blog standard
============================================= -->
<section id="blog" class="blog blog-standard">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="row">
                    <!-- Blog Entry #1 -->
                  <?php

                   if(have_posts() ) :?>
                    <?php while (have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="<?php the_permalink(); ?>">
                    							<img src="<?php the_post_thumbnail_url('full');?>" alt="entry image"/>
                    						</a>
                                <div class="entry--overlay">
                                    <a href="<?php the_permalink(); ?>"><i class="fa fa-chain"></i></a>
                                </div>
                            </div>
                            <div class="entry--content">
                                <div class="entry--meta">
                                    <span><?php the_date('M j, Y'); ?></span>
                                    <span><?php the_category(' | '); ?></span>
                                </div>
                                <div class="entry--title">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                </div>
                                <div class="entry--bio">
                                  <?php echo excerpt(40); ?>
                                </div>
                                <div class="entry--more">
                                    <a href="<?php the_permalink(); ?>">read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                    <!-- .col-md-4 end -->
                  <?php endwhile; ?>
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 clearfix mt-50 text--center">
                        <?php echo paginate_links(); ?>
                      </div>
                  </div>
                <?php else : ?>
                  <p class="h2">Sorry, No Results :(</p>
                <?php endif; ?>
                </div>

            </div>
            <!-- .col-md-8 end -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="sidebar">
                    <?php  get_sidebar(); ?>
                    <div class="widget widget-recent-posts">
                        <div class="widget--title">
                            <h5>recent posts</h5>
                        </div>
                        <div class="widget--content">
                          <?php
                            $args = array( 'numberposts' => '3');
                            $recent_posts  = wp_get_recent_posts($args);
                          ?>

                          <?php foreach($recent_posts as $recent):?>
                            <div class="entry">
                                <a href="<?php echo get_permalink($recent["ID"]); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($recent["ID"]); ?>" alt="title"/>
                                </a>
                                <div class="entry-desc">
                                    <div class="entry-title">
                                        <a href="<?php echo get_permalink($recent["ID"]); ?>"><?php  echo $recent["post_title"] ?></a>
                                    </div>
                                    <div class="entry-meta">
                                        <span><?php echo get_the_date('M n, Y', $recent['ID']); ?></span>
                                        <?php $categories = get_the_category($recent['ID']);
                                         ?>
                                         <?php foreach($categories as $cat): ?>
                                        <span>
                                            <a href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
                                         </span>
                                       <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                            <!-- .recent-entry end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->

<?php get_footer(); ?>
