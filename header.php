<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>

    <meta charset="<?php bloginfo('charset') ?>">

    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    
    <title>
        <?php wp_title('|',true,'right') ?>
        <?php bloginfo('name') ?>
    </title>

    <?php wp_head() ?>

</head>

<body>


<!-- ........................................................................................................................ -->

    <nav  class="navbar navbar-dark bg-dark navbar-expand-lg custom-nav">
    
        <div class="container-fluid">

            <a class="navbar-brand" href="http://localhost/worldblog/"><?php bloginfo('name') ?></a> 

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php altahan_bootstrap_nav_menu() ?>
                
            </div>
            
        </div>
    </nav>



<!-- ........................................................................................................................ -->
    <!-- make navbar menu from bootstrap -->


    <!-- End navbar menu from bootstrap -->


    