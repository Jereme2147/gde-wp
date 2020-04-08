<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800i,900i|Neuton:400,400i,700,800|Noto+Sans:400,700&display=swap" rel="stylesheet">
    <title>Glen Davis Electric</title>
    <?php wp_head(); ?>
</head>
<body onscroll="scrollNum()">
    <div class="container">
        <nav id="navbar"> 
            <div class="nav-box">
                <div class="nav-title">
                    <h1>
                        <a href="<?php echo get_home_url(); ?>/">
                            Glen Davis Electric
                        </a>
                    </h1>
                    <p>
                        Serving the High Country Since 1983
                    </p>
                </div>
                <div class="desktop-menu">
                    <!-- <ul id="menu-ul"> -->
                    <?php 
                        wp_nav_menu( array ( 'theme_location' => 'primary_menu' ) );
                    ?>
                </div> 
                <div class="hamburger-div">
                    <button class="hamburger hamburger--spin" type="button">
                        <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <div class="mobile-menu">
                    <?php 
                        wp_nav_menu( array ( 'theme_location' => 'primary_menu' ) );
                    ?>
                </div>
            </div>
        </nav>