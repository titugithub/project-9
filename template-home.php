<?php 
/* 
   Template Name: Home
*/
?>
<?php get_header()?>
      <!-- Slider Area Start -->
      <section class="slider-area" id="home">
         <div class="slider owl-carousel">
         <?php
            $args = array(
               'post_type' => 'sliders',
               'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            while( $query -> have_posts() ) {
               $query -> the_post();
            ?>
            <div class="single-slide" style="background:url('<?php the_post_thumbnail_url();?>'); background-size:cover">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <?php
                                 if(class_exists('ACF')) {
                                    $sub_title = get_field('slider_subtitle');
                                    $btn_url = get_field('slider_btn_url');
                                    $btn_text = get_field('slider_btn_text');
                                 }
                              ?>
                              <h4><?php echo $sub_title;?></h4>
                              <h2><?php the_title();?></h2>
                              <?php the_content();?>

                              <?php if( $btn_text ){ ?>
                                 <a href="<?php echo esc_url($btn_url);?>" class="box-btn"><?php echo $btn_text;?> <i class="fa fa-angle-double-right"></i></a>
                              <?php } ?>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         }
         wp_reset_postdata();
         ?>
         </div>
      </section>
      <!-- Slider Area Start -->
      <!-- About Area Start -->
      <section class="about-area pt-100 pb-100" id="about">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3>
                     <?php 
                        $abouttitle = get_field('about_title','option');
                        $aboutcontent = get_field('about_content','option');
                        $aboutaim = get_field('about_aim','option');
                       
                        if ($abouttitle) {
                          ?>
                           <span><?php echo $abouttitle['about_subtitle']?></span>
                          <?php?>
                           <?php echo $abouttitle['about_title']?>
                          <?php
                        }
                     ?>
                     
                      
                  </h3>
               </div>
               <div class="col-md-6">
                  <?php 
                     if($abouttitle){
                        ?>
                           <p><?php echo $abouttitle['about_description']?></p>
                        <?php
                     }
                  ?>
                  
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="about">
                     <div class="page-title">
                     <?php 
                        if($aboutcontent){
                           ?>
                             <h4> <?php echo $aboutcontent['title']?></h4>
                           <?php
                        }
                     ?>
                        
                     </div>
                     <?php 
                        if($aboutcontent){
                           ?>
                             <p> <?php echo $aboutcontent['description']?></p>
                           <?php
                        }
                     ?>
                     <?php 
                        if($aboutcontent){
                           ?>
                              <a href="<?php echo $aboutcontent['button_link'];?>" class="box-btn"><?php echo $aboutcontent['button_text']?><i class="fa fa-angle-double-right"></i></a>
                           <?php
                        }
                     ?>
                    
                  </div>
               </div>
               <div class="col-md-5">

                  <?php 
                     
                     foreach ($aboutaim as $aboutaimm) {
                        ?>
                        <div class="single_about">
                           <i class="fa <?php echo $aboutaimm['icon']?>"></i>
                           <h4><?php echo $aboutaimm['title']?></h4>
                           <p><?php echo $aboutaimm['content']?></p>
                        </div>
                        <?php
                     }
                     
                  ?>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- Choose Area End -->
      <section class="choose">
         <div class="container">
            <div class="row pt-100 pb-100">
               <div class="col-md-6">
                  <div class="faq">
                     <div class="page-title">
                      <?php 
                        $faq = get_field('faq_part','option');
                        $faqq = $faq['faq_content'];
                        if ($faq) {
                           ?>
                           <h4><?php echo $faq['title']?></h4>
                           <?php
                        }
                      ?>
                        
                     </div>
                     <div class="accordion" id="accordionExample">
                        <?php 
                           $i = 0;
                           foreach ($faqq as $faqs) {
                              $i++;
                               ?>
                              <div class="card">
                                 <div class="card-header" id="heading<?php echo $i?>">
                                    <h5 class="mb-0">
                                       <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>">
                                       <?php echo $faqs['faq_title']?>
                                       </button>
                                    </h5>
                                 </div>
                                 <div id="collapse<?php echo $i?>" class="collapse <?php if($i==1){echo 'show';}?>" aria-labelledby="heading<?php echo $i?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                    <?php echo $faqs['faq_content_part']?>
                                    </div>
                                 </div>
                              </div>
                               <?php
                           }
                           
                        ?>


                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="skills">
                     <div class="page-title">
                        <?php 
                           $skill = get_field('skill_part','option');
                           $skillpart = $skill['skill'];
                           if ($skill) {
                             ?>
                               <h4><?php echo $skill['title']?></h4>
                             <?php
                           }
                        ?>
                       
                     </div>

                     <?php 
                        foreach ($skillpart as $skillparts) {
                            ?>
                              <div class="single-skill">
                                 <h4><?php echo $skillparts['skill_name']?></h4>
                                 <div class="progress-bar" role="progressbar" style="width: <?php echo $skillparts['skill_number']?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $skillparts['skill_number']?>%</div>
                              </div>
                            <?php
                        }
                        
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Choose Area End -->
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
                     'posts_per_page' => 6
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
      
      <!-- Counter Area End -->
      <section class="counter-area">
         <div class="container-fluid">
            <div class="row">

               <?php

                  $args = array(
                     'post_type' => 'counters',
                     'posts_per_page' => 4
                  );
                  $query = new WP_Query($args);
                  while( $query -> have_posts() ) {
                     $query -> the_post();
                     $counter_icon = get_field('counter_icon');
                     $counter_number = get_field('counter_title');
                  ?>
                     <div class="col-md-3">
                        <div class="single-counter">
                           <h4>
                              <?php 
                                 if($counter_icon){
                                    ?>
                                       <i class="<?php echo $counter_icon?>"></i>
                                    <?php
                                 }
                              ?>
                              

                              <span class="counter">
                                 <?php 
                                    if($counter_number){
                                       echo $counter_number;
                                    }
                                 ?>
                                
                              </span><?php the_title();?></span></h4>
                        </div>
                     </div>
                  <?php
                  }
                  wp_reset_postdata();
                  
               ?>
            </div>
         </div>
      </section>
      <!-- Counter Area End -->
      <!-- Team Area Start -->
      <section class="team-area pb-100 pt-100" id="team">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> creative team</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

               <?php

                  $args = array(
                     'post_type' => 'teams',
                     'posts_per_page' => 3
                  );
                  $query = new WP_Query($args);
                  while( $query -> have_posts() ) {
                     $query -> the_post();

                     $teamdes = get_field('team_description');
                     $teamfb = get_field('team_facebook');
                     $teamtw = get_field('team_twitter');
                     $teamln = get_field('team_ linkdin');
                     $teamgoogle = get_field('team_google');
                  ?>
                     <div class="col-md-4">
                        <div class="single-team">
                           
                           <?php the_post_thumbnail()?>
                           <div class="team-hover">
                              <div class="team-content">
                                 <h4><?php the_title()?>
                                 <?php if($teamdes){
                                    ?>
                                       <span><?php echo $teamdes?></span>
                                    <?php
                                 }?>
                                 
                                 </h4>
                                 <ul>
                                    <?php 
                                       if($teamfb){
                                          ?>
                                           <li><a href="<?php echo $teamfb?>"><i class="fa fa-facebook"></i></a></li>
                                          <?php
                                       }
                                    ?>
                                    <?php 
                                       if($teamtw){
                                          ?>
                                          <li><a href="<?php echo $teamtw?>"><i class="fa fa-twitter"></i></a></li>
                                          <?php
                                       }
                                    ?>
                                    <?php 
                                       if($teamln){
                                          ?>
                                          <li><a href="<?php echo $teamln?>"><i class="fa fa-linkedin"></i></a></li>
                                          <?php
                                       }
                                    ?>
                                    <?php 
                                       if($teamgoogle){
                                          ?>
                                           <li><a href="<?php echo $teamgoogle?>"><i class="fa fa-google-plus"></i></a></li>
                                          <?php
                                       }
                                    ?>
                                   
                                    
                                    
                                   
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  wp_reset_postdata();

                  ?>
            </div>
         </div>
      </section>
      <!-- Team Area End -->
     
      <!-- Testimonials Area Start -->
      <section class="testimonial-area pb-100 pt-100" id="testimonials">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> what client say</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonials owl-carousel">

                     <?php

                        $args = array(
                           'post_type' => 'testimonials',
                           'posts_per_page' => -1
                        );
                        $query = new WP_Query($args);
                        while( $query -> have_posts() ) {
                           $query -> the_post();
                           $tesdes = get_field('testimonial_descriotion');
                           $testitle = get_field('testimonial_designation');
                        ?>
                        <div class="single-testimonial">
                           <div class="testi-img">
                              <?php the_post_thumbnail()?>
                           </div>
                           <?php 
                              if ($tesdes) {
                                 ?>
                                  <p><?php echo $tesdes;?></p>
                                 <?php
                              }
                           ?>
                          
                           <h4><?php the_title()?>
                           <?php 
                              if ($testitle) {
                                 ?>
                                   <span><?php echo $testitle?></span></h4>
                                 <?php
                              }
                           ?>
                          
                        </div>
                        <?php
                        }
                        wp_reset_postdata();
                        
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonilas Area End -->
      <!-- Latest News Area Start -->
      <section class="blog-area pb-100 pt-100" id="blog">
         <div class="container">
            <div class="row section-title">
               <div class="col-md-6 text-right">
                  <h3><span>who we are?</span> latest news</h3>
               </div>
               <div class="col-md-6">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
               </div>
            </div>
            <div class="row">

               <?php

                  $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 3
                  );
                  $query = new WP_Query($args);
                  while( $query -> have_posts() ) {
                     $query -> the_post();
                  ?>
                  <div class="col-md-4">
                     <div class="single-blog">
                        <?php the_post_thumbnail()?>
                        <div class="post-content">
                           <div class="post-title">
                              <h4><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
                           </div>
                           <div class="pots-meta">
                              <ul>
                                 <li><a href="#">25 oct 2018</a></li>
                                 <li><a href="#">admin</a></li>
                              </ul>
                           </div>
                           <p><?php the_excerpt()?></p>
                           <a href="<?php the_permalink()?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <?php
                  }
                  wp_reset_postdata();
                  
               ?>
            </div>
         </div>
      </section>
      <!-- Latest News Area End -->
      
 <?php get_footer()?>