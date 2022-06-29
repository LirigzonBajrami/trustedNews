<!-- Fajlli i pare(baze,standard) qe direktohet kur klikohet ndonje
 category, psh Lajme , por na mundemi me perdore template te vecante 
 per category te ndryshme-->
<?php get_header(); ?> 

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container">

  <!-- Dmth qe kodin qe e kena shkru ne section-archive.php
       importo ketu me vetem nje rresht kod, pra mos me kompliku kodin -->
    <?php get_template_part('includes/section','archive'); ?>

    <!-- Paggination -->
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
    

  </div>
</section>

<?php get_footer(); ?>