<?php

/* 
 include css function
 */
function mademoiselle_style (){
    
    wp_enqueue_style('Owl Carousel', get_template_directory_uri().'/Fronted/css/owl.carousel.css', array(), 'v2.3.4');
    wp_enqueue_style('Carousel Theme', get_template_directory_uri().'/Fronted/css/owl.theme.default.css', array('Owl Carousel'), 'v2.3.4');        
    wp_enqueue_style('Theme', get_template_directory_uri().'/Fronted/css/theme.css', array(), 'v.1.0');  
    wp_enqueue_style('Style', get_template_directory_uri().'/style.css', array(), 'v.1.0');
     
}

add_action('wp_enqueue_scripts', 'mademoiselle_style');

function mademoiselle_scripts (){
    wp_enqueue_script('jQuery', get_template_directory_uri().'/Fronted/js/jquery.min.js', array(), 'v3.4.1', true);
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri().'/Fronted/js/bootstrap.bundle.min.js', array('jQuery'), 'v4.3.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/85bd05dd45.js', array(), '5', true);    
    wp_enqueue_script('Owl Carousel js', get_template_directory_uri().'/Fronted/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true); 
    wp_enqueue_script('Main js', get_template_directory_uri().'/Fronted/js/main.js', array('jQuery'), '1,0', true);
             
}

add_action('wp_enqueue_scripts', 'mademoiselle_scripts');

function mademoiselle_support (){
    
    //titlr support
    add_theme_support( 'title-tag' );
    
    //logo support
    add_theme_support( 'custom-logo', array (/* after set this function in custom theme menu we provide possibility for set logo*/
                'height'               => 25,
		'width'                => 196,
		'flex-height'          => false,
		'flex-width'           => false
		/*'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, */
         
    ));
    
    //featured picture dupport
    add_theme_support( 'post-thumbnails' );
    
    //add image suport
    add_image_size( 'news_list', 463, 307, true );
    add_image_size( 'team_list', 273, 355, true );
    add_image_size( 'single_team', 558, 725, true );
    
    //menu support
    register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'social-menu' => __( 'Social Menu' )
     )
   );
 
}
    

add_action('after_setup_theme', 'mademoiselle_support');
add_action('init', 'mademoiselle_support');