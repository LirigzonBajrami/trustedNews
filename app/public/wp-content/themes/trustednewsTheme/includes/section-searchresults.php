<!-- Nese ka poste, perderisa ka atehere shfaqe -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="card mb-3">

        <div class="card-body d-flex justify-content-start
        align-items-center">

        <!-- Imazhi -->
         <?php if(has_post_thumbnail()): ?>
            
            <img src="<?php the_post_thumbnail_url('lajme-small'); ?>"
            class="img-fluid mb-3  me-3" alt="<?php the_title(); ?>">
      
          <?php endif;?>


            <!-- Post Content -->
          <div class="lajme-content">
              <h3><?php the_title(); ?></h3>
          
              <?php the_excerpt(); ?>
          
              <a href="<?php the_permalink(); ?>"
               class="btn btn-success">Read More</a>
          </div>

        </div>

    </div>

<?php endwhile; else: ?>
  
    There are no results for '<?php echo get_search_query(); ?>'
  <?php endif; ?>