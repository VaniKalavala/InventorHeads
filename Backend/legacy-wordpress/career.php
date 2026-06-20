<?php
/**
 * Template Name: Career
 *
 */
get_header(); ?>
    <section id="career" class="wrapper item-2 item1">
        <div class="inner_pages">
            <section>
                <div class="">
                    <div class="container">

                        <!-- START OF ACCORDION AND TABS -->
                        <div class="row">
                            <div class="page-title move-left">
                                <h1><?php the_title();?></h1>
                            </div>
                            <div class="sub-nav">
                                <?php wp_nav_menu(array('theme_location' =>'career-menu','menu_name'=>'Career Menu','container'=> false, ));?>
                            </div>
                            <div id="accordion" class="panel-group col-md-12 clean">
                                <?php
$catname = '';
if ( is_page( 'internships' ) ) {
	$catname = 'internships';
}
if ( is_page( 'trainings' ) ) {
	$catname = 'trainings';
}

// The Query
 $args = array(
	'posts_per_page'  => -1,
	'category_name'   => $catname,
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'careers_type',
	'post_status'     => 'publish',
	'paged' 	  => ( get_query_var('paged') ? get_query_var('paged') : 1),
); 
query_posts( $args );
$x= 1;
// The Loop
while ( have_posts() ) : the_post(); ?>
                                   
                                    <div class="col-md-4">		
                                      <div class="career-post-list"> 

            <!--<a href="<?php the_permalink();?>"><div class="panel-heading">
              <h5 class="panel-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php the_title();?></h5>
            </div></a>

		</div>-->
                                            <h4 class="list-group-item-heading head-center">
                                            <a href="<?php the_permalink();?>"><?php the_title();?> </a>
                                             </h4>
                                            <ul class="list-inline list-group-item-text icon-experience">
                                           <li><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php the_field('experience');?></li>
                                            </ul>
									</div>	
                                    </div>
                                    <?php if($x%3 == 0){
		echo '<div class="clearfix"></div>';
		}  ?>
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
