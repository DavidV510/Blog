<?php get_header(); ?>

<h2 class="big text-center">Latest Entries </h2>

<section class="posts container-fluid">
   <div class="row">
   <?php 
     $args=array(
         'posts_per_page'=>6
     );
     $entries=new WP_Query( $args );
     while($entries->have_posts()):$entries->the_post()
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



<section class="categories">
     <div class="container-fluid">
        <h2 class="big text-center">Categories</h2>
        <div class="row">
        <?php $cat=get_categories(); ?>

            <?php foreach($cat as $category): ?>
                <div class="post col-xs-6 col-md-6 col-lg-3">
                <a href="<?php echo get_category_link($category->cat_ID) ?>">
                <i class="<?php echo $category->description; ?>"></i>
                <h3 class="h3Cate"><?php echo $category->name; ?></h3>
                </a>
                </div>
            <?php endforeach; ?>
        </div>
     </div>
</section>

<?php get_footer(); ?>