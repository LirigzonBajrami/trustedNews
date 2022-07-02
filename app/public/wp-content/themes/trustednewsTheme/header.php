<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trusted News</title>


  <!-- Ky funksion i load CSS Files -->
  <?php wp_head(); ?>

</head>
<body>

<header>
  <div class="container main-nav">
    <a href="#"><h2>TrustedNews</h2></a>

      
        <div>

        <?php
            wp_nav_menu(

                array(
                  'theme-location' => 'top-menu',
                  //ose me thjesht
                  // 'menu' => 'Top Bar'
                  // kesaj menus mundemi me ja jep ni klase 
                  'menu_class' => 'top-bar'
                )

            )
        ?>
        </div>

        <div>
          <?php get_search_form(); ?>
        </div>
        
        
        <div class="multi-language">
          <?php echo do_shortcode('[gtranslate]'); ?>
        </div>

     

  </div>
</header>
  
