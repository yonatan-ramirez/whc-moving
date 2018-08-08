<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: About template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-moving
 */

get_header();
?>

	<div class="container">
    <div class="row  text-center">
     <div class="bg-dark text-light">
     <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
     </div>
    </div>	
<?php
get_footer();
