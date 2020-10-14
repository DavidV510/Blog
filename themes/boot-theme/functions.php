<?php 
   

    function boot_scripts(){

        wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
        wp_enqueue_style('head', get_template_directory_uri().'/css/head.css' ,NULL, '1.0.1.9');
        wp_enqueue_style('foot', get_template_directory_uri().'/css/foot.css' ,NULL, '1.0.1.9');
        wp_enqueue_style('front', get_template_directory_uri().'/css/front.css' ,NULL, '1.0.1.9');
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','head','foot','front'), '1.0.1.9');

        wp_enqueue_script('jquery');

        wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',array('jquery'), '1.0.0.3',true);
        
    }


   
    function boot_menus(){
        register_nav_menus(array(
            'main-menu'=>'Main Menu',
            'social-menu'=>'Social Menu'
        ));
    };

    function boot_thumbnails(){
        add_image_size( 'entry',750,490,true);
        add_theme_support('post-thumbnails');
    }

    function blog_widget(){
        register_sidebar(array(
            'name'=>__('Footer Widget'),
            'id'=>'footer_widget',
            'description'=>'Widget for footer',
            'before_widget'=>'<div id="%1$s" class="widget col-sm-6 %2$s">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'
        ));

        register_sidebar(array(
            'name'=>__('Sidebar Widget'),
            'id'=>'sidebar_widget',
            'description'=>'Widget for Sidebar',
            'before_widget'=>'<div id="%1$s" class="widget  %2$s">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'
        ));
    }
    // Hooks 
    add_action('init','boot_menus');
    add_action('wp_enqueue_scripts', 'boot_scripts');
    add_action('after_setup_theme','boot_thumbnails');
    add_Action('widgets_init','blog_widget');
    
?>