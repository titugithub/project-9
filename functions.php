<?php

include( get_template_directory() . '/inc/class-tgm-plugin-activation.php' );

function titu_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('titu', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'titu')
    ));

}
add_action('after_setup_theme', 'titu_setup');

function titu_assets() {
    
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );


 
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );


    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'titu_assets');


// Custom Posts
// function titu_custom_posts() {

//     // Slider Custom Post
//     register_post_type('sliders', array(
//         'labels' => array(
//             'name' => __('Sliders', 'titu'),
//             'singular_name' => __('Slider', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
//         'show_in_rest' => true
//     ));

//     // Services Custom Post
//     register_post_type('services', array(
//         'labels' => array(
//             'name' => __('Services', 'titu'),
//             'singular_name' => __('Service', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title','custom-fields'),
//         'show_in_rest' => true
//     ));

//     // Counter Custom Post
//     register_post_type('counters', array(
//         'labels' => array(
//             'name' => __('Counters', 'titu'),
//             'singular_name' => __('Counter', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'custom-fields'),
//     ));

//     // Team Custom Post
//     register_post_type('teams', array(
//         'labels' => array(
//             'name' => __('Teams', 'titu'),
//             'singular_name' => __('Team', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'thumbnail', 'custom-fields'),
//     ));

//     // Testimonials Custom Post
//     register_post_type('testimonials', array(
//         'labels' => array(
//             'name' => __('Testimonials', 'titu'),
//             'singular_name' => __('Testimonial', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'thumbnail', 'custom-fields'),
//     ));

//     // Portfolio Custom Post
//     register_post_type('portfolio', array(
//         'labels' => array(
//             'name' => __('Portfolios', 'titu'),
//             'singular_name' => __('Portfolio', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
//     ));

//     // Gallery Custom Post
//     register_post_type('gallery', array(
//         'labels' => array(
//             'name' => __('Gallerys', 'titu'),
//             'singular_name' => __('Gallery', 'titu')
//         ),
//         'public' => true,
//         'show_ui' => true,
//         'supports' => array('title', 'thumbnail', 'custom-fields'),
//     ));

//     register_taxonomy('portfolio-cat', 'portfolio', array(
//         'lables' => array(
//             'name' => __('Categories', 'titu'),
//             'singular_name' => __('Category', 'titu')
//         ),
//         'hierarchical' => true,
//         'show_admin_column' => true
//     ));

// }
// add_action('init', 'titu_custom_posts');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme about Settings',
		'menu_title'	=> 'About Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme FAQ & Skill Settings',
		'menu_title'	=> 'FAQ & Skill Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme CTA Settings',
		'menu_title'	=> 'CTA Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Contact Settings',
		'menu_title'	=> 'Contact Section',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}  

function acf_css() {
    if(class_exists('ACF')) {
        $bg = get_field('header_background', 'option');
    }
    ?>
        <style>
            .header-top{
                background-color: <?php echo $bg;?>
            }
        </style>
    <?php
}
add_action('wp_head', 'acf_css');

function halim_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'halim' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'halim' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'halim' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'halim' ),
        'id'            => 'footer-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'halim_widgets_init' );


function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

function halim_comment_placeholders( $fields )
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
        /* Replace 'halim' with your theme’s text domain.
         * I use _x() here to make your translators life easier. :)
         * See http://codex.wordpress.org/Function_Reference/_x
         */
            . _x(
                'Your Name',
                'halim'
                )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Your Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="Your Website" id="url" name="url" type="url"',
        $fields['url']
    );

    return $fields;
}
add_filter( 'comment_form_default_fields', 'halim_comment_placeholders' );

function placeholder_comment_form_field($fields) {
    $replace_comment = __('Your Comment', 'halim');
     
    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
    
    return $fields;
 }
add_filter( 'comment_form_defaults', 'placeholder_comment_form_field', 20 );
