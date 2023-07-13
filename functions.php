<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

add_filter('wpcf7_autop_or_not', '__return_false');




/*
 * Add columns to exhibition post list
 */
 function add_acf_columns ( $columns ) {

// rename column
   return array_merge ( $columns, array ( 
     'homepage' => __ ( 'Featured on homepage' )
   ) );

 }
 add_filter ( 'manage_testimonial_posts_columns', 'add_acf_columns' );

  /*
 * Add columns to exhibition post list
 */
 function exhibition_custom_column ( $column, $post_id ) {
   switch ( $column ) {
     case 'homepage':

    $featured = get_post_meta ( $post_id, 'homepage', true );

    if ($featured == 1) {
     echo 'Featured';
    }
       // echo get_post_meta ( $post_id, 'homepage', true );
       break;
   }

 }
 add_action ( 'manage_testimonial_posts_custom_column', 'exhibition_custom_column', 10, 2 );


// Reorder columns
function column_order($columns) {
  $n_columns = array();
  $move = 'homepage'; // what to move
  $before = 'date'; // move before this
  foreach($columns as $key => $value) {
    if ($key==$before){
      $n_columns[$move] = $move;
    }
      $n_columns[$key] = $value;
  }
  return $n_columns;
}
add_filter('manage_posts_columns', 'column_order');






function yoast_seo_admin_remove_columns( $columns ) {
  unset($columns['wpseo-score']);
  unset($columns['wpseo-score-readability']);
  return $columns;
}

add_filter( 'manage_edit-page_columns', 'yoast_seo_admin_remove_columns', 10, 1 );




add_action( 'wp_enqueue_scripts', 'mytheme_deregister_scripts', 999 );
function mytheme_deregister_scripts() {
  if( is_home() || is_front_page() ) :
    wp_deregister_script('et-recaptcha-v3');
  endif;
}

//hide monster insights side bar
add_action( 'add_meta_boxes', 'remove_monster_insights_box' , 99 );
function remove_monster_insights_box() {
    remove_meta_box( 'monsterinsights-metabox', null, 'side' );
}


// function agr_dequeue_script() {

//   if( !is_page( array( 'submit-a-testimonial', 'contact' ) ) ){
    
//     //remove scripts
//     wp_dequeue_script( 'advanced-google-recaptcha-custom' );
//     wp_dequeue_script( 'advanced-google-recaptcha-api' );

//     //remove style
//     wp_dequeue_style( 'advanced-google-recaptcha-style' );
//   }

// }

// add_action( 'wp_enqueue_scripts', 'agr_dequeue_script', 100 );



/*
Plugin Name: Custom Dashboard Widget
Description: Adds a custom dashboard widget with a link to Google.
*/

// Register the custom dashboard widget
function custom_dashboard_widget() {
    wp_add_dashboard_widget(
        'custom_dashboard_widget',
        'Add a Pet',
        'custom_dashboard_widget_content'
    );

}
add_action('wp_dashboard_setup', 'custom_dashboard_widget');

// Display the content of the custom dashboard widget
function custom_dashboard_widget_content() {
    echo '<a class="button" style="font-size:20px;" href="post-new.php?post_type=pet">Add a Pet</a>';
}





