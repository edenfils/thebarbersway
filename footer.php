<!-- Footer #5
============================================= -->
<footer id="footer" class="footer">
    <!-- Widget Section
	============================================= -->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-about">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo/logo-light3.png" alt="logo">
                        <p>Are you ready to improve your online visibility? I Will help you get more clients providing you an affordable barbershop website that don't compromise design or functionality.</p>

                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-recent">
                    <div class="footer--widget-title">
                        <h5>Latest Posts</h5>
                    </div>
                    <div class="footer--widget-content">
                        <?php
                          $args = array( 'numberposts' => '3');
                          $recent_posts  = wp_get_recent_posts($args);
                        ?>
                        <?php foreach($recent_posts as $recent): ?>
                        <div class="entry">
                            <div class="entry--img">
                                <a href="<?php echo get_permalink($recent['ID']); ?>">
              									<img src="<?php echo get_the_post_thumbnail_url($recent["ID"],'thumbnail'); ?>">
              								</a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--title">
                                    <a href="<?php echo get_permalink($recent['ID']); ?>"><?php echo $recent["post_title"]; ?></a>
                                </div>
                                <div class="entry--meta">
                                    <span><?php echo get_the_date('M j, Y', $recent['ID'] ); ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- .entry end -->
                      <?php endforeach; ?>

                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-4 footer--widget-contact">
                    <div class="footer--widget-title">
                        <h5>Get In Touch</h5>
                    </div>
                    <div class="footer--widget-content">
                        <ul class="list-unstyled mb-0">
                          <?php
                            $address = pods('address');
                            $address->find('name desc');

                            ?>

                            <?php while ($address->fetch()): ?>

                              <?php
                              $name =  $address->field('name');
                              $address_desc= $address->field('content');
                              $address_icon= $address->field('address_icon');


                                ?>


                            <li><i class="<?php echo $address_icon; ?>"></i><?php echo $address_desc ?></li>
                             <?php endwhile;  ?>
                        </ul>
                        <form class="form--newsletter">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- .col-md-4 end -->
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>&copy; <?php echo get_the_date('Y'); ?>, All rights reserved.</span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                    <div class="social">
                        <!-- <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a> -->
                        <a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <!-- <a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="share-pinterest" href="#"><i class="fa fa-instagram"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/functions.js"></script>

<?php wp_footer(); ?>
</body>

</html>
