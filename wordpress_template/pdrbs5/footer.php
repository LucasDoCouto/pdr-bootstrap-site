    <!-- Início rodapé -->

    <!-- <footer class="d-flex bg-dark text-light align-items-center justify-content-center p-3 mt-auto">
      <h6>2023 © PDR Assessoria Empresarial</h6>
    </footer> -->

    <footer class="bg-dark py-3 border-top mt-auto">
      <div class="container d-flex flex-wrap justify-content-between align-items-center text-light">
      <p class="col-12 text-center text-md-start col-md-4 mb-0 text-light pb-3 py-md-3">2023 &copy; PDR Assessoria Empresarial</p>
    
      <a href="/" class="col-12 col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
        <img src="<?php bloginfo('template_url') ?>/images/triangulo_pdr.svg" alt="Logo" class="img-fluid" width="40">
      </a>
    
      <ul class="nav col-12 col-md-4 justify-content-center justify-content-md-end text-light link-light">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="list-unstyled navbar-nav list-group-horizontal py-2 nav-link px-2 link-light text-light %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
        ?>
        <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li> -->
      </ul>
      </div>
    </footer>
    <?php wp_footer(); ?>

    <!-- Fim rodapé -->

    <script src="<?php bloginfo('template_url') ?>/js/bootstrap.bundle.min.js"></script>
  </body>
</html>