<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <?php if( get_field('cta_title', 'option') ): ?>
               <h4><?php the_field( 'cta_title', 'option' ); ?>
               <?php if( get_field('cta_description', 'option') ): ?>
                  <span><?php the_field( 'cta_description', 'option' ); ?></span>
               <?php endif; ?>
              
            
            </h4>
            <?php endif; ?>
            
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6 ftext">
         <?php if(is_active_sidebar('footer-1')) {
                  dynamic_sidebar('footer-1');
               }
            ?>
         </div>
         <div class="col-lg-2 col-md-6">
         <?php if(is_active_sidebar('footer-2')) {
                  dynamic_sidebar('footer-2');
               }
            ?>
         </div>
         <div class="col-lg-4 col-md-6">
         <?php if(is_active_sidebar('footer-3')) {
                  dynamic_sidebar('footer-3');
               }
            ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <?php if( get_field('contact_us_title', 'option') ): ?>
                  <h4><?php the_field( 'contact_us_title', 'option' ); ?></h4>
               <?php endif; ?>
              
               <ul>
               <?php 
                  $ff = get_field('contact_us_content','option');
                  foreach ($ff as $fff) {
                        ?>
                        <li><i class="fa <?php echo $fff['icon'];?>"></i><?php echo $fff['info'];?></li>
                        <?php
                  }
                  
               ?>
                  
               </ul>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <?php if( get_field('footer_content', 'option') ): ?>
               <p><?php the_field( 'footer_content', 'option' ); ?></p>
            <?php endif; ?>
            
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php 
                  $ficon = get_field('footer_icon','option');
                  foreach ($ficon  as $ficonn) {
                        ?>
                        <li><a href="<?php echo $ficonn['footer_link']?>"><i class="fa <?php echo $ficonn['footer_icon']?>"></i></a></li>
                        <?php
                  }
                  
               ?>
              
            </ul>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer()?>
</body>
</html>