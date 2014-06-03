<?php get_header(); ?>
<div id="map" class="cont"></div>

<div class="page-header cont">
	<div class="mid-cont">
		<h5><?php the_title(); ?></h5>
		<h1><span><?php the_field('page_headline'); ?></span></h1>
	</div>
</div>
<div class="black-bg cont">
	<div class="mid-cont">
		<div class="left">
			<h5>get in touch</h5>
			<div class="contact-cont">
				<div class="address cont">
					<?php the_field('address', 'user_1'); ?>
				</div>
				<a class="button black btn-desktop" target="_blank" href="<?php the_field('address_map', 'user_1'); ?>">driving directions</a>
			</div>
		</div>
		<div class="right">
			<div class="contact cont">
				<a href="mailto:<?php the_field('contact_email', 'user_1'); ?>"><?php the_field('contact_email', 'user_1'); ?></a><br/>
				<?php the_field('phone', 'user_1'); ?>
			</div>
			<a class="button black btn-mobile" target="_blank" href="<?php the_field('address_map', 'user_1'); ?>">driving directions</a>
			<div class="social-cont cont">
				<a class="twitter social-icon" target="_blank" href="<?php the_field('twitter_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" /></a>
				<a class="instagram social-icon" target="_blank" href="<?php the_field('instagram_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" /></a>
				<a class="vimeo social-icon" target="_blank" href="<?php the_field('vimeo_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/vimeo-icon.png" /></a>
				<a class="dribble social-icon" target="_blank" href="<?php the_field('dribble_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/dribble-icon.png" /></a>
				<a class="facebook social-icon" target="_blank" href="<?php the_field('facebook_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" /></a>
				<a class="pinterest social-icon" target="_blank" href="<?php the_field('pinterest_url', 'user_1'); ?>"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/pinterest-icon.png" /></a>
			</div>
		</div>

	</div>
</div>
<div id="contact-form" class="cont blue">
	<div class="mid-cont">
		<h5 class="form-title">contact us today</h5>
		<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
	</div>
</div>

<?php get_footer(); ?>