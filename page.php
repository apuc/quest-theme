<?php get_header(); ?>
<section class="shadow">
<div class="section-width">
	<div class="content-wrapper">
		<h1 class="scenario-title"><?php the_title(); ?></h1>
		<div class="content">
			<section>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>