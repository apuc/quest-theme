<?php get_header(); ?>
<div class="section-width">
	<div class="content-wrapper">
		<h1><?php the_title(); ?></h1>
		<div class="content">
			<section>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>