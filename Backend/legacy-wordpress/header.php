<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
    <!DOCTYPE html>

    <html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
       <link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon (1) (1).png" size="32*32">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/fonts/icofont/css/icofont.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/libs/animate.css">
         <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/responsive.css">
         <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flexslider.css" type="text/css" media="screen" />


        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<!--<div class="js">
    <div id="preloader"></div> 
</div>-->
       <header id="main_header" class="topheader">
            <nav class="main_nav">
                <div class="container">
                    <div class="row">
					              
                            <a href="<?php echo get_home_url(); ?>" class="logo_center pull-left">
                
				<?php dynamic_sidebar('logo');?>
            </a>
<div class="pull-right">
                        <?php wp_nav_menu(array('theme_location'=>'top-left','menu_class'=>'main_navleft','container'=> false));?>
          
                            <?php wp_nav_menu(array('theme_location'=>'top-right','menu_class'=>'main_navleft main_navright','container'=> false));?>
</div>
                    </div>

                </div>

            </nav>

        </header>

       <!--<header>
<nav class="main_nav">
    <div class="container-fluid">
        <div class="row">
        <a href="#" class="logo_center pull-left ppd1">
                <img src="<?php bloginfo('template_url');?>/images/logo.png" alt="Inventor logo">
            </a>
            <ul class="main_navleft pull-right edgenav ppd2">
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Shows</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Contact</a></li>
            </ul>


        </div>
    </div>
</nav>
</header>-->