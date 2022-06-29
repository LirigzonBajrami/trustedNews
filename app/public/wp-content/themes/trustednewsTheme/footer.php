


<footer class="footer-nav">
  <div class="container">

    <div class="row center">

      <div class="col-6 footer-logo">
        <a href="#"><h2>Trusted News</h2></a>
        <p class="footer-text">Ky portal mirëmbahet nga kompania "Trusted News". Materialet dhe informacionet në këtë portal nuk mund të kopjohen, të shtypen, ose të përdoren në çfarëdo forme tjetër për qëllime përfitimi, pa miratimin e drejtuesve të "TrustedNews". Për ta shfrytëzuar materialin e këtij portali obligoheni t'i pranoni Kushtet e përdorimit</p>
      </div>
      <div class="col-6">
      <?php
            wp_nav_menu(

                array(
                  'theme-location' => 'footer-menu',
                  //ose me thjesht
                  // 'menu' => 'Top Bar'
                  // kesaj menus mundemi me ja jep ni klase 
                  'menu_class' => 'footer-bar'
                )

            )
        ?>
      </div>        
    </div>

    <div class="row">
      <div class="col-12">
        <p class="copyright">Të gjitha të drejtat janë të rezervuara © 2022-2022 Portali Trusted News</p>
      </div>
    </div>


  </div>
</footer>

<!-- Ky funksion i load JavaScript Files -->
<?php wp_footer(); ?>
</body>
</html>