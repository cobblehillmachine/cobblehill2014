<?php get_header(); ?>
<div id="bg-video" class="cont">
	<div class="videoWrapper">
		<video autoplay="true" loop="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.webm" type="video/webm">
		Update your browser to the latest version in order to view this video.
		</video>
	</div>
</div>

<?php get_footer(); ?>