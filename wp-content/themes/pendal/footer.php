<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PENDAL
 */

?>
	<div class="footer">
	    <div class=" container">
		    <div class="row">
        		<div class="col-md-8 col-md-offset-2">
             		<div id="menu-outer">
            			<div class="tab">
            			<ul id="horizontal-list">
            				<?php if( have_rows('footer_social_icon','option') ): 
            					while( have_rows('footer_social_icon','option') ): the_row(); 
            						$image = get_sub_field('icon_image');
            						$link = get_sub_field('icon_url');
            						?>
            					<li>
            					  <?php if( $link ): ?>
            						 <a href="<?php echo $link; ?>">
            						<?php endif; ?>
            							<img src="<?php echo $image['url']; ?>" alt="<?php if($image['alt'] ){ echo $image['alt'];} ?>" />
            						<?php if( $link ): ?>
            							</a>
            					   <?php endif; ?>
            					</li>
            			  	<?php endwhile; ?>
            			<?php endif; ?>
            			</ul>
            			</div>
            		</div>
        	    </div>
        	</div>
    	</div>
	</div>


</div><!-- cover -->
<?php wp_footer(); ?>

</body>
</html>
