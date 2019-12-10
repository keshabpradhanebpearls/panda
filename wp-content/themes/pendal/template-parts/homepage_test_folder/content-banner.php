<?php if(get_sub_field('banner_image')): ?>
	<div class="banner" style="background-image: url('<?php the_sub_field('banner_image'); ?>');">
<?php else: ?>
	<div class="banner">
<?php endif; ?>

	<div class="container">
		<div class="banner-container">
			<div class="banner-content">
				
				<?php if(get_sub_field('banner_title')): ?>
					<h1><?php the_sub_field('banner_title'); ?></h1>
				<?php endif; ?>

				<?php if(get_sub_field('banner_description')): ?>
					<?php the_sub_field('banner_description'); ?>
				<?php endif; ?>

				<?php if( get_sub_field('banner_button_label')):
					if( get_sub_field('banner_button_external_link') ): ?>

						<a href="<?php the_sub_field('banner_button_external_link'); ?>" target="_blank" class="banner-link btn"><?php the_sub_field('banner_button_label'); ?></a>

					<?php elseif( get_sub_field('banner_button_internal_link' ) ): ?>

						<a href="<?php the_sub_field('banner_button_internal_link'); ?>" class="banner-link btn"><?php the_sub_field('banner_button_label'); ?></a>

					<?php endif; ?>
				<?php endif; ?>

			</div>

			<a href="#body-scroll-div" class="down-arrow"><img src="<?php echo get_template_directory_uri().'/assets/image/dropbutton.png'; ?>" alt="Slide Down Icon"></a>
		</div>	
	</div>

</div>