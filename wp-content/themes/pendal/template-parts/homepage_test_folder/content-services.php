<div class="section section-services large-section">
	<div class="container">
		<div class="section-head">
			<?php if(get_sub_field('section_title')): ?>
				<h2><?php the_sub_field('section_title'); ?></h2>
			<?php endif; ?>

			<?php if(get_sub_field('short_description')): ?>
				<p><?php the_sub_field('short_description'); ?></p>
			<?php endif; ?>
		</div>

		<div class="section-body">
			<?php $posts = get_sub_field('services_list');

			if( $posts ): ?>
			    <ul class="service-list">
				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <li class="service-col">
				        	<?php $cat_name = get_the_terms( $post->ID , 'service_categories' );
				        	$thumbnail_size = 'service-thumb'; ?>
				        	<a href="<?php echo get_site_url().'/'.$cat_name[0]->slug.'/#'.get_the_ID(); ?>">
				        		<div class="service-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, $thumbnail_size); ?>');">
				        			<div class="service-overlay">
				        				<div class="service-content">
				        					<?php if( get_field('title') ): ?>
												<h3><?php the_field('title'); ?></h3>
											<?php else: ?>
												<h3><?php the_title(); ?></h3>
											<?php endif; ?>
				        					<p><?php the_field('sub_title'); ?></p>
				        				</div>
				        			</div> 
				        		</div>
				        	</a>   
				        </li>
				    <?php endforeach; ?>
			    </ul>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
			
	</div>
</div>