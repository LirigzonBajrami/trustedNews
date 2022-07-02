<?php

/* Template Name: Weather*/ 
?>

<?php get_header(); ?>

<section class="page-wrap">
  <!-- Renderimi i postit -->
  <div class="container weather">

    
    <div class="row">
      <div class="col-lg-6">
        
        <h1 class="contact-title"><?php the_title(); ?></h1>
        <p class="klima-kosove">
        Klima e Kosovës ka lidhje me pozitën gjeografike të saj. Shtrirja në gjerësinë e mesme gjeografike, klima e Kosovës varet nga sasia e nxehtësisë që vjen nga Dielli, afërsia e detit Adriatik, lugina e Vardarit, hapja ndaj veriut, lartësia mbidetare mbi 400 m, shtrirja e maleve të larta në perëndim, jug e veri dhe e maleve të ulëta e të mesme në lindje e juglindje. Rrethanat e tilla gjeografike ndikojnë që klima e Kosovës të ketë tipare të veçanta në pjesën  perëndimore e lindore, në fusha, kodrina e male. Pra veçoritë klimatike ndryshojnë nga perëndimi në drejtim të lindjes dhe prej veriu kah jugu. Për të kuptuar më mirë veçoritë klimatike të Kosovës duhet njohur elementet e klimës si: diellosjen, temperaturën, reshjet, shtypjen atmosferike, erërat. Malet periferike kanë pozitë skajore në formë vargmalesh dhe malesh të veçuara.Malet qendrore janë më të ulëta, zënë më pak sipërfaqe dhe shtrihen në territorin e Kosovës.


        </p>
        
      </div>
      <div class="col-lg-6">
        
        <?php get_template_part('includes/section','content'); ?>
        
      </div>
    </div>

  </div>
</section>
<?php get_footer(); ?>