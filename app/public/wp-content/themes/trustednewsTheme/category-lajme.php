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
          <?php if(is_active_sidebar('last-post')): ?>
              <div class="last-post">
                <?php dynamic_sidebar('last-post'); ?>

              </div>
          <?php endif; ?>
        </div>

        <div class="col-4">
        <?php if(is_active_sidebar('last-post-sidebar')): ?>
              <div>
                <?php dynamic_sidebar('last-post-sidebar'); ?>
              </div>
          <?php endif; ?>
        </div>
      </div>
  
  
    <!-- Dmth qe kodin qe e kena shkru ne section-archive.php
         importo ketu me vetem nje rresht kod, pra mos me kompliku kodin -->
      <?php get_template_part('includes/section','archive'); ?>
  
      <!-- Paggination -->
      <?php previous_posts_link(); ?>
      <?php next_posts_link(); ?>
    

  </div>
</section>

<?php get_footer(); ?>