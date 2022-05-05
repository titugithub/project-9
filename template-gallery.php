<?php 
/* 
   Template Name: Gallery
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

<section class="gallery-area pt-100 pb-100">
    <div class="container">
        <div class="row">

            <?php

                $args = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                while( $query -> have_posts() ) {
                    $query -> the_post();
                ?>
                <div class="col-xl-4">
                    <div class="single-gallery">
                        <img src="<?php the_post_thumbnail_url()?>">
                        <div class="gallery-hover">
                            <div class="gallery-content">
                            <h3>
                                <?php if( get_field('large_image') ): ?>
                                    <a href="<?php the_field( 'large_image' );?>" class="gallery"><i class="fa fa-plus"></i> item name</a>
                                <?php endif; ?>

                            </h3>
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
 <!-- CTA Area Start -->
<?php get_footer( )?>