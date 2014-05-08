<?php get_header(); ?>

<div id="bg-video" class="cont desktop">
	<div class="home-tagline desktop"><?php the_field('home_tagline'); ?></div>
	<a id="home-scroll" class="desktop" href="#section1"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.png" /></a>
	<div class="videoWrapper">
		<video autoplay="true" loop="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.webm" type="video/webm">
		Update your browser to the latest version in order to view this video.
		</video>
	</div>
	<div id="section1" class="cont">
		<div class="mid-cont">
			<img id="elephant" alt="" src="<?php echo get_template_directory_uri(); ?>/images/elephant.png" />
			<h5><?php the_field('short_headline'); ?></h5>
			<div class="headline"><span><?php the_field('description'); ?></span></div>
			<a class="button" href="<?php the_field('link_1_url'); ?>"><?php the_field('link_1'); ?></a>
		</div>
	</div>
</div>

<?php get_footer(); ?>