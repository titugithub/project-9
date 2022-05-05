<?php 
/* 
   Template Name: Service
*/
?>
<?php get_header()?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title();?></h4>
                    <ul>
                        <li><a href="<?php echo site_url()?>">Home</a></li> / 
                        <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> our services</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

               <?php

                  $args = array(
                     'post_type' => 'services',
                     'posts_per_page' => -1
                  );
                  $query = new WP_Query($args);
                  while( $query -> have_posts() ) {
                     $query -> the_post();

                     $service_title = get_field('title_service');
                     $service_description = get_field('description_service');
                     $service_font = get_field('font_awesome_service');
                  ?>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <?php 
                        if($service_font){
                           ?>
                              <i class="<?php echo $service_font;?>"></i>
                           <?php
                        }
                     ?>
                     <?php 
                        if($service_font){
                           ?>
                               <h4><?php echo $service_title?></h4>
                           <?php
                        }
                     ?>
                     <?php 
                        if($service_font){
                           ?>
                              <p><?php echo $service_description?></p>
                           <?php
                        }
                     ?>
                    
                    
                     
                  </div>
               </div>
                  <?php
                  }
                  wp_reset_postdata();
                  
               ?>
            </div>
         </div>
      </section>
      <!-- Services Area End -->
 <!-- CTA Area Start -->
 <?php get_footer()?>