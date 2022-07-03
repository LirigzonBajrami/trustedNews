<?php

// Load Bootstrap CSS
function load_css(){

  wp_register_style('bootstrap', 
  get_template_directory_uri(). '/css/bootstrap.min.css',
  array(), false, 'all');

  wp_enqueue_style('bootstrap');

  // load custom css
  wp_register_style('main', 
  get_template_directory_uri(). '/css/main.css',
  array(), false, 'all');

  wp_enqueue_style('main');

   // load custom css
   wp_register_style('queries', 
   get_template_directory_uri(). '/css/queries.css',
   array(), false, 'all');
 
   wp_enqueue_style('queries');

}

add_action('wp_enqueue_scripts', 'load_css');



// Load Bootstrap JavaScript
function load_js(){

  // Eshte installed ne wordpress automatikisht por duhet me bo enqueue
  wp_enqueue_script('jquery');

  wp_register_script('bootstrap', 
  get_template_directory_uri(). '/js/bootstrap.min.js',
  'jquery', false, true);

  wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts', 'load_js');


// Theme options
// Po i themi wordpresit qe po duam me perdore menus, pra na jep kete 
// funksionalitet permes ketij funksioni
add_theme_support('menus');

// Per me mujt me shtu foto ne nje post
add_theme_support('post-thumbnails'); 

// To add Widget funcionality to the appearance
add_theme_support('widgets');


// Menus
// Duhet me kriju lokacionin se ku ka me u vendos kjo menus
register_nav_menus(
    array(
      // id         emri visual i menus
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
    )
);

// Pasi qe e kena kriju menu location duhet me assign kete lokacion
// tek pjese specifike qe dojna me e shfaq ne website, psh tek header



// Limitimi i fjaleve pershkruese tek funksioni the_excerpt();
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



// Custom image sizes
add_image_size('lajme-large', 1000, 500, true);
add_image_size('lajme-small', 300, 200, true);


// Register Sidebars
function my_sidebars(){

      register_sidebar(

          array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4> class="widget-title">',
            'after_title' => '</h4>'

            
          )
        
      );

      register_sidebar(

        array(
          'name' => 'News Sidebar',
          'id' => 'news-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'

          
        )
      
      );

      // Last post lajme sidebar
      register_sidebar(

          array(
            'name' => 'Last Post Lajme',
            'id' => 'last-post-lajme',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'       
            
          )
      );

            // Last post teknologji sidebar
            register_sidebar(

              array(
                'name' => 'Last Post Teknologji',
                'id' => 'last-post-teknologji',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'       
                
              )
          );

               // Last post sport sidebar
               register_sidebar(

                array(
                  'name' => 'Last Post Sport',
                  'id' => 'last-post-sport',
                  'before_title' => '<h4 class="widget-title">',
                  'after_title' => '</h4>'       
                  
                )
            );

      // Lajme sidebar

      register_sidebar(

        array(
          'name' => 'Last Posts Lajme Sidebar',
          'id' => 'last-posts-lajme-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
          
        )
    );

    // Teknologji sidebar
    register_sidebar(

      array(
        'name' => 'Last Posts Teknologji Sidebar',
        'id' => 'last-posts-teknologji-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
        
      )
  );

      // Sport sidebar
      register_sidebar(

        array(
          'name' => 'Last Posts Sport Sidebar',
          'id' => 'last-posts-sport-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
          
        )
    );


    // ARCHIVE Sidebar
    register_sidebar(

      array(
        'name' => 'Archive Sidebar',
        'id' => 'archive-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
        
      )
  );


  // Categories Sidebar
  register_sidebar(

    array(
      'name' => 'Categories Sidebar',
      'id' => 'categories-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
      
    )
);


  // SLIDER Sidebar
  register_sidebar(

    array(
      'name' => 'Slider Sidebar',
      'id' => 'slider-sidebar',
      'before_title' => '<h4 class="widget-title">',
      'after_title' => '</h4>'
      
    )
);

}

add_action('widgets_init', 'my_sidebars');



