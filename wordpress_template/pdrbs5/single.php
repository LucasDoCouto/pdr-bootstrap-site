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

                <div class="d-none d-lg-block col col-md-4 bg-light rounded-4 my-3 p-4 justify-content-center">
                    <h3 class="text-primary"><b>Outras Matérias:</b></h3>
                    <!-- inicio carrossel -->
                    <?php 
                    $sidebar_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'category_name' => 'blog',
                    'orderby' => 'rand'
                    );

                    $sidebar_query = new WP_Query ( $sidebar_args );

                    ?>

                    <?php 
                        if ($sidebar_query->have_posts()) : while( $sidebar_query->have_posts() ) : $sidebar_query->the_post(); ?>

                    <div class="pt-3">
                        <a href="<?php the_permalink(); ?>">
                            <div class="pdr-sidebar-post" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 44, 73, 0.897)), url('<?php the_post_thumbnail_url(); ?>'); background-position: center; background-size: cover;">
                            </div>
                        </a>

                        <div class="p-3">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none link-dark"><h5><?php the_title(); ?></h5></a>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">leia mais</a>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>

                    <?php wp_reset_query(); ?>
                    <!-- fim carrossel -->
                  <div class="d-flex justify-content-center mt-4">
                    <a href="<?php echo get_home_url(); ?>/blog"><button class="btn btn-success"><b>VER MAIS</b></button></a>
                  </div>
                </div>

                <!-- Fim Sidebar -->

            </div>
        </div>
    </section>

    <!-- Fim da página -->

<?php get_footer(); ?>