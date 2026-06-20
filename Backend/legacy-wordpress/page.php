<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="inner_page">
        <?php
        while ( have_posts() ) : the_post();?>
        <div class="page-content">
            <div class="container">
                <div class="row">
                	<div class="section-titel-contact text-left">
						<h3>WE ARE PROUD</h3>
						<p>It is a long establishedgfdg fact that a reader will be distracted by the on readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
					</div>
                    <?php
                     get_template_part( 'template-parts/page/content', 'page' );
                    endwhile; // End of the loop.
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
