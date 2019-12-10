<div class="section section-process medium-section" style="background-image: url('<?php the_sub_field('banner_image')?>');">
	<div class="container">
		<div class="mobile-inner-container">
			<div class="section-head">
				<?php if(get_sub_field('section_title')): ?>
					<h2><?php the_sub_field('section_title'); ?></h2>
				<?php endif; ?>

				<?php if(get_sub_field('short_description')): ?>
					<p><?php the_sub_field('short_description'); ?></p>
				<?php endif; ?>
			</div>
			
			<div class="section-body">
				<?php if(have_rows('process')): ?>
					<div class="process-list">
						
						<?php while(have_rows('process')):the_row(); ?>

							<div class="process-block">

								<div class="process-icon">
									<?php if(get_sub_field('icon')): ?>
										<?php the_sub_field('icon'); ?>
									<?php endif; ?>
								</div>
								
								<div class="process-content">
									<?php if(get_sub_field('title')): ?>
										<h3><?php the_sub_field('title'); ?></h3>
									<?php endif; ?>

									<?php if(get_sub_field('short_information')): ?>
										<?php the_sub_field('short_information'); ?>
									<?php endif; ?>
								</div>
						
							</div>

						<?php endwhile; ?>

					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>