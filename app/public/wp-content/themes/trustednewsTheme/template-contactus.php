<?php

/* Template Name: Contact Us*/ 
?>

<?php get_header(); ?>

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container">

    
    <div class="row">
      <div class="col-lg-7">
        
        <h1 class="contact-title"><?php the_title(); ?></h1>
        <?php get_template_part('includes/section','content'); ?>
        
        </div>
        
        <div class="col-lg-5 contact-info">
          <div class="adresa">

            <h3>Adresa</h3>
            <p>Rr. Rexhep Mala, Aktash, Nr.34,
Prishtinë 10000, Kosovë</p>
          </div>
          <div class="redaksia">
            <h3>Redaksia</h3>
            <p><span>E-mail: </span>contact@trustednews.wts2022.net</p>
            <p><span>Telefoni: </span>038 546 847</p>
            <p><span>Mobil: </span>+383 49 564 978</p>
          </div>

          <div class="marketing">
            <h3>Marketing</h3>
            <p>marketing@trustednews.com</p>
            <p><span>Telefoni: </span>038 546 847</p>

          </div>

          

      </div>
    </div>


  </div>
</section>
<?php get_footer(); ?>