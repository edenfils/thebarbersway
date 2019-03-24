<?php

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

 ?>
<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
    <div class="bg-section">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/10.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="title text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1><?php the_title(); ?></h1>
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

<!-- Blog Single
============================================= -->
<section id="blog" class="blog blog-single pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8">
							<?php if (have_posts()) :while(have_posts()): the_post(); ?>

                <!-- Blog Entry -->
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
													<img src="<?php the_post_thumbnail_url('full') ?>" alt="entry image"/>
												</a>
                    </div>
                    <div class="entry--meta">
                        <span>By: <a href="#"><?php the_author_meta('user_nicename'); ?></a></span>
                        <span><?php the_date('M n, Y'); ?></span>
                        <span><a href="#"><?php the_category(','); ?></a></span>
                    </div>
                    <div class="entry--title">
                        <h3><a href="#"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="entry--content">
                        <?php the_content(); ?>
                    </div>
                    <div class="entry--share">
                        <span>share: </span>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    <!-- .entry-share end -->
                </div>
                <!-- .blog-entry end -->

                <div class="entry-prev-next clearfix">
                    <div class="entry-prev">
                        <div class="entry-prev-content">
													<?php $prev_post = get_previous_post();	?>
													<?php if(!empty($prev_post)):?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($prev_post->ID, array(70,70))); ?>" alt="title" />
                            <div class="entry-desc">
                                <p><i class="lnr lnr-arrow-left"></i> previous</p>
                                <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo esc_attr( $prev_post->post_title ); ?></a>
                            </div>
														<?php endif; ?>
                        </div>
                    </div>
                    <div class="entry-next">
                        <div class="entry-next-content">
													<?php $next_post = get_next_post();	?>
													<?php if(!empty($next_post)):?>
                            <img src="<?php echo esc_url(get_the_post_thumbnail_url($next_post->ID, 'thumbnail')); ?>" alt="title" />
                            <div class="entry-desc">
                                <p>next <i class="lnr lnr-arrow-right"></i></p>
                                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr( $next_post->post_title ); ?></a>
                            </div>
													<?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- .entry-prev-next end -->
                <hr class="mb-100">
						<?php endwhile; ?>
						<?php else: ?>

						<?php endif; ?>
            </div>
            <!-- .col-md-9 end -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="sidebar">
                    <?php get_sidebar('Sidebar'); ?>
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

            <div class="col-xs-12 col-md-12">
                <div class="entry-widget entry-related clearfix">
                    <div class="entry-widget-title">
                        <h4>related posts</h4>
                    </div>
                    <div class="entry-widget-content">
                        <div class="row">
                            <!-- Related Post #1 -->
                            <?php $related = ci_get_related_posts(get_the_ID(), 3);?>
                            <?php if($related->have_posts()): while($related->have_posts()): $related->the_post(); ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 entry">
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
                                            <span><?php the_date('M n, Y'); ?></span>
                                            <span><?php the_category(' | '); ?></span>
                                        </div>
                                        <div class="entry--title">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        </div>
                                        <div class="entry--bio">
                                            <?php echo excerpt(30) ?>
                                        </div>
                                        <div class="entry--more">
                                            <a href="<?php the_permalink(); ?>">read more <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .blog-entry end -->
                            </div>
                          <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                        </div>
                        <!-- .row end -->
                    </div>
                </div>
                <!-- .entry-related end -->
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->

<?php get_footer(); ?>
