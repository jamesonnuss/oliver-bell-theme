<?php
/**
 * Template part for the page header
 */
?>
<section class="content-header">
<?php if( get_field('header_image_overlay_opacity')): ?>
	<div class="screen" data-opacity="<?php the_field('header_image_overlay_opacity'); ?>"></div>
<?php endif; ?>
<?php if( get_field('header_image')): ?>
	<div class="content-header-image <?php if( get_field('header_height') == 'Full Height' ): ?>full-height<?php endif; ?>" style="background-image:url('<?php the_field('header_image'); ?>');">
		<div class="row content-header-image-row <?php if( get_field('header_height') == 'Full Height' ): ?>full-height<?php endif; ?>">
			<div class="large-12 medium-12 small-12 columns">
				<?php if( get_field('custom_page_title') == 'Yes' ): ?>
					<h1><?php the_field('page_title'); ?></h1>
				<?php else: ?>
					<h1><?php the_title(); ?></h1>
				<?php endif; ?>
				<?php if( get_field('header_content')): ?>
					<p>
						<?php the_field('header_content'); ?>
					</p>
				<?php endif; ?>
				<?php if( get_field('header_button') == 'Yes' ): ?>
					<?php if( have_rows('header_button_group') ): ?>
						<div class="flexible-button-container">
							<div class="flexible-button-inner-container">
								<?php while ( have_rows('header_button_group') ) : the_row(); ?>
									<?php if( get_row_layout() == 'header_page_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_url_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_pdf_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_file'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<a href="#index" class="anchor-button mouse-button">
		<svg class="mouse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 130">
			<g fill="none" fill-rule="evenodd">
				<rect width="70" height="118" x="1.5" y="1.5" stroke="#FFF" stroke-width="3" rx="36"/>
				<circle class="scroll" cx="36.5" cy="31.5" r="4.5" fill="#FFF"/>
			</g>
		</svg>
	</a>
<?php else: ?>
	<div class="content-header-text">
		<div class="row content-header-image-row">
			<div class="large-12 medium-12 small-12 columns">
				<?php if( get_field('custom_page_title') == 'Yes' ): ?>
					<h1><?php the_field('page_title'); ?></h1>
				<?php else: ?>
					<h1><?php the_title(); ?></h1>
				<?php endif; ?>
				<?php if( get_field('header_content')): ?>
					<p>
						<?php the_field('header_content'); ?>
					</p>
				<?php endif; ?>
				<?php if( get_field('header_button') == 'Yes' ): ?>
					<?php if( have_rows('header_button_group') ): ?>
						<div class="flexible-button-container">
							<div class="flexible-button-inner-container">
								<?php while ( have_rows('header_button_group') ) : the_row(); ?>
									<?php if( get_row_layout() == 'header_page_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_url_link_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_link'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php elseif( get_row_layout() == 'header_pdf_button' ): ?>
										<div class="btn-center">
											<a href="<?php the_sub_field('button_file'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
</section>
