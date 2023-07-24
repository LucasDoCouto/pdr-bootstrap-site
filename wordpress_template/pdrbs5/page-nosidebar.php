<?php /* Template name: pagina sem sidebar */ ?>

<?php get_header(); ?>

    <!-- Inicio conteúdo -->

    <section class="pdr-light-grey-bg text-light">
        <div class="container">

            <div class="row bg-light text-dark p-3 m-3 gap-1 rounded-5">
                <?php the_content(); ?>
            </div>

        </div>
    </section>

    <!-- Fim conteúdo -->

<?php get_footer(); ?>