<?php

/*

Template Name: Inedex1 dummy Page

*/

get_header(); ?>

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
        <header>
<nav class="main_nav">
    <div class="container">
        <div class="row">
        <a href="#" class="logo_center pull-left">
                <img src="<?php bloginfo('template_url');?>/images/logo.png" alt="Inventor logo">
            </a>
            <ul class="main_navleft pull-right edgenav">
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
</header>



        <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                    <!-- MAIN IMAGE -->
                    <img src="<?php bloginfo(template_url);?>/images/slide1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption medium_bg_asbestos lfb" data-x="right" data-hoffset="0" data-y="bottom" data-speed="800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                        <div calss="caption_file featured-project-info">
                            <h1>Movana</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="btn-hover">
                                <a class="detail_page" href="<?php the_permalink('11');?>">Read More</a>
                            </div>
                        </div>
                    </div>

                </li>

                <!-- SLIDE  -->

                <li data-transition="fade" data-slotamount="5" data-masterspeed="700">

                    <!-- MAIN IMAGE -->

                    <img src="<?php bloginfo(template_url);?>/images/slide2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYERS -->
                    <div class="tp-caption medium_bg_asbestos lfb" data-x="right" data-hoffset="0" data-y="bottom" data-speed="800" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                        <div calss="caption_file featured-project-info">
                            <h1>Movana</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="btn-hover">
                                <a class="detail_page" href="<?php the_permalink('11');?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

            <div class="tp-bannertimer"></div>

        </div>

    </div>

    <div class="clearfix"></div>

    <section id="trailer" class="wrapper item-2 wrapper1">

        <div class="container center">

            <div class="row">

                <!-- title -->

                <h2 class="title"><strong>Our</strong> Portfolio</h2>

                <!-- video -->

                <?php
$id=11;
$temp=$post;
$post=get_post($id);
setup_postdata($post);
?>
                    <div class="main-video-wrapper video-size wow bounceInDown" data-wow-duration="2s">
                        <!--<iframe class="main-video skrollable skrollable-after" src="https://www.youtube.com/embed/e-BVs-KCSiA" ></iframe>-->
                        <?php the_field('video');?>
                    </div>

                    <?php
wp_reset_postdata();
$post=$temp;
?>

            </div>
        </div>

    </section>

    <div class="clearfix"></div>

    <section class="portfolio_bot">

        <div class="container-fluid">

            <div class="row">

                <div class="two_halfs">

                    <li class="bg_img">
                        <div class="pad80">
                        <div class="more-from-us pull-right padding-left-sec">

                            <h3>More From Us</h3>

                            <?php
                        // The Query
                         $args = array(
                            'posts_per_page'  => 2,
                            'category_name'   => '',
                            'orderby'         => 'post_date',
                            'order'           => 'DESC',
                            'post_type'       => 'video_type',
                            'post_status'     => 'publish',
                        );
                        query_posts( $args );

                        // The Loop
                        while ( have_posts() ) : the_post(); ?>

                                <div class="each_portfolio wow fadeInDown">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <!--<img src="<?php bloginfo(template_url);?>/images/por1.jpg" alt="">-->
                                            <?php the_field('videos');?>

                                        </div>

                                        <div class="col-md-6">

                                            <h4><?php the_title();?></h4>

                                            <ul class="port_details">

                                                <li><i class="fa fa-clock-o"></i>
                                                    <?php the_time('M d,Y') ?>
                                                </li>

                                                <li><i class="fa fa-user"></i>
                                                    <?php the_author(); ?>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                                <?php endwhile;// Reset Query ?>
                                    <?php wp_reset_query(); ?>

                                        <!--<div class="each_portfolio wow fadeInUp" data-wow-duration="4s">

                            <div class="row">

                                <div class="col-md-6">

                                    <img src="<?php bloginfo(template_url);?>/images/por2.jpg" alt="">

                                </div>

                                <div class="col-md-6">

                                    <h4>Consectetur adipiscing elit</h4>

                                    <ul class="port_details">

                                        <li><i class="fa fa-clock-o"></i> June 6, 2017</li>

                                        <li><i class="fa fa-user"></i> Admin</li>

                                    </ul>

                                </div>

                            </div>

                        </div>-->

                                        <a href="<?php the_permalink();?>" class="btn btn_dark">View All</a>

                        </div>
                          </div>
                    </li>

                    <li>

                        <div class="about_inventor padding-right-sec wow fadeInRight" data-wow-duration="4s">

                            <h3>All the Works shown in video Its created at <span>InventorHeads</span></h3>

                            <p>Vivamus accumsan euismod enim luctus lacinia. Aliquam malesuada erat a neque commodo facilisis. Maecenas varius, enim et facilisis venenatis, ex tellus venenatis elit, vitae congue ligula mi pretium turpis. Nam blandit arcu in dignissim consequat. Duis maximus ut elit vel bibendum.</p>

                            <h5>Please download Inventor Heads Demoreel Breakdown</h5>

                            <a href="https://youtube.com/watch?v=2mzTpxfE2zQ" class="btn btn_dark">Download</a>

                        </div>

                    </li>

                </div>

            </div>

        </div>

    </section>

    <section class="welcome_section">

        <div class="container">

            <?php
$id=9;
$temp=$post;
$post=get_post($id);
setup_postdata($post);
?>

                <div class="row">

                    <div class="col-md-6">

                        <div class="welcome_left wow fadeInLeft " data-wow-duration="3s">

                            <?php the_field('heading');?>

                                <?php the_field('content');?>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="welcome_right wow rollIn" data-wow-duration="3s">

                            <?php the_post_thumbnail();?>
                        </div>

                    </div>

                </div>

                <?php
wp_reset_postdata();
$post=$temp;
?>

        </div>

    </section>

    <div class="clearfix"></div>

    <section class="contact_sec">

        <div class="container-fluid">

            <div class="row">

                <div class="two_halfs">

                    <?php
            $id=223;
            $temp=$post;
            $post=get_post($id);
            setup_postdata($post);
            ?>

                        <li>

                            <div class="about_inventor pull-right padding-left-sec wow slideInLeft" data-wow-duration="2s">

                                <?php the_field('heading');?>

                                    <?php the_field('content');?>

                                        <div class="scocial_icons">

                                            <ul class="social-links">

                                                <li>

                                                    <a href="#" class="facebook" title="Facebook" target="_blank">

                                                        <?php the_field('facebook');?>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#" class="twitter" title="Twitter" target="_blank">

                                                        <?php the_field('twitter');?>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#" class="googleplus" title="Google+" target="_blank">

                                                        <?php the_field('google_plus');?>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#" class="instagram" title="Instagram" target="_blank">
                                                        <?php the_field('instagram');?>

                                                    </a>

                                                </li>

                                                <li>

                                                    <a href="#" class="youtube" title="YouTube" target="_blank">

                                                        <?php the_field('youtube');?>

                                                    </a>

                                                </li>

                                            </ul>

                                        </div>

                            </div>

                        </li>

                        <?php
wp_reset_postdata();
$post=$temp;
?>

                            <li class="bg_img contactbg">

                                <div class="more-from-us padding-right-sec wow slideInRight " data-wow-duration="2s">

                                    <div class="contact_form">

                                        <h2 class="title">Get In <strong>Touch</strong></h2>

                                        <?php echo do_shortcode('[contact-form-7 id="197" title="Home Contact Form"]'); ?>

                                    </div>

                                </div>

                            </li>

                </div>

            </div>

        </div>

    </section>


 <footer>
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <p>© Copyright <?php the_time('Y') ?> The <span>Inventor Heads</span> - All rights Reserved.</p>

                </div>

                <div class="col-md-6">

                    <p class="pull-right">Designed & Developed by <a href="http://www.colorpixels.net/">Colorpixels Webmedia</a></p>

                </div>

            </div>

        </div>

    </footer>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/js/rs-plugin/css/settings.css" media="screen" />

    <!-- external javascripts -->

    <script type="text/javascript">
        var revapi;

        jQuery(document).ready(function() {

            revapi = jQuery('.tp-banner').revolution(

                {

                    delay: 9000,

                    startwidth: 1170,

                    startheight: 500,

                    hideThumbs: 10,

                    fullScreen: "on",

                    fullScreenAlignForce: "on",

                    fullScreenOffsetContainer: "#main_header",
                    onHoverStop: 'off',

                    navigation: {

                        onHoverStop: 'off'

                    }

                });

        }); //ready
    </script>

    <script src="<?php bloginfo('template_url');?>/js/wow.js"></script>

    <script>
        if ( typeof WOW !== 'undefined' ) {
        var wow = new WOW(

            {

                animateClass: 'animated',

                offset: 100,

                callback: function(box) {

                    if ( window.console ) {
                        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                    }

                }

            }

        );

        wow.init();
        }

        var moar = document.getElementById('moar');
        if ( moar ) {
        moar.onclick = function() {

            var section = document.createElement('section');

            section.className = 'section--purple wow fadeInDown';

            this.parentNode.insertBefore(section, this);

        };
        }
    </script>
    <script>
        $(function() { //run when the DOM is ready
            $(".panel-heading").click(function() { //use a class, since your ID gets mangled
                $(this).addClass("select").siblings(); //add the class to the clicked element
            });
        });
    </script>
    <script>
        $(function() {
            $(".panel-heading").click(function() {
                $(".panel-heading:before").css("transform", "rotate(-180deg)");
            });
        });
    </script>
    <!-- FlexSlider -->
    <script defer src="<?php bloginfo('template_url');?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function() {
            if ( typeof SyntaxHighlighter !== 'undefined' ) {
                SyntaxHighlighter.all();
            }
        });
        $(window).on('load', function() {
            if ( ! $.fn.flexslider ) {
                return;
            }
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                customDirectionNav: $(".custom-navigation a"),
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <script>
        // site preloader -- also uncomment the div in the header and the css style for #preloader
        $(window).on('load', function() {
            $('#preloader').fadeOut('9000', function() {
                $(this).remove();
            });
        });
    </script>
<script>
$(window).bind('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('#main_header').addClass('fixed');
        $("#main_header").animate({
            transition:'all 0.5s'
        });
    } else {
        $('#main_header').removeClass('fixed');
         $("#main_header").animate({
            transition:'all 0.5s'
        });
    }
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');

    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#cartoonVideo").attr('src', '');

    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#myModalone").on('shown.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });

    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModalone").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
});
</script>

<script>
$('nav.main_nav ul li a').addClass('hvr-sweep-to-top');
</script>
<script>
     $("#myModalone").attr('src', '');
</script>

<?php get_footer(); ?>
