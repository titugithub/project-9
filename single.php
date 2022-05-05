<?php get_header()?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4><?php the_title()?></h4>
                    <ul>
                        <li><a href="<?php echo site_url()?>"></a>Home</li> / 
                        <li><?php the_title()?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2><?php the_title()?></h2>
                <?php the_post_thumbnail()?>
                <p><?php the_content()?></p>
                <div class="comments">
                <?php
                    if(comments_open()) {
                        comments_template();
                    }
                ?>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- <div class="single-sidebar">
                    <h4>latest post</h4>
                    <ul>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                    </ul>
                </div>
                <div class="single-sidebar">
                    <h4>category</h4>
                    <ul>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                    </ul>
                </div>
                <div class="single-sidebar">
                    <h4>recent comments</h4>
                    <ul>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                        <li><a href="">Lorem ipsum dummy text</a></li>
                    </ul>
                </div> -->
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                <?php else : ?>
                    <!-- Time to add some widgets! -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

 <?php get_footer()?>