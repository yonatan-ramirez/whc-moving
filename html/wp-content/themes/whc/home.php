<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Home template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-moving
 */ 

get_header();
?>

	<div class="col-md-12">
     <?php the_content(); ?>
    </div>
<?php
get_footer();
