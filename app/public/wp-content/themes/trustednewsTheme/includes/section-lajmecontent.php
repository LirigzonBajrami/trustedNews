<!-- Contenti qe shfaqet ne single post -->
<!-- Permbajtja e njejt me section-content.php por eshte ndarje me 
logjike dmth per kategorin lajme,
 si dhe ka disa features shtese si date, author name etj. -->

<!-- Nese ka poste, perderisa ka atehere shfaqe -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <div class="post-content">

      <p><?php the_date('d/m/Y'); ?></p>

      <?php the_content(); ?>

      <?php
          $firstName = get_the_author_meta('first_name');
          $lastName = get_the_author_meta('last_name');

          //ose
          // echo 'Posted by:' . $firstName . '  ' . $lastName;

          
      ?>

      <p>Posted by: <?php echo $firstName ?>
                      <?php echo $lastName?>
      </p>


      <!-- TAGS qe lidhen me postin -->
      <div class="tags">
      <?php $tags = get_the_tags(); 
      foreach($tags as $tag): ?>

        
          <a href="<?php echo get_tag_link($tag->term_id);?>" class="tag-style">
              <?php echo $tag->name; ?>
          </a>
        

      <?php endforeach?>
      </div>


        <!-- Comments -->
      <div class="post-comments">
        <?php comments_template(); ?>
      </div>

    </div>

    

<?php endwhile; else: endif; ?>