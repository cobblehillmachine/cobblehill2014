<?php get_header(); ?>
<div id="story-slider" class="cont gray-bg">
	<div class="center-cont">
		<div class="flexslider cont">
			<ul class="slides">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo get_the_content(); ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
	<div class="page-header cont">
		<div class="mid-cont">
			<h5><?php the_title(); ?></h5>
			<h1><span><?php the_field('page_headline'); ?></span></h1>
			<div class="paragraph"><?php the_field('left_copy'); ?></div>
			<div class="paragraph"><?php the_field('right_copy'); ?></div>
			<a class="button" href="<?php the_field('link_1'); ?>"><?php the_field('link_1_title'); ?></a>
			<a class="button" href="<?php the_field('link_2'); ?>"><?php the_field('link_2_title'); ?></a>
		</div>
	</div>
	<div id="testimonial-slider" class="cont black-bg">
		<div class="center-cont">
			<?php query_posts(array('post_type' => 'Featured Works', 'order' => 'DESC', 'posts_per_page' => 10)); ?>			
			<div class="flexslider cont">
				<ul class="slides">
					<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<div class="testimonial-cont cont">
							<div class="desktop-img">
								<?php $image = get_field('testimonial_background'); $size = 'full'; echo wp_get_attachment_image( $image, $size ); ?>
							</div>
							<div class="mobile-img">
								<?php $image = get_field('testimonial_background'); $size = 'testimonial-bg'; echo wp_get_attachment_image( $image, $size ); ?>
							</div>
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
					</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div>	
		</div>
	</div>
	<div class="cont blue">
		<div class="center-cont">
			<?php
			global $wp_query;
			$postid = $wp_query->post->ID;
			$myCopyBlockMeta = get_post_meta($postid, 'extra_field', true);
			//$myCopyBlock = wpautop($myCopyBlockMeta);
			wp_reset_query();

			if ($myCopyBlockMeta) {
			echo $myCopyBlockMeta;
			}
			?>
		</div>
	</div>
			
			
<?php get_footer(); ?>