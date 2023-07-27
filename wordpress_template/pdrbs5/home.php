<?php get_header(); ?>

    <!-- Inicio conteúdo -->

    <section class="pdr-light-grey-bg text-light">
        <div class="container">

            <div class="bg-light text-dark p-4 m-3 rounded-5">
                <div class="row row-cols-1 row-cols-lg-2">

                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                    <div class="col p-3">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="post thumbnail" class="img-fluid">
                        <div class="p-3">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark"><h2><?php the_title(); ?></h2></a>
                            <h6><?php echo get_the_date();?></h6>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">LEIA MAIS »</a>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php else : get_404_template(); endif; ?>

                </div>

              <div class="d-flex justify-content-center gap-5">

                <?php previous_posts_link('Página Anterior') ?>
                <?php next_posts_link('Próxima página') ?>
              </div>

            </div>

        </div>
    </section>

    <!-- Fim conteúdo -->

<?php get_footer(); ?>