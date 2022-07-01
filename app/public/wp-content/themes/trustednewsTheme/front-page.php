<!-- Fajlli i pare(baze,standard) qe direktohet kur klikohet ndonje
 category,psh Lajme, eshte archive.php, por na mundemi me perdore
  template te vecante per category te ndryshme si kjo psh-->
  <?php get_header(); ?> 

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container">


      <!-- Shfaqja e emrit te kategorise ne top part-->
      <h1 class="category-lajme"><?php echo single_cat_title(); ?></h1>


      <div class="row ">
        <div class="col-8">
          <!-- Nese eshte aktive sidebari me id news-sidebar : dmth atehere -->
          <?php if(is_active_sidebar('last-post-lajme')): ?>
              <div class="last-post">
                <?php dynamic_sidebar('last-post-lajme'); ?>

              </div>
          <?php endif; ?>
        </div>

        <div class="col-4">
        <?php if(is_active_sidebar('last-posts-lajme-sidebar')): ?>
              <div>
                <?php dynamic_sidebar('last-posts-lajme-sidebar'); ?>
              </div>
          <?php endif; ?>
        </div>
      </div>
  
  
    <!-- Dmth qe kodin qe e kena shkru ne section-archive.php
         importo ketu me vetem nje rresht kod, pra mos me kompliku kodin -->
      <div class="row home-page-latest">
        <div class="col-12">
            <div class="card p-2">
              <div class="card-body d-flex justify-content-start">
                <!-- Nese eshte aktive sidebari me id news-sidebar : dmth atehere -->
                <?php if(is_active_sidebar('news-sidebar')): ?>
          
                  <?php dynamic_sidebar('news-sidebar'); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
      </div>
    

  </div>
</section>

<?php get_footer(); ?>