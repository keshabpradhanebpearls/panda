<?php get_header(); ?>

	<div class="slider-invested">
		<div id="my-pics" class="carousel slide" data-ride="carousel">
		   <div class="carousel-inner" role="listbox">
			<?php
				$active =0;
				if( have_rows('slider') ): ?>
				<?php while( have_rows('slider') ): the_row(); 
					$image = get_sub_field('image');
					$link = get_sub_field('video_url');
					$title = get_sub_field('title');
					$rd = rand(10,100);
					?>

			      	<div class="item <?php if( $active == 0 ){ echo 'active'; } ?>">
						<img src="<?php echo $image['url']; ?>" class="slider-image" alt="<?php echo $image['alt'] ?>" />
				         <div class="carousel-caption  invested">
                            <script>
                            /*
                              function testAnim<?php //echo $rd;?>(x) {
                                $('#animationSandbox<?php //echo $rd;?>').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
                                  $(this).removeClass();
                                });
                              };
                            
                              jQuery(document).ready(function($){
                                $(window).on('load', '.slider-title', function(e){
                                  e.preventDefault();
                                  var anim = "fadeInDown";
                                  testAnim<?php //echo $rd;?>(anim);
                                });
                                
                                
                            
                              });*/
                            
                            </script>
				              <span id="animationSandbox<?php //echo $rd;?>" style="display: block;"><h3 class="slider-title"><?php if( $title ):  echo $title; endif; ?></h3></span>
								<a class="various fancybox fancybox.iframe"  data-fancybox-type="iframe" href="<?php if( $link ):  echo $link; endif; ?>?autoplay=1">
					           	 <div class="watch-video-btn">Watch the video</div>
					        	</a>
<!--				        	<div id="down-arrow" class="down-arrow"><a href="#smooth-scroll"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow.png"> </a></div>
-->					    </div>
				     </div>
			      <?php $active ++; ?>
				<?php endwhile; ?>
			<?php endif; ?>

		   </div>
<!--		   <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
		   <span class="icon-prev" aria-hidden="true"></span>
		   <span class="sr-only">Previous</span>
		   </a>
		   <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
		   <span class="icon-next" aria-hidden="true"></span>
		   <span class="sr-only">Next</span>
		   </a>-->
		</div>
	</div>

	<div class="text-banner-1" id="smooth-scroll">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
        	    	<h3><?php $full_w_title = get_field( "first_full_width_text_title" ); if( $full_w_title ) { echo $full_w_title; } else { echo ''; } ?></h3>
        		</div>
        		<div class="col-md-8 col-md-offset-2">
            		<div class="vertical-bar"></div>
            		<p><?php $full_w_desc = get_field( "first_full_width_text_description" ); if( $full_w_desc ) { echo $full_w_desc; } else { echo ''; } ?></p>
        		</div>
        	</div>
		</div>
	</div>


	<?php $full_w_banner = get_field( "full_width_video_background" ); ?> 
	<?php $full_width_video = get_field( "full_width_video" ); ?> 
	<div class="video-container" id="full-width-iframe" style="background-image: url(<?php if( $full_w_banner ) { echo $full_w_banner['url']; } else { echo get_template_directory_uri().'/assets/images/banner-2.jpg'; } ?>">
		<div class="video-play">
			<a class="various fancybox fancybox.iframe"  data-fancybox-type="iframe" href="<?php if( $full_width_video ):  echo $full_width_video; endif; ?>?autoplay=1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-play-icon.png" id="load-full-iframe"></a>
		</div>
	</div>

	<div class=" gray-container">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="row">
    					<?php $left_side_banner = get_field( "left_side_video_background" ); ?> 
    					<?php $left_side_video_url = get_field( "left_side_video_url" ); ?> 
    					<a class="various fancybox fancybox.iframe"  data-fancybox-type="iframe" href="<?php if( $left_side_video_url ):  echo $left_side_video_url; endif; ?>?autoplay=1">
    					    <div class="left-banner" id="left-banner-iframe" style="background-image: url(<?php if( $left_side_banner ) { echo $left_side_banner['url']; } ?>);">
    				    	    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-play-icon.png" id="left-side-play">
    					    </div>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="right-banner">
    						<h3><?php $right_side_text_title = get_field( "right_side_text_title" ); if( $right_side_text_title ) { echo $right_side_text_title; } ?></h3>
    								<div class="vertical-bar"></div>
    						<p><?php $right_side_text_description = get_field( "right_side_text_description" ); if( $right_side_text_description ) { echo $right_side_text_description; } ?>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</div>

	<div class="container main">
		<div class="slider slider-nav">
			<?php
				if( have_rows('watch_their_story') ): ?>
				<?php while( have_rows('watch_their_story') ): the_row(); 
					$image = get_sub_field('image');
					$story_video_url = get_sub_field('story_video_url');
					$story_quoate = get_sub_field('story_quoate');
					$story_title = get_sub_field('story_title');
					$story_description = get_sub_field('story_description');
					$story_author = get_sub_field('story_author');
					$button_title = get_sub_field('button_title');
					?>	  	
				    <div class="slidergrid">
			    		<div class="grid-inner">
							<div class="quate-inner" data-match-height="story-quate">“<?php if( $story_quoate ):  echo $story_quoate; endif; ?>”</div>
							<a class="various fancybox fancybox.iframe"  data-fancybox-type="iframe" href="<?php if( $story_video_url ):  echo $story_video_url; endif; ?>?autoplay=1">
							    <img src="<?php echo $image['url']; ?>" class="img img-center" alt="<?php echo $image['url']; ?>">
							    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-play-icon.png" class="story-play-btn">
							</a>
							<div class="slide-text" data-match-height="story-text">
    							<h3><?php if( $story_title ):  echo $story_title; endif; ?>  </h3>
        						<h6> <?php  if( $story_author ):  echo $story_author; endif; ?>  </h6>
    							<p><?php if( $story_description ):  echo $story_description; endif; ?></p>
							</div>
							<a class="various fancybox fancybox.iframe"  data-fancybox-type="iframe" href="<?php if( $story_video_url ):  echo $story_video_url; endif; ?>?autoplay=1">
						        <div class="watch-video-btn videoplay" ><?php  if( $button_title ):  echo $button_title; endif; ?> </div>
						    </a>
						</div>
			   		</div>
			   	
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<div class="pandel-about">
		<div class=" container">
		    <div class="row">
        		<div class="col-md-8 col-md-offset-2">
            		<img src="<?php the_field('logo','option'); ?>">
        			<h3><?php $about_title = get_field( "about_title" ); if( $about_title ) { echo $about_title; } ?></h3>
        			<div class="vertical-bar"></div>
        			<p><?php $about_details = get_field( "about_details" ); if( $about_details ) { echo $about_details; } ?></p>
		        </div>
		    </div>
		</div>
	</div>
<?php /*
	<div class="border-line">
		<div class=" container">
		    <div class="row">
				<?php 
				$count=0;
				if( have_rows('pendal_links') ): ?>
				<?php while( have_rows('pendal_links') ): the_row(); 
					$link_title = get_sub_field('link_title');
					$link_url = get_sub_field('link_url');			
					if ($count==8) { break; }		
					?>	  	
					<div class="col-md-3"><div class="link-box"><a href="<?php if( $link_url ) { echo $link_url; } else echo '#'; ?>"> <?php if( $link_title ) { echo $link_title; } ?></a></div></div>
					<?php $count ++; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	
	
	*/ ?>

<div class="border-line">
	<div class=" container">
	    <div class="row">
        	<nav id="site-navigation" class="main-navigation">
        		<?php
        		wp_nav_menu( array(
        			'theme_location' => 'menu-1',
        			'menu_id'        => 'primary-menu',
        		) );
        		?>
        	</nav> 
		</div>
	</div>
</div>
	
	
<?php get_footer(); ?>