<!-- Shfaqja e rezultatit ne baze te search qe e jep useri
kontrollohet nga ky file -->
 <?php get_header(); ?> 

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container">

  <!-- Results of search -->
  <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>

    <?php get_template_part('includes/section','searchresults'); ?>

    <!-- Paggination -->
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
    

  </div>
</section>

<?php get_footer(); ?>