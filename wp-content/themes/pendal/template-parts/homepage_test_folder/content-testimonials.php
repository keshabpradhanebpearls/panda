<div class="section section-testimonials medium-section">
	<div class="container">
		<div class="mobile-inner-container">
			<div class="section-head">
				<?php if(get_sub_field('section_title')): ?>
					<h2><?php the_sub_field('section_title'); ?></h2>
				<?php endif; ?>
			</div>

			<div class="section-body inner-container">
				<?php $posts = get_sub_field('testimonial_list'); 
				if( $posts ): ?>
					<div class="testimonial-slider">
						<?php foreach( $posts as $post): ?>
					        <?php setup_postdata($post); ?>
							
							<div class="testimonial-content">
								<?php if( get_field('testimonial') ): ?>
						        	<p><q><?php the_field('testimonial'); ?></q></p>
						        <?php endif; ?>
								
								<?php if( get_field('author_name') ): ?>
						        	<p class="testimonial-author"><?php the_field('author_name'); ?></p>
						        <?php endif; ?>

						        <?php if( get_field('company_name') ): ?>
						        	<p class="testimonial-company"><?php the_field('company_name'); ?></p>
						        <?php endif; ?>
							</div>

					    <?php endforeach; ?>
					    <?php wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>	
	</div>
</div>