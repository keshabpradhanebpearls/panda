<div class="section section-three-col small-section">
	<div class="container">
		<div class="mobile-inner-container">
			<div class="section-head">
				<?php if(get_sub_field('section_title')): ?>
					<h2><?php the_sub_field('section_title'); ?></h2>
				<?php endif; ?>
			</div>

			<div class="section-body">
				<?php if(have_rows('three_column_content')): ?>
					<div class="three-columns">
						<?php while(have_rows('three_column_content')):the_row(); ?>
							<div class="three-column">
								<div class="three-col-icon">
									<?php if(get_sub_field('logo')): ?>
										<img src="<?php the_sub_field('logo'); ?>" alt="Icon">
									<?php endif; ?>
								</div>
								
								<?php if(get_sub_field('title')): ?>
									<h3><?php the_sub_field('title'); ?></h3>
								<?php endif; ?>

								<?php if(get_sub_field('short_information')): ?>
									<p><?php the_sub_field('short_information'); ?></p>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>