<?php

/*
  Template Name:Contact Us
*/ 

get_header(); ?>

 <section class="contactUs container-fluid">
    <div class="row">
     
        <?php while(have_posts()):the_post(); ?>

        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>

    
    </div>
 </section>

<?php get_footer(); ?>