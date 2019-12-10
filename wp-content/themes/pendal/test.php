	<style type="text/css">
		

/*full widht video play*/

.embed__container__placeholder {
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    object-fit: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    width: 100%;
    display: block;
    position: absolute;
    height: 100%;
}

.btn-play {
  position: absolute;
  left: 50%;
  top: 50%;
  display: block;
  transform:translate(-50%, -50%);
  z-index: 10;
}

.videoWrapper {
    position: relative;
    padding-bottom: 51.25%;
    padding-top: 0px;
    height: 0;
}

.videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    z-index: 1;
}

.videoWrapper .video-playing iframe{
  opacity: 1;
  visibility: visible;
}

.videoWrapper .video-playing .btn-play {
  visibility: hidden;
  opacity: 0;
}

.video-play img{
	display: block;
	height: auto;
	margin: 0 auto;
	position: relative;
	vertical-align: middle;
  text-align: center;
} 


/*full widht video play*/
	</style>
	<div class="videoWrapper" >
		<?php 
			$iframe = get_field('full_width_video');
			if(get_field( 'full_width_video_background' ))
			{
				$video_thumb = get_field( 'full_width_video_background' );
				$image_src = wp_get_attachment_image_src( $video_thumb['id'], 'full' );
				$video_thumb = $image_src[0];
			}
			else{
				$obj = new HN_Hub_Custom_Functions;
				$video_thumb = $obj->get_video_thumbnail_uri($iframe);
			}

			preg_match('/src="(.+?)"/', $iframe, $matches);
			$src = $matches[1];
			preg_match('/embed(.*?)?feature/', $src, $matches_id );
			$id = $matches_id[1];
			$id = str_replace( str_split( '?/' ), '', $id );
			$params = array(
				'controls'    => 1,
				'hd'        => 1,
				'autohide'    => 1
			);

			$new_src = add_query_arg($params, $src);
			$iframe = str_replace($src, $new_src, $iframe);
			$attributes = 'frameborder="0" class="full_width_video" id="'. $id .'"';
			$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
		?>
		<div data-video="<?php echo $new_src; ?>" class="<?php if(isset($media) && $media=='image') { echo 'image-wrap'; } else{ echo 'video-wrap'; }?>">
			<?php echo $iframe; ?>			
			<img src="<?php echo $video_thumb;?>" class="embed__container__placeholder">
			<a href="javascript:void(0);" class="btn-play"><img src="http://localhost/pendal/wp-content/themes/pendal/assets/images/video-play-icon.png" class="videoplay-icon"></a>
		</div>
	</div>

	<script type="text/javascript">
		  //Stop Video
    function stopVideo() {
        $('.video-wrap').removeClass('video-playing');
        $('.video-wrap iframe').each(function() {
            var src = $(this).attr('src');
            var stopsrc = src.replace("autoplay=1", "autoplay=0");
            $(this).attr('src', stopsrc);
        });
    }

    //Play Video
     function playVideo(e) {
        stopVideo();
        var $this = $(this);
        var video_placeholder = $this.parent().find('.embed__container__placeholder');
        var $iframe = $this.parent().find('iframe');
        var video_url = $this.parent().attr('data-video');
        var index = $iframe.data('index');
        var src = video_url + '?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;autoplay=1&amp;autopause=0&amp;loop=1&amp;app_id=122963&muted=1';
        $iframe.attr('src', src);
        $(this).parent('.video-wrap').addClass('video-playing');
        e.preventDefault();
    }

    if($('.btn-play').width() > 0 ) {
     $(".btn-play").on('click', playVideo);
    }

	</script>