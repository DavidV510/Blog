<?php


get_header(); ?>

 <section class="aboutUs container-fluid">
 <div class="row">
   <?php 
    
     while(have_posts()):the_post()
    ?>

        <div class="post col-xs-12 col-md-6 col-lg-4">
            <?php the_post_thumbnail('entry', array('class'=>'img-fluid','alt'=>"Responsive image")); ?>
            <h3><?php the_title(); ?></h3>
            <p>
                Published On: <span><?php the_time(get_option('date_format')); ?></span>
            </p>
            <p>
                By: <span> <?php the_author(); ?></span>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">
              Read More
            </a>
        </div>

    <?php endwhile; wp_reset_postdata(); ?>

   </div>
 </section>

<?php get_footer(); ?>