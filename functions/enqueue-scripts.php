<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Register Foundation scripts
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), "6.4.1", true );
            
    // Register Foundation styles
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/foundation-sites/dist/css/foundation.min.css', array(), "6.4.1", 'all' );
     
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
       
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }


    // Custom below

        // animate.css
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' , array(), '1.0.0' );

    // wow animation
    wp_register_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array( ), '1.0.0' );
    wp_enqueue_script( 'wow' );


      wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Caveat&family=Happy+Monkey&family=Dancing+Script&family=Nunito+Sans:wght@400;700;800&family=Open+Sans:wght@400;600;700&display=swap ',array(), null );

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', false, '1.0.0' );

// home page scripts
  if( is_home() || is_front_page() ) {

      wp_register_script( 'slick',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.0.0' );
      wp_enqueue_script( 'slick' );

      wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', false, '1.0.0' );

      wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', false, '1.0.0' );
}

      wp_register_script( 'custom',  get_template_directory_uri() . '/assets/scripts/custom.js', array('jquery'), '1.0.0' );
      wp_enqueue_script( 'custom' );

// scripts for testimonials
if( is_page('testimonials') ) {
      wp_register_script( 'isotope',  'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array(), '1.0.0' );
      wp_enqueue_script( 'isotope' );
}

      wp_register_script( 'infinite',  get_template_directory_uri() . '/assets/scripts/infinite-scroll.pkgd.min.js', array(), '1.0.0' );
      wp_enqueue_script( 'infinite' );

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/styles/css/custom.css', array(), filemtime(get_template_directory() . '/assets/styles/css'), 'all' );
      
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);




