<?php get_header(); ?>

    <!-- Inicio da página -->

    <section class="">
        <div class="container">
            <div class="row gap-2 justify-content-between">

                <!-- Inicio Post -->

                <div class="col col-lg-7 bg-light rounded-4 mx-3 mx-md-0 my-3 p-4">
                    <div class="col d-flex align-items-end pdr-bg-image pdr-single-post-img text-light rounded-4 p-4 " style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.274), rgba(14, 32, 44, 0.897)), url(<?php the_post_thumbnail_url(); ?>);">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="my-3 p-4">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- Fim post -->

                <!-- Inicio Sidebar -->

                <div class="d-none d-lg-flex col col-md-4 bg-light rounded-4 my-3 p-4 justify-content-center">
                    <div class="row row-cols-1">
                        <div class="col">
                            <h3 class="text-primary"><b>Outras Matérias:</b></h3>
                        </div>
                        <div class="col">
                            <div class="col d-flex align-items-end" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.274), rgba(14, 32, 44, 0.897)), url(./images/standard-quality-control-collage-concept.jpg);">
                                <h3>Titulo da matéria</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fim Sidebar -->

            </div>
        </div>
    </section>

    <!-- Fim da página -->

<?php get_footer(); ?>