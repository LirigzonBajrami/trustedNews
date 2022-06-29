<!-- Kjo faqe eshte faqja direkte(e pare) qe i shfaqet perdoruesit nese 
nuk kish me qene front-page.php -->
<?php get_header(); ?>

<section class="page-wrap">

  <!-- Renderimi i postit -->
  <div class="container">
    
  <div class="row">
    <div class="col-lg-8">

      <h1><?php the_title(); ?></h1>
      
      <?php  get_template_part('includes/section','content'); ?>
    </div>

    <div class="col-lg-4">
      Aside Home
    </div>

    
  </div>

  </div>
  
  <?php get_footer(); ?>
</section>