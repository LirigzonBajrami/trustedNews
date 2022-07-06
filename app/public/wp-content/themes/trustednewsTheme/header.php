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
  <div class="container">
    
    <nav class="navbar custom-nav navbar-expand-lg bg-light">
      <div class="container-fluid">
          <a class="navbar-brand logo" href="#">TrustedNews</a>
        <button class="navbar-toggler custom-button-nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
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
              </li>
            
            </ul>
            <div class="header-search">
                  <?php get_search_form(); ?>
            </div>
          </div>
          
        </div>
        <div class="multi-language">
          <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
      </nav>

  </div>

</header>
  
