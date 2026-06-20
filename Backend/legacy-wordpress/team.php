<?php
/**
 * Template Name: team page
 *
 */
get_header(); ?>
<section id="team" class="wrapper item-2">
<div class="fullwidth-section">
  <div class="container">
    <div class="row">
<div class="page-title">
			   <h1><?php the_title();?></h1>
</div>
<div class="sub-nav">
    <?php wp_nav_menu(array('theme_location' =>'team-menu','menu_name'=>'Team Menu','container'=> false, ));?>
</div>
      <div class="col-md-12 text-center">
        <h1 class="weight-300 kill-top-margin" style="margin-bottom: 60px">
        Management <strong class="color-secondary">Team</strong></h1>
      </div>
    </div>
    <div class="row">
	<?php
// The Query
 $args = array(
	'posts_per_page'  => -1,
	'category_name'   => '',
	'orderby'         => 'post_date',
	'order'           => 'ASC',
	'post_type'       => 'team_type',
	'post_status'     => 'publish',
); 
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post(); ?>
	  <div class="col-md-6 col-sm-6 col-xs-12 management">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-6">
	
<ul id="categories" class="clr">
  <li class="pusher"></li>
	<li>
      <div>
        <?php the_post_thumbnail();?>
    </div>
  </li>
</ul>

	  
          </div>

          <div class="col-md-8 col-sm-8 col-xs-6 nme-desig">
          <h4><?php the_title();?></h4>
          <p><?php the_field('short_description');?></p>
          </div>
        </div>
        <br>
          <div class="description">
		<?php the_content();?></div>
      </div>
	  <?php endwhile;// Reset Query ?>
        <?php wp_reset_query(); ?>
    </div>
  </div>
</div> 
</section>
<?php get_footer(); ?>
