<div class="section section-companies small-section light-bg-companies">
	<div class="container">
		<div class="mobile-inner-container">
			<div class="section-head">
				<?php if(get_sub_field('section_title')): ?>
					<h2><?php the_sub_field('section_title'); ?></h2>
				<?php endif; ?>
			</div>
			
			
			<div class="section-body">
				<?php $flag = get_sub_field('use_logos_from_theme_options');

				if( $flag ): ?>
					<?php get_template_part( 'template-parts/content', 'theme-companies' ); ?>
				<?php else: ?>
					<?php if(have_rows('logo_lists')): ?>

						<div class="company-slider">
							<?php while(have_rows('logo_lists')):the_row(); ?>
								<div class="company-logo">
									<img src="<?php the_sub_field('company_logo'); ?>" alt="Company we have helped">
								</div>
							<?php endwhile; ?>
						</div>
						
					<?php endif; ?>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</div>