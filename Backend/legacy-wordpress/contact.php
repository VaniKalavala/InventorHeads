<?php
/**
 * Template Name: Contact page
 *
 */
get_header(); ?>
<!--<div class="page-title" style="background:url(<?php the_field('hero_image');?>) no-repeat; background-size:cover;
height:250px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h2 class="title wow fadeInLeft"><?php the_title();?></h2>
                </div>
            </div>
        </div>
    </div>
</div>-->
 <section id="contact" class="wrapper item-2">
  
					<div class="page-title1">
					   <h1><?php the_title();?></h1>
					</div>
         
  <div class="fullwidth-section" style="background-image: url(<?php echo esc_url( function_exists( 'get_field' ) ? get_field( 'cimage' ) : '' ); ?>);background-attachment:fixed;background-size: cover;
background-position: 50% -10%;">
    <div class="img-overlay3" style="background-color: rgba(47,54,64,0.65)">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 wow bounceInDown" data-wow-duration="2s">
          <h1 class="text-center weight-300 color-white" style="margin-bottom: 40px">
          Contact <strong class="color-primary">Us</strong></h1>
        </div>
      </div>
	  <div class="contact-set">
      <?php echo do_shortcode('[contact-form-7 id="353" title="Contact Page"]');?>
	  </div>
    </div>
</div>

  </section>
<div class="clearfix"></div>

<!-- ======================================== -->
<!-- ============= START MAP DISPLAY ============= -->
<!-- ======================================== -->
<div class="fullwidth-section half-padding kill-border" style="background-color: #373d49">
  <div class="container">
    <!-- ========== START FEATURE ROW - 3 COLUMN ========== -->
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center kill-top-margin kill-bottom-margin weight-300" style="color: #FFF">
        <strong class="color-secondary1">Our Location</strong>
        <i class="fa fa-map-marker wow bounceInDown" aria-hidden="true" data-wow-duration="infinite"></i></h1>
      </div>
    </div>
  </div>
</div> 

<div style="width:100%;" id="map-content">
      <?php the_field('map');?>
</div>
<!-- ======================================== -->
<!-- ================ END MAP DISPLAY =========== -->
<!-- ======================================== -->
<?php get_footer(); ?>
