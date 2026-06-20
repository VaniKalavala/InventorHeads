<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="career" class="wrapper item-2 item1">
<div class="inner-pages">
   <section>
<div class="career-detail-page">
  <div class="container">
    
    <!-- START OF ACCORDION AND TABS -->
    <div class="row">
	<div class="col-md-7">
		<div class="page-title move-left">
		     <h1><?php the_title();?></h1>
		</div>
			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile; // End of the loop.
			?>
     </div>
	<div class="col col-xs-5 job-application-form">
	<div class="form-heading">
     <h1>Apply for this Job</h1>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="220" title="Career Apply for Job"]');?>
	</div>
	</div>
    
</div>
</div>
</section>
</div>
</section>
<?php get_footer();