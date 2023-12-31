<?php /* Template name: home page */ ?>

<?php get_header(); ?>

    <!-- Inicio banner -->
    <section class="pdr-banner">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 my-5">
            <h1>Promovendo Ética, Compliance e Integridade.</h1>
            <p>PDR Assessoria Empresarial, empresa de direito privado, tem como finalidade e objetivo instaurar a ética e a integridade nas organizações. Buscamos disseminar a cultura do Compliance e a importância da conformidade com regras, normas, decretos e legislações, incluindo a Lei Geral de Proteção de Dados. Nossa missão é levar os preceitos da ética, dos direitos fundamentais, da paz social e da cidadania tanto à sociedade quanto às empresas.</p>
            <div class="d-flex align-items-center justify-content-center">
              <a href="<?php echo get_home_url(); ?>#contato" class="text-decoration-none text-light"><button type="button" class="btn btn-success rounded-pill text-light" style="display: flex; align-items: center;"><b>Entre em Contato</b></button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fim banner -->

    <!-- Inicio serviços -->
    <section class="bg-secondary py-4 text-light">
      <div class="container p-5 p-md-0">
        <div class="row py-3">
          <h2 class="fw-semibold text-center">SERVIÇOS</h2>
        </div>
        <div class="row gap-3 justify-content-center">

          <div class="row-sm col-md-3 d-flex flex-column justify-content-center align-items-center bg-dark p-3 m5 rounded-4">
            <img src="<?php bloginfo('template_url') ?>/images/compliance.svg" alt="Compliance Icon" width="59" class="mb-4">
            <h4 class="fw-semibold">Compliance</h4>
            <a href="<?php echo get_home_url(); ?>/servicos" class="text-decoration-none text-light"><button type="button" class="btn btn-info text-light fw-semibold">Saiba Mais</button></a>
          </div>

          <div class="row-sm col-md-3 d-flex flex-column justify-content-center align-items-center bg-dark p-3 rounded-4">
            <img src="<?php bloginfo('template_url') ?>/images/LGPD.svg" alt="LGPD Icon" width="59" class="mb-4">
            <h4 class="fw-semibold">LGPD</h4>
            <a href="<?php echo get_home_url(); ?>/servicos" class="text-decoration-none text-light"><button type="button" class="btn btn-info text-light fw-semibold">Saiba Mais</button></a>
          </div>

          <div class="row-sm col-md-3 d-flex flex-column justify-content-center align-items-center bg-dark p-3 rounded-4">
            <img src="<?php bloginfo('template_url') ?>/images/treinamentos.svg" alt="Treinamentos Icon" width="59" class="mb-4">
            <h4 class="fw-semibold">Treinamentos</h4>
            <a href="<?php echo get_home_url(); ?>/servicos" class="text-decoration-none text-light"><button type="button" class="btn btn-info text-light fw-semibold">Saiba Mais</button></a>
          </div>

        </div>
      </div>
    </section>
    <!-- Fim serviços -->

    <!-- Inicio cases de sucesso -->

    <section class="bg-dark text-light text-center py-5">
      <div class="container">
        <div class="row py-3">
          <h2 class="fw-semibold text-center">CASES DE SUCESSO</h2>
        </div>

        <div class="row gap-3 gap-md-5 justify-content-center">
          <div class="row-sm col-md-2 pdr-case-img">
            <img src="<?php bloginfo('template_url') ?>/images/case-brigadeiromania.svg" alt="Brigadeiro Mania" class="rounded-circle mb-4">
            <h4 class="fw-semibold">Brigadeiro Mania</h4>
          </div>
          <div class="row-sm col-md-2 pdr-case-img">
            <img src="<?php bloginfo('template_url') ?>/images/case-calcariobv.svg" alt="Calcário Bela Vista" class="rounded-circle mb-4">
            <h4 class="fw-semibold">Calcário Bela Vista</h4>
          </div>
          <div class="row-sm col-md-2 pdr-case-img">
            <img src="<?php bloginfo('template_url') ?>/images/case-juanita.svg" alt="Boteco Juanita" class="rounded-circle mb-4">
            <h4 class="fw-semibold">Boteco Juanita</h4>
          </div>
          <div class="row-sm col-md-2 pdr-case-img">
            <img src="<?php bloginfo('template_url') ?>/images/case-nascenteazul.svg" alt="Nascente Azul" class="rounded-circle mb-4">
            <h4 class="fw-semibold">Nascente Azul</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- Fim cases de sucesso -->

    <!-- Inicio sobre nós -->
    <section class="bg-light text-dark">

      <div class="container">

        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">

          <div class="col col-md-4 order-2 order-md-1 align-items-end">
            <img src="<?php bloginfo('template_url') ?>/images/triangulo_pdr.svg" alt="Triangulo PDR" width="200">
          </div>

          <div class="col order-1 order-md-2 pt-5 pl-3">
            <h2 class="fw-semibold pdr-title">SOBRE NÓS</h2>
            <p>A PDR foi fundada em 2020, e está em constantemente aprimoramento e crescimento através do trabalho realizado por suas sócias fundadoras atuando nas empresas com a implantação  do programa de integridade e da adequação da Lei Geral de Proteção de Dados alem de outras ferramentas.</p>
          </div>

        </div>

      </div>
    </section>

    <!-- Fim sobre nós -->

    <!-- Inicio contato -->
    <section class="bg-info text-light py-5" id="contato">

      <div class="container">

        <div class="row pb-3">

          <h2 class="fw-semibold text-center">CONTATO</h2>

        </div>

        <!-- <div class="row"> -->
          <div class="row row-cols-1 row-cols-lg-2">

            <div class="col p-2 p-md-1 order-2 order-lg-1">

              <div class="d-flex flex-row gap-3">
                <div class="">
                  <img src="<?php bloginfo('template_url') ?>/images/phone.svg" alt="phone" width="53" height="53">
                </div>
                <div class="">
                  <p class="m-0 fw-semibold">Telefones</p>
                  <p>(67) 99661-5810 / (67) 99656-7187</p>
                </div>
              </div>
  
              <div class="d-flex flex-row gap-3">
                <div class="">
                  <img src="<?php bloginfo('template_url') ?>/images/mail.svg" alt="e-mail" width="53" height="53">
                </div>
                <div class="">
                  <p class="m-0 fw-semibold">E-mail</p>
                  <p>contato@pdrassessoriaempresarial.com.br</p>
                </div>
              </div>
  
              <div class="d-flex flex-row gap-3">
                <div class="">
                  <img src="<?php bloginfo('template_url') ?>/images/location.svg" alt="location" width="53" height="53">
                </div>
                <div class="">
                  <p class="m-0 fw-semibold">Endereço</p>
                  <p class="m-0">R. João Cândido da Câmara, 585 – Sala 23</p>
                  <p class="m-0">Centro – Dourados – MS</p>
                </div>
              </div>
  
  
            </div>
            <div class="col py-4 px-2 p-lg-1 order-1 order-lg-2">
              <?php echo do_shortcode('[wpforms id="40" title="false" walker="bootstrap_classes_wpforms_walker"]'); ?>
            </div>

          </div>
          
        <!-- </div> -->

      </div>

    </section>
    <!-- Fim contato -->

    <!-- Inicio posts -->

    <section class="bg-light text-dark text-center py-5">
      <div class="container">
        <div class="row py-3">
          <h2 class="fw-semibold text-center pdr-title">ÚLTIMAS PUBLICAÇÕES</h2>
        </div>

        <div class="d-flex flex-column flex-lg-row gap-3">

          <?php 
          $my_args = array(
            'post_type' => 'post',
            'posts_per_page' => '3',
            'category_name' => 'blog'
          );

          $my_query = new WP_Query ( $my_args );

          ?>

          <?php 
            if ($my_query->have_posts()) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
          
          <a href="<?php the_permalink(); ?>" class="text-decoration-none text-light col-lg-4">
          <div class="d-flex align-items-end pdr-bg-image pdr-home-post" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 44, 73, 0.897)), url('<?php the_post_thumbnail_url(); ?>');">
            <div class="text-light text-start m-3">
              
              <h2><?php the_title(); ?></h2>
              <p class="m-0"><?php echo get_the_date();?></p>
            </div>
          </div>
          </a>
          
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>
        </div>

        <div class="row py-3 d-flex align-items-center justify-content-center mt-3">
          <div class="col">
            <a href="<?php echo get_home_url(); ?>/blog"><button type="button" class="btn btn-info text-light fw-semibold">Veja todas as publicações</button></a>
          </div>
        </div>

      </div>
    </section>

    <!-- Fim posts -->

    <?php get_footer(); ?>