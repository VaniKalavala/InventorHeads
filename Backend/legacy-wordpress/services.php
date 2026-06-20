<?php
/**
 * Template Name: Services Page
 *
 */
get_header(); ?>
<section id="trailer" class="wrapper item-2">
<div class="inner_pages">
   <section>
		<div class="">
		  <div class="container">
			
			<!-- START OF ACCORDION AND TABS -->
			<div class="row">
				<div class="page-title">
					 <h1>
					 <?php 
					 if (is_page( $page = 'services' )){
						echo 'all';
					 }
					 else{
						 the_title();
					 }?>
					 </h1>
				</div>	


<div class="sub-nav">
    <?php wp_nav_menu(array('theme_location' =>'services-menu','menu_name'=>'Services Menu','container'=> false, ));?>
</div>


			 <div id="accordion" class="panel-group pgroup2">

		<?php
          
		global $post;
                $post_slug=$post->post_name;
		$catname = $post_slug;
		if (is_page( $page = 'services' )){
		$catname = '';
		}else{
			$catname = $post_slug;
		}		
		// The Query
		 $args = array(
			'posts_per_page'  => 10,
			'category_name'   => $catname,
			'orderby'         => 'post_date',
			'order'           => 'ASC',
			'post_type'       => 'service_type',
			'post_status'     => 'publish',
		); 
		query_posts( $args );
		// The Loop
		while ( have_posts() ) : the_post(); ?>	
			<article class="publication publication1" data-id="96" id="publication-96">
				
<div class="publication-image pre-production">
<?php if( class_exists('Dynamic_Featured_Image') ) {
     global $dynamic_featured_image;
     $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() );

    //You can now loop through the image to display them as required
    //For example
    foreach( $featured_images as $image ) {    
       echo "<img src='{$image['full']}' alt='Dynamic Featured Image' />";
    }
 }?></div>
 				<div class="publication-content">
					<header>
						<h3><?php the_title();?></h3>
						<!--<span><?php the_author();?> <?php the_time('Y');?></span>-->
					</header>
					<!--<p class="publication-authors"><?php the_field('authors_names');?></p>
<div class="file-downloadable">
                              <a class="publication-resource pdf" href="<?php the_field('pdf_link');?>" target="_blank"><i class="fa fa-file-text" aria-hidden="true"></i> PDF</a>
					<a class="publication-resource material" href="<?php the_field('material_link');?>" target="_blank"><i class="fa fa-folder-open" aria-hidden="true"></i> Supplemental Material</a>
</div>-->
	<div class="content_pub">
            <?php the_content();?>
        </div>
        <!--<div class="share-icons">
               <h5>Share : <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></h5>
        </div>-->
				</div>
			</article>
		<?php
		 endwhile;// Reset Query ?>
		<?php wp_reset_query(); ?>
			 </div>
			</div>
		</div>
		</div>

</section>
</div>
</section>
<div class="clearfix"></div>
  <?php get_footer(); ?>
