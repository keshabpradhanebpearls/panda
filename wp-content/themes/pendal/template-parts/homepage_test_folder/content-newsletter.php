<div class="section section-newsletter">
	<div class="container">
		<div class="mobile-inner-container">
			<div class="inner-container newsletter-container">
				<div class="subscription-column newsletter-columns">
					<?php if(get_sub_field('subscription_form_title')): ?>
						<div class="newsletter-head">
							<h4><?php the_sub_field('subscription_form_title'); ?></h4>
						</div>
					<?php endif; ?>

					<div class="subscription-form-container">
						<?php if(get_sub_field('subscription_form')): ?>
							<?php echo do_shortcode(get_sub_field('subscription_form')); ?>
						<?php endif; ?>
					</div>
				</div>

				<div class="social-column newsletter-columns">
					<?php if(get_sub_field('social_link_title')): ?>
						<div class="newsletter-head">
							<h4><?php the_sub_field('social_link_title'); ?></h4>
						</div>
					<?php endif; ?>

					<?php if(have_rows('social_media_list')): ?>
						<div class="social-links">
							<?php while (have_rows('social_media_list')):the_row(); ?>
								<div class="social-icons">
									<a href="<?php the_sub_field('social_link'); ?>" target="_blank"><?php the_sub_field('social_icon'); ?></a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>