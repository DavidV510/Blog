<?php get_header(); ?>

<section class="aboutUs container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <?php while(have_posts()):the_post(); ?>

        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
 </section>

<?php get_footer(); ?>