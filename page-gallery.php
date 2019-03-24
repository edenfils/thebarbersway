<?php

/**
 * Template Name: Gallery Page
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
 			<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/page-titles/12.jpg" alt="Background" />
 	</div>

 <?php } ?>
     <div class="container">
         <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="title text-center">
                     <div class="title--heading">
                         <h1>Gallery</h1>
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

 <!-- gallery 4 Column
 ============================================= -->
 <section id="gallery" class="gallery gallery-grid gallery-4col">
     <div class="container">
         <div class="row">
             <!-- gallery Filter
 			============================================= -->
             <div class="col-xs-12 col-sm-12 col-md-12 gallery-filter">
                 <ul class="list-inline mb-0">
                     <li><a class="active-filter" href="#" data-filter="*">All</a></li>
                     <li><a href="#" data-filter=".filter-Hairstyle">Hairstyle</a></li>
                     <li><a href="#" data-filter=".filter-Beard">Beard</a></li>
                     <li><a href="#" data-filter=".filter-Lineup">Lineup</a></li>
                     <li><a href="#" data-filter=".filter-Shave">Shave</a></li>
                 </ul>
             </div>
             <!-- .gallery-filter end -->
         </div>
         <div id="gallery-all">
             <!-- gallery #1 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Lineup">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/1.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">Modern Haircut</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a> <a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #2 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Beard">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/2.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">vintage mustache</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #3 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Hairstyle filter-Shave">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/3.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">elegant long beard</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">interior</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #4 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Hairstyle">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/4.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">special haircut</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #5 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Lineup">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/5.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">LONG BEARD</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #6 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Hairstyle">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/6.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">special haircut</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #7 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Shave">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/7.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">mustuche style</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #8 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Hairstyle">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/8.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">Hipster Style</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #9 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Lineup">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/9.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#"> Hipster Style</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #1 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Lineup">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/10.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">Modern Haircut</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a> <a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->

             <!-- gallery #2 -->
             <div class="col-xs-12 col-sm-6 col-md-3 gallery-item filter-Beard">
                 <div class="gallery--img">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/gallery/3col/11.jpg" alt="gallery Item">
                     <div class="gallery--hover">
                         <div class="gallery--action">
                             <div class="pos-vertical-center">
                                 <div class="gallery--title">
                                     <h4><a href="#">vintage mustache</a></h4>
                                 </div>
                                 <div class="gallery--cat">
                                     <a href="#">Hairstyle</a><a href="#">Lineup</a>
                                 </div>
                             </div>
                         </div>
                         <!-- .gallery-action end -->
                     </div>
                     <!-- .gallery-hover end -->
                 </div>
                 <!-- .gallery-img end -->
             </div>
             <!-- . gallery-item end -->


         </div>
         <!-- .row end -->

         <!-- .row end -->
     </div>
     <!-- .container end -->
 </section>
 <!-- #gallery end -->

<?php get_footer(); ?>
