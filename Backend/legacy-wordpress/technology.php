<?php
/**
 * Template Name: Technology page
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
<div class="sub-nav">
    <?php wp_nav_menu(array('theme_location' =>'technology-menu','menu_name'=>'Technology Menu','container'=> false, ));?>
</div>

	        <div id="accordion" class="panel-group">
		<?php
		if (is_page( $page = 'technology' )){
		$catname = '';
		/*echo '<div class="inner_pages">';
			echo '<div class="para">';
			echo '<ul>';
			echo '<li>';
		
			echo category_description('10');
		
			echo '</li>';
			echo '</ul>';
			echo '</div>';
			echo '</div>';*/
		}
	
		
		if(is_page( $page = 'workflow-tools' )){
			$catname = 'workflow-tools';
			/*echo '<div class="inner_pages">';
			echo '<div class="para">';
			echo '<ul>';
			echo '<li>';
		
			echo category_description('11');
		
			echo '</li>';
			echo '</ul>';
			echo '</div>';
			echo '</div>';*/
		}

                if(is_page( $page = 'streamliner' )){
			$catname = 'streamliner';
			/*echo '<div class="inner_pages">';
			echo '<div class="para">';
			echo '<ul>';
			echo '<li>';
		
			echo category_description('11');
		
			echo '</li>';
			echo '</ul>';
			echo '</div>';
			echo '</div>';*/
		}
		// The Query
		 $args = array(
			'posts_per_page'  => 10,
			'category_name'   => $catname,
			'orderby'         => 'post_date',
			'order'           => 'DESC',
			'post_type'       => 'technology_type',
			'post_status'     => 'publish',
			'paged' 	  => ( get_query_var('paged') ? get_query_var('paged') : 1),
		); 
		query_posts( $args );
		$x= 1;
		// The Loop
		while ( have_posts() ) : the_post(); ?>
			<article class="publication publish-align" data-id="96" id="publication-96">
				<div class="publication-image">
					<?php the_post_thumbnail();?>
				</div>
				<div class="publication-content">
					<header>
						<h3><?php the_title();?></h3>
						<!--<span><?php the_author();?> <?php the_time('Y');?></span>
					</header>
					<p class="publication-authors"><?php the_field('authors_names');?></p>
<div class="file-downloadable">
                              <a class="publication-resource pdf" href="<?php the_field('pdf_link');?>" target="_blank"><i class="fa fa-file-text" aria-hidden="true"></i> PDF</a>
					<a class="publication-resource material" href="<?php the_field('material_link');?>" target="_blank"><i class="fa fa-folder-open" aria-hidden="true"></i> Supplemental Material</a>
</div>-->
	<div class="content_pub">
            <?php the_content();?>
        </div>
        <div class="share-icons">
               <h5>Share : <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?></h5>
        </div>
				</div>
			</article>
		<?php
		$x++;
		 endwhile;// Reset Query ?>
		<?php wp_pagenavi(); ?>
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
