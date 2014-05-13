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
				<div class="table">
					<?php if ( get_post_meta($post->ID, 'small_image_left', true) ) { ?>
						<div class="left row table-cell box-image"><img alt="" src="<?php the_field('small_image_left'); ?>" /></div>
					<?php } else if (get_post_meta($post->ID, 'text_left', true)) { ?>
					<div class="left row table-cell box-text"><?php the_field('text_left'); ?></div>
					<?php } ?>
					<?php if ( get_post_meta($post->ID, 'text_right', true) ) { ?>	
						<div class="right row table-cell box-text"><?php the_field('text_right'); ?></div>
					<?php } else if ( get_post_meta($post->ID, 'small_image_right', true) ) { ?>
						<div class="right row table-cell box-image"><img alt="" src="<?php the_field('small_image_right'); ?>" /></div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="project-slider" class="cont">
			<div class="center-cont">
				<div id="flexslider" class="flexslider cont">
					<ul class="slides">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php echo get_the_content(); ?>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
		<div id="row3" class="cont">
			<div class="center-cont">
				<div class="testimonial-cont cont">
					<img alt="" src="<?php the_field('testimonial_background'); ?>" />
					<div class="testimonial-info">
						<div class="table">
							<div class="table-cell">
								<h3>testimonial</h3>
								<div class="testimonial">"<?php the_field('testimonial'); ?>"</div>
								<div class="author">&ndash; <?php the_field('testimonial_author'); ?>,<span>&nbsp;<?php the_title(); ?></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="row4" class="cont">
			<div class="center-cont">
				<div class="strategy box">
					<?php echo implode('<br/> ', get_field('strategy')); ?>
				</div>
				<div class="creative box">
					<?php echo implode('<br/> ', get_field('creative')); ?>
				</div>
				<div class="development box">				
					<?php echo implode('<br/> ', get_field('development')); ?>
				</div>
			</div>
		</div>
	</div>
	<?php twentyfourteen_post_nav(); ?>
<?php get_footer(); ?>