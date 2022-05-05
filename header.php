<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <?php wp_head()?>
   </head>
   <body <?php body_class()?>>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
                     <?php 
                        $email = get_field('email','option');
                        $phone = get_field('phone','option');
                     ?>
                     <?php 
                        if($email){
                           ?>
                           <a href="mailto:<?php echo $email?>"><i class="fa fa-envelope "></i> <?php echo $email?></a>
                           <?php
                        }
                     ?>
                     <?php 
                        if($email){
                           ?>
                          	<a href="tel:<?php echo $phone?>"><i class="fa fa-phone"></i> <?php echo $phone?></a>
                           <?php
                        }
                     ?>
							
						
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php 
                        $iconn =  get_field('header_social', 'option');
                        foreach ($iconn as $iconnn) {
                            ?>
                              <a href="<?php echo $iconnn['link']?>"><i class="fa <?php echo $iconnn['icon']?>"></i></a>
                            <?php
                        }
                        
                     ?>

                     
							
							
						</div>
					</div>
				</div>
			</div>
	   </section>
      <!-- Header Area Start -->
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="<?php echo site_url()?>">
                        <?php if( get_field('logo_text','option') ): ?>
                           <?php the_field( 'logo_text', 'option' ); ?>
                        <?php endif; ?>
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">
                        <!-- <ul class="navbar-nav ml-auto">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="gallery.html">Gallery</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                        <?php 
                           wp_nav_menu(array(
                              'theme_location'    => "primary-menu",
                              'menu_class'        => "navbar-nav ml-auto",
                           ))
                        ?>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area Start -->

