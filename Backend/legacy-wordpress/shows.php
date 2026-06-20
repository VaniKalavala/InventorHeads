<?php
/**
 * Template Name: Shows page
 *
 */
get_header(); ?>

<section id="show" class="wrapper item-2">
<div class="inner_pages">
   <section>
		<div class="">
		  <div class="container">
			<!-- START OF ACCORDION AND TABS -->
			<div class="row inner-padding1">
				<div class="page-title">
					 <h1>
					 <?php 
					 if (is_page( $page = 'shows' )){
						echo 'shows';
					 }
					 else{
						 the_title();
					 }?>

					 </h1>
				</div>	
			<div class="sub-nav">
    <?php wp_nav_menu(array('theme_location' =>'shows-menu','menu_name'=>'Shows Menu','container'=> false, ));?>
</div>	
			 <div id="accordion" class="panel-group">
			 <div class="inner-padding">
			 <div class="row">
			  <?php
    $args = array( 'category' => 7, 'post_type' =>  'Show_type' ); 
    $postslist = get_posts( $args );    
    foreach ($postslist as $post) :  setup_postdata($post); 
    ?>  
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
    <?php the_excerpt(); ?>  
    <?php endforeach; ?> 
		<?php
					$catname = '';
					if ( is_page( 'TV Shows' ) ) {
						$catname = 'TV Shows';
					}
					if ( is_page( 'Films' ) ) {
						$catname = 'Films';
					}
					if ( is_page( 'Short Film' ) ) {
						$catname = 'Short Film';
					}
					if ( is_page( 'Tv Commercial' ) ) {
						$catname = 'Tv Commercial';
					}
					if ( is_page( 'Documentry' ) ) {
						$catname = 'Documentry';
					}
					
                
// The Query
 $args = array(
	'posts_per_page'  => -1,
	'category_name'   => $catname,
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'Show_type',
	'post_status'     => 'publish',
); 
query_posts( $args );
// The Loop
while ( have_posts() ) : the_post(); ?>
			   <div class="col-md-3">
                    <div class="portfolio_content_wrapper">
                        <div class="single_portfolio small_thumb">
                            <figure>
                                  <?php the_post_thumbnail();?>
                                <figcaption>

                                    <div class="default_content">
                                            <div class="portfolio_video_controller">
                                         <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <!-- default_content end -->
                                    <div class="hover_content">
                                        <div class="hover_text">
                                          
                                            <div class="hover_video_controller">
											
                        <a class="popup-youtube" href="#" data-toggle="modal" data-target="#myModalone-<?php the_ID(); ?>">
						 <i class="fa fa-play" aria-hidden="true"></i>
						</a>				
                                            </div>
                                        </div>

                                    </div>
                                 

                                </figcaption>
                            </figure>
<div class="show-title">
				<h3><?php the_title();?></h3>	
</div>
		
                        </div>
                        
                    </div>
                </div>
				<?php endwhile;// Reset Query ?>
		           <?php wp_reset_query(); ?>
				   </div>
				</div>
			</div>
			</div>
		</div>
		</div>

</section>
</div>
</section>
<?php 
query_posts( $args );
$x=1;
// The Loop
while ( have_posts() ) : the_post(); ?>
	<div class="modal fade" id="myModalone-<?php the_ID(); ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php the_title();?></h4>
        </div>
        <div class="modal-body">
           <?php the_field('video_link')?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php $x++; endwhile;?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
