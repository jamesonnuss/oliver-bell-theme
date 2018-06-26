<section class="ico-review-information">
    <?php if( get_field('rating') ): ?>
        <?php the_field('rating'); ?>
    <?php endif; ?>
    <?php if( get_field('founding_team') ): ?>
        <?php the_field('founding_team'); ?>
    <?php endif; ?>
    <?php if( get_field('product') ): ?>
        <?php the_field('product'); ?>
    <?php endif; ?>
    <?php if( get_field('token_utility') ): ?>
        <?php the_field('token_utility'); ?>
    <?php endif; ?>
    <?php if( get_field('market') ): ?>
        <?php the_field('market'); ?>
    <?php endif; ?>
    <?php if( get_field('competition') ): ?>
        <?php the_field('competition'); ?>
    <?php endif; ?>
    <?php if( get_field('timing') ): ?>
        <?php the_field('timing'); ?>
    <?php endif; ?>
    <?php if( get_field('progress_to_date') ): ?>
        <?php the_field('progress_to_date'); ?>
    <?php endif; ?>
    <?php if( get_field('community_support_&_hype') ): ?>
        <?php the_field('community_support_&_hype'); ?>
    <?php endif; ?>
    <?php if( get_field('price_&_token_distribution') ): ?>
        <?php the_field('price_&_token_distribution'); ?>
    <?php endif; ?>
    <?php if( get_field('communication') ): ?>
        <?php the_field('communication'); ?>
    <?php endif; ?>
    <?php if( have_rows('upsides') ): ?>
        <?php while ( have_rows('upsides') ) : the_row(); ?>
            <?php the_sub_field('upside_item'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if( have_rows('downsides') ): ?>
        <?php while ( have_rows('downsides') ) : the_row(); ?>
            <?php the_sub_field('downside_item'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if( have_rows('white_paper') ): ?>
        <div class="flexible-button-container">
            <div class="flexible-button-inner-container">
                <?php while ( have_rows('white_paper') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'white_paper_page_link_button' ): ?>
                        <div class="btn-center">
                            <a href="<?php the_sub_field('button_link'); ?>" class="button"><?php the_sub_field('button_text'); ?></a>
                        </div>
                    <?php elseif( get_row_layout() == 'white_paper_url_link_button' ): ?>
                        <div class="btn-center">
                            <a href="<?php the_sub_field('button_link'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
                        </div>
                    <?php elseif( get_row_layout() == 'white_paper_pdf_button' ): ?>
                        <div class="btn-center">
                            <a href="<?php the_sub_field('button_file'); ?>" class="button" target="_blank"><?php the_sub_field('button_text'); ?></a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>
