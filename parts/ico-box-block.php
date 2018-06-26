<?php if (have_posts()) : ?>
	<div class="content ico-box-block">
		<div class="content-blocks">
			<div class="block box-block">
				<div class="row small-up-1 medium-up-2 large-up-3" data-equalizer>
					<?php while (have_posts()) : the_post(); ?>
						<div class="column column-block">
							<div class="column-block-inner-container" data-equalizer-watch>
								<div>
									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="byline">
	                                        <?php the_time('F j, Y') ?> -
											<?php $terms = get_the_terms( $post->ID , 'ico_reviews_cat' );
												$index = 0;
							                    foreach ( $terms as $term ) {
													$index++;
							                        $term_link = get_term_link( $term, 'ico_reviews_cat' );
							                        if( is_wp_error( $term_link ) )
							                        continue;
													if ($index > 1){
														echo ', <a href="' . $term_link . '">' . $term->name . '</a>';
													} else {
														echo '<a href="' . $term_link . '">' . $term->name . '</a>';
													}
							                    }
							                ?>
										</p>
									<p>
										<?php the_field('introduction'); ?>
									</p>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="box-block-link">Read Review</a>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
