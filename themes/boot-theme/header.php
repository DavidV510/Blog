<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <title>WP Bootstrap Theme</title>
    <?php wp_head(); ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body <?php body_class(); ?> >
    <?php $featured=wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
    <?php $tech=$featured[0]; ?>
    <header class="head" style="background-image: url(<?php echo $tech;?>);">

           
                

                    <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                       <a href="navbar-brand">
                           <a href="<?php echo home_url(); ?>">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-fluid" alt="Responsive image">
                           </a>
                        </a>
                    

                     
                    <?php wp_nav_menu(array(
                            'theme_location'=>'main-menu',
                            'container_class'=>'collapse navbar-collapse',
                            'container_id'=>'navbar',
                            'menu_class'=>'navbar-nav ml-auto',
                            
                        )); ?>
                  
                    
                 
                  </div>
                </nav>
           <div class="container">
                <div class="row">
                     <div class="col-md-6">
                        <div class="page-title">
                          <h1 class="name">

                            <?php if(is_front_page()){ ?>
                                <?php $desc=get_bloginfo('description','display'); ?> 
                                <span>
                                    <?php echo $desc; ?>
                                </span>
                            <?php }
                              global $post;
                            if(is_home()){?>
                                <span><?php echo 'BLOG'; ?></span>
                            <?php }
                            if(is_category()){?>
                                <span><?php echo single_cat_title(); ?></span>
                            <?php }else{ ?>
                                <span>
                                <?php echo get_the_title(); ?>
                                </span>
                            <?php } ; ?>
                          </h1>
                        </div>
                     </div>
                </div>
           </div>

    </header>  
