<footer id="contact">
    <div class="container padding-top-bottom">
      <h2 class="title-section">Contáctanos</h2>
      <div class="row d-flex">
        <div class="col-lg-6 offset-lg-3 contact-info">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' =>2, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
      <ul class="item-footer">
        <li>
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          Isla de Chiloe- Parcelas Sector Aguas Buenas
        </li>
        <li>
          TyP Propiedades Spa
        </li>
        <li>
          <a href="mailto:contacto@reservanativachiloe.cl">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            contacto@reservanativachiloe.cl
          </a>
        </li>
        <li>
          <a href="https://wa.me/569 68483237" target="_blank">
            <i aria-hidden="true" class="fa fa-whatsapp"></i>
            +569 68483237
          </a>
        </li>
      </ul>
    </div>
    <div class="powered">
      <p>Copyright 2019 © RESERVANATIVACHILOE</p>
    </div>
    <?php wp_footer(); ?>
  </footer>


  <!-- END FOOTER -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/offcanvas.js"></script>
</body>

</html>