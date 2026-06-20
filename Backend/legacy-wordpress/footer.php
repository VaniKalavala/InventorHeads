<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */?>
    <footer>
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <p>&copy; Copyright <?php the_time('Y') ?> The <span>Inventor Heads</span> - All rights Reserved.</p>

                </div>

                <div class="col-md-6">

                    <p class="pull-right">Designed & Developed by <a href="http://www.colorpixels.net/">Colorpixels Webmedia</a></p>

                </div>

            </div>

        </div>

    </footer>

 <!-- get jQuery from the google apis -->
 <script src='https://www.google.com/recaptcha/api.js'></script>
   <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
  <!--<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js"></script>-->
    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  
   <script type="text/javascript" src="<?php bloginfo('template_url');?>/js/rs-plugin/custom/custom.js"></script>
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/js/rs-plugin/css/settings.css" media="screen" />
    <!-- external javascripts -->
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
   <!--<script defer src="<?php bloginfo('template_url');?>/js/jquery.flexslider.js"></script>-->
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
    <script>
$('nav.main_nav ul li a').addClass('hvr-sweep-to-top');
</script>
<script>
     $("[id^='myModalone']").attr('src', '');
     /*$('span.wpcf7-form-control-wrap.file-440').addClass('choose-file ');
     $('span.wpcf7-form-control-wrap.file-440').append('Choose-file ');
    $('.wpcf7-file').addClass('hide_file');*/
</script>
<?php wp_footer(); ?>
        </body>

        </html>


