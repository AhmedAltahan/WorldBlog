<?php
    require_once('wp-bootstrap-navwalker.php');
    // Add style sheets
    function altahan_add_styles(){

        wp_enqueue_style('bootstrap-css' , get_template_directory_uri() . "/css/bootstrap.min.css");
        // add bootstrap version 5 style

        wp_enqueue_style('fontawesome-css' , get_template_directory_uri() . "/css/font-awesome.min.css");
        // add fontawesome version 4 style

        wp_enqueue_style('mycustom-css' , get_template_directory_uri() . "/css/main.css");
        // add my custom main.css style

    }


    // Add Scripts Files
    function altahan_add_scripts(){

        // setup jquery above final body html tag
        wp_deregister_script('jquery');
        wp_register_script('jquery' , includes_url('/js/jquery/jquery.js' ), array() , false , true);
        wp_enqueue_script('jquery');
        // added jquery to the system

        wp_enqueue_script('bootstrap-js' , get_template_directory_uri() . "/js/bootstrap.min.js" , array() , false , true);
        // add bootstrap version 5 script
    }

    // Add menus to wordpress
    function altahan_register_custom_menus(){

        register_nav_menus( array(
            'bootstrap-nav-menu'    => 'Navigation Menu' ,
            'bootstrap-footer-menu' => 'Footer Menu'
        ));

    }

    // Specified menu location
    function altahan_bootstrap_nav_menu(){

        wp_nav_menu(array(

            'theme_location' => 'bootstrap-nav-menu' ,
            'menu_class'     => 'navbar-nav me-auto mb-2 mb-lg-0' ,
            'container' => '' ,
            'walker' => new wp_bootstrap_navwalker()

        ));
    }

    // Add Feature image to wordpress
    add_theme_support( 'post-thumbnails' ); 


    // make action for styles and scripts
    add_action('wp_enqueue_scripts' , 'altahan_add_styles');
    add_action('wp_enqueue_scripts' , 'altahan_add_scripts');

    // make action hook for menus
    add_action('init' , 'altahan_register_custom_menus');