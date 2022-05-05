<?php 
/* 
   Template Name: About
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
 <?php get_footer()?>