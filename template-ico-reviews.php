<?php
/*
Template Name: ICO Reviews
*/

get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>
		<div class="filter-container">
			<?php echo facetwp_display( 'facet', 'search' ); ?>
			<?php echo facetwp_display( 'facet', 'categories' ); ?>
			<button class="button" onclick="FWP.reset()">Clear Filter</button>
		</div>
		<?php echo facetwp_display( 'template', 'ico_reviews' ); ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
