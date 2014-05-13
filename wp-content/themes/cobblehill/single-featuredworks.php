<?php get_header(); ?>
	<div id="single-project" class="cont">
		<div class="banner cont"><img alt="" src="<?php the_field('header_image'); ?>" /></div>
		<div class="page-header cont">
			<div class="mid-cont">
				<h5>featured work</h5>
				<h1><?php the_title(); ?></h1>
				<div class="intro"><?php the_field('intro_copy'); ?></div>
				<a class="button" href="<?php the_field('website_url'); ?>" target="_blank">view the site</a>
			</div>
		</div>
		<div id="row1" class="cont">
			<div class="center-cont">
				<?php if ( get_post_meta($post->ID, 'small_image', true) ) { ?>
					<div class="left row"><img alt="" src="<?php the_field('small_image'); ?>" /></div>
				<?php } ?>
				<?php if ( get_post_meta($post->ID, 'project_copy', true) ) { ?>	
					<div class="right row"><?php the_field('project_copy'); ?></div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php twentyfourteen_post_nav(); ?>
<?php get_footer(); ?>