<!-- Nese ka poste, perderisa ka atehere shfaqe -->

<h4 class="fokus-lajme">në fokus</h4>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

   
    <div class="card mb-3 aside-lajme">

        <div class="card-body d-lg-flex justify-content-start
        align-items-center">

        <!-- Imazhi -->
         <?php if(has_post_thumbnail()): ?>
            
            <img src="<?php the_post_thumbnail_url('lajme-small'); ?>"
            class="img-fluid mb-3  me-3" alt="<?php the_title(); ?>">
      
          <?php endif;?>


            <!-- Post Content -->
          <div class="lajme-content">
              
            <a href="<?php the_permalink(); ?>"
             class="fokus-link"><?php the_title(); ?></a>
          
              <?php the_excerpt(); ?>

              <a class="fokus-cat" href="<?php the_permalink(); ?>"><?php echo single_cat_title(); ?></a>
          
          </div>

        </div>

    </div>

<?php endwhile; else: endif; ?>