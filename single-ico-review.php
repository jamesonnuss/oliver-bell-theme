<?php get_header(); ?>

	<div class="content">

		<?php get_template_part( 'parts/content', 'header' ); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/loop', 'content-blocks' ); ?>

			<?php get_template_part( 'parts/loop', 'ico-review-information' ); ?>

		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>
