<?php
/**
 * Template Name: Portfolio page
 *
 */
get_header(); ?>
<?php /*
<div class="bnner_img_abt">
		<img src="<?php the_field('hero_image');?>">
	</div>
*/ ?>
    <div class="inner_page mar-top-0">
        <?php
        while ( have_posts() ) : the_post();?>
		<section id="trailer" class="wrapper item-2">
        <div class="page-content">
            <div class="container">
                <div class="row">
					<div class="page-title">
					   <h1><?php the_title();?></h1>
					</div>
                </div>
            </div>
        </div>
			<div class="container-fluid inner-padding">
				<div class="row">
					<?php 
					$id=11;
					$temp=$post;
					$post=get_post($id);
					setup_postdata($post);
					?> 
				    <div class="col-md-5">
						<div class="port_content">
							<h3>All the Works shown in video Its created at Inventor Heads</h3>
							<p>Please download inventorheads Demoreel Breakdown</p>
							<a href="#" class="btn btn_dark port-page" download>Download</a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="port-video">
						
							<!--<iframe class="main-video skrollable skrollable-after" src="https://www.youtube.com/embed/e-BVs-KCSiA" ></iframe>-->
							<?php the_field('video');?>
						</div>
					</div>
					<?php 
					wp_reset_postdata();
					$post=$temp;
					?>
				</div>
			</div>
		</section>
		<?php                  
		endwhile; // End of the loop.
		?>

    </div>
<div class="clearfix"></div>
<?php get_footer(); ?>