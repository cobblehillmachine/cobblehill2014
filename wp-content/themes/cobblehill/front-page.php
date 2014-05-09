<?php get_header(); ?>

<div id="bg-video" class="cont desktop">
	<div class="home-tagline desktop"><?php the_field('home_tagline'); ?></div>
	<div id="home-scroll" class="desktop" onclick="scrollToHome();"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.png" /></div>
	<div class="videoWrapper">
		<video autoplay="true" loop="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/matchstick-preload.webm" type="video/webm">
		Update your browser to the latest version in order to view this video.
		</video>
	</div>
</div>
<div id="section1" class="cont">
	<div class="mid-cont">
		<img id="elephant" alt="" src="<?php echo get_template_directory_uri(); ?>/images/elephant.png" />
		<h5><?php the_field('short_headline'); ?></h5>
		<div class="headline"><span><?php the_field('description'); ?></span></div>
		<a class="button white" href="<?php the_field('link_1_url'); ?>"><?php the_field('link_1'); ?></a>
	</div>
</div>
<div id="section2" class="cont">
	<div class="header cont">
		<div class="mid-cont">
			<span>Our Specialties</span>
			<a class="button black" href="/services">what we do</a>
		</div>
	</div>
	<div id="cta-cont" class="cont">
		<?php query_posts(array('post_type' => 'Services', 'order' => 'ASC', 'posts_per_page' => 3)); ?>
				<?php while ( have_posts() ) : the_post(); ?>	
						<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
								if ($post_image_id) {
									$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
									if ($thumbnail) (string)$thumbnail = $thumbnail[0];
								} ?>
					<a class="cta" href="/services/#<?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" style="background: url('<?php echo $thumbnail; ?>') no-repeat center 80px <?php the_field('background_color'); ?>">
						<h3><?php the_title(); ?></h3>
						<div class="hidden description cont"><div class="sep"></div><span><?php the_field('service_description'); ?></span></div>
					</a>
				<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<?php get_footer(); ?>