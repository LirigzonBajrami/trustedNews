<?php get_header(); ?> 

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container">

        <!-- Shfaqja e kategoris qe i takon nje post -->
        <?php 
          $categories = get_the_category();
          foreach($categories as $cat): 
        ?>
          <span class="single-post-category">Category: 
            <a class="category-link" href="<?php echo get_category_link($cat->term_id);?>">
              <?php echo $cat->name; ?>
            </a> 
          </span>

        <?php endforeach; ?>

  <div class="row">

    <div class="col-lg-8">

    <h1 class="mb-4 mt-2 custom-style"><?php the_title(); ?></h1>


      <?php if(has_post_thumbnail()): ?>
              
        <img src="<?php the_post_thumbnail_url('lajme-large'); ?>"
        class="img-fluid mb-3 custom-img " alt="<?php the_title(); ?>">
  
      <?php endif;?>
  
  
      <?php get_template_part('includes/section','lajmecontent'); ?>

    </div>

    <!-- Aside bar in single post -->
    <div class="col-lg-4">
      <div class="card p-2">
        <div class="card-body d-flex justify-content-start">
          <!-- Nese eshte aktive sidebari me id news-sidebar : dmth atehere -->
          <?php if(is_active_sidebar('news-sidebar')): ?>
    
            <?php dynamic_sidebar('news-sidebar'); ?>
          <?php endif; ?>
          </div>
      </div>
    </div>

    

    </div> <!-- row -->
  </div> <!-- container-->
</section> <!-- page-wrap-->

<?php get_footer(); ?>