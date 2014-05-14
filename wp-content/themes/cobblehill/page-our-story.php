<?php get_header(); ?>
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
<?php get_footer(); ?>