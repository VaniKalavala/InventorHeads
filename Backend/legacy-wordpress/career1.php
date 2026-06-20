<?php
/**
 * Template Name: Career1 
 *
 */
get_header(); ?>
<div class="sub-nav">
    <?php wp_nav_menu(array('theme_location' =>'career-menu','menu_name'=>'Career Menu','container'=> false, ));?>
</div>

<section id="trailer" class="wrapper item-2">
<div class="inner_pages">
   <section id="about">
<div class="">
  <div class="container">
    
    <!-- START OF ACCORDION AND TABS -->
    <div class="row">
		<div class="page-title move-left">
		     <h1><?php the_title();?></h1>
		</div>	
	 <div id="accordion" class="panel-group col-md-6 clean">
<?php
$catname = 'currtent-openings';
if ( is_page( 'internships' ) ) {
	$catname = 'internships';
}
if ( is_page( 'trainings' ) ) {
	$catname = 'trainings';
}
// The Query
 $args = array(
	'posts_per_page'  => 10,
	'category_name'   => $catname,
	'orderby'         => 'post_date',
	'order'           => 'DESC',
	'post_type'       => 'careers_type',
	'post_status'     => 'publish',
); 
query_posts( $args );
$x= 1;
// The Loop
while ( have_posts() ) : the_post(); ?>
          <div class="panel panel-default"> 
            <a data-parent="#accordion" data-toggle="collapse" href="#one<?php echo $x;?>" class="collapsed"> 
            <div class="panel-heading">
              <h5 class="panel-title"><i class="fa fa-paper-plane-o"></i><?php the_title();?></h5>
            </div>
            </a> 
            <div id="one<?php echo $x;?>" class="panel-collapse collapse" style="height: 0px;"> 
              <div class="panel-body">
				<?php the_content();?>
				<h5>
					<a href="#" data-toggle="modal" data-target="#myModal<?php echo $x;?>">Click Here To Apply</a>
				</h5>
				 <!-- Trigger the modal with a button -->
				  <!-- Modal -->
				  <div class="modal fade" id="myModal<?php echo $x;?>" role="dialog">
					<div class="modal-dialog">
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Drop Your Resume</h4>
						</div>
						<div class="modal-body">
							<div class="contact-form">
								<fieldset>
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <h5 class="form-fields-title dark">Contact info</h5>
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">First name</p>
                    [text* text-500 id:candidate-first-name placeholder]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Last name</p>                  
                    [text* text-396]
                </div>
                <!-- end .form-group -->
            </div>
            <!-- end .form-group-wrapper -->
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Phone number</p>
                   [tel* tel-215]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Email</p>
                     [email* email-205]
                </div>
                <!-- end .form-group -->
            </div>
            <!-- end .form-group-wrapper -->

        </div>
        <!-- end .form-fields-wrapper -->

        <div class="divider"></div>

        <div class="form-fields-wrapper">
            <h5 class="form-fields-title dark">General info</h5>
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Position</p>
                     [dynamictext dynamictext-755 readonly "CF7_get_post_var key=’title'"]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Highest degree</p>
                    [text* text-583]
                </div>
                <!-- end .form-group -->

            </div>
            <!-- end .form-group-wrapper -->

            <div class="form-group-wrapper flex space-between items-center">
                 <div class="form-group">
                    <p class="label">Trade of experience</p>
                    [text* text-536]                
                  </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Years of experience</p>
                    [number number-947]
                </div>
                <!-- end .form-group -->

            </div>
            <!-- end .form-group-wrapper -->
            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Introduce about yoursell<span>(optional)</span></p>
                    [textarea textarea-817 x6]
                </div>
            </div>
            <!-- end .form-group-wrapper -->

        </div>
        <!-- end .form-fields-wrapper -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <p class="label">Upload Resume</p>
                    [file* file-204 filetypes:docx|pdf|rtf|txt]
                </div>
            </div>
            <div class="col-md-6">
                <div class="button-wrapper text-right">
                    <button type="submit" class="button next">Submit</button>
                </div>
                <!-- end .button-wrapper -->
            </div>
        </div>

    </div>
    <!-- end .form-inner -->
</fieldset>
							</div>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					</div>
				  </div>
              </div>
            </div>
		</div>
		<?php/* if($x%2 == 0){
		echo '<div class="clearfix"></div>';
		} */ ?>
<?php
$x++;
 endwhile;// Reset Query ?>
<?php wp_reset_query(); ?>
	 </div>
	 
	 
	 	 <div id="accordion-two" class="panel-group col-md-6">
<?php
$catname = 'currtent-openings';
if ( is_page( 'internships' ) ) {
	$catname = 'internships';
}
if ( is_page( 'trainings' ) ) {
	$catname = 'trainings';
}
// The Query
 $args = array(
	'posts_per_page'  => 10,
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
          <div class="panel panel-default"> 
            <a data-parent="#accordion-two" data-toggle="collapse" href="#two<?php echo $x;?>" class="collapsed"> 
            <div class="panel-heading">
              <h5 class="panel-title"><i class="fa fa-paper-plane-o"></i><?php the_title();?></h5>
            </div>
            </a> 
            <div id="two<?php echo $x;?>" class="panel-collapse collapse" style="height: 0px;"> 
              <div class="panel-body">
				<?php the_content();?>
				<h5>
					<a href="#" data-toggle="modal" data-target="#myModaltwo<?php echo $x;?>">Click Here To Apply</a>
				</h5>
				 <!-- Trigger the modal with a button -->
				  <!-- Modal -->
				  <div class="modal fade" id="myModaltwo<?php echo $x;?>" role="dialog">
					<div class="modal-dialog">
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Drop Your Resume</h4>
						</div>
						<div class="modal-body">
							<div class="contact-form">
								<fieldset>
    <div class="form-inner">
        <div class="form-fields-wrapper">
            <h5 class="form-fields-title dark">Contact info</h5>
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">First name</p>
                    [text* text-500 id:candidate-first-name placeholder]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Last name</p>                  
                    [text* text-396]
                </div>
                <!-- end .form-group -->
            </div>
            <!-- end .form-group-wrapper -->
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Phone number</p>
                   [tel* tel-215]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Email</p>
                     [email* email-205]
                </div>
                <!-- end .form-group -->
            </div>
            <!-- end .form-group-wrapper -->

        </div>
        <!-- end .form-fields-wrapper -->

        <div class="divider"></div>

        <div class="form-fields-wrapper">
            <h5 class="form-fields-title dark">General info</h5>
            <div class="form-group-wrapper flex space-between items-center">
                <div class="form-group">
                    <p class="label">Position</p>
                     [dynamictext dynamictext-755 readonly "CF7_get_post_var key=’title'"]
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Highest degree</p>
                    [text* text-583]
                </div>
                <!-- end .form-group -->

            </div>
            <!-- end .form-group-wrapper -->

            <div class="form-group-wrapper flex space-between items-center">
                 <div class="form-group">
                    <p class="label">Trade of experience</p>
                    [text* text-536]                
                  </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <p class="label">Years of experience</p>
                    [number number-947]
                </div>
                <!-- end .form-group -->

            </div>
            <!-- end .form-group-wrapper -->
            <div class="form-group-wrapper">
                <div class="form-group">
                    <p class="label">Introduce about yoursell<span>(optional)</span></p>
                    [textarea textarea-817 x6]
                </div>
            </div>
            <!-- end .form-group-wrapper -->

        </div>
        <!-- end .form-fields-wrapper -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <p class="label">Upload Resume</p>
                    [file* file-204 filetypes:docx|pdf|rtf|txt]
                </div>
            </div>
            <div class="col-md-6">
                <div class="button-wrapper text-right">
                    <button type="submit" class="button next">Submit</button>
                </div>
                <!-- end .button-wrapper -->
            </div>
        </div>

    </div>
    <!-- end .form-inner -->
</fieldset>
							</div>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					</div>
				  </div>
              </div>
            </div>
		</div>
		<?php/* if($x%2 == 0){
		echo '<div class="clearfix"></div>';
		} */ ?>
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
