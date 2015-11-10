<?php /* Template Name: Сценарии */ ?>
<?php 
get_header();
?>
 <?php $staff = new WP_Query( array( 'post_type' => 'scenario' ) ); ?>
<div class="content-wrapper scenario-wrapper">
	<h1><?php the_title(); ?></h1>
	<div class="content">
		<?php the_content(); ?>
	<h2>Преподаватели</h2>
		<div class="scenario-wrap">

			 <?php while ( $scenario->have_posts() ) : $scenario->the_post(); ?>

			<div class="staff-item">
				<div class="image-wrap">
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
					<?php the_post_thumbnail(array( 234,124)); ?>
					<?php endif; ?>
				</div>
				<p class="staff-name"><?php the_title(); ?></p>
				<a href="<?php the_permalink() ?>" class="more">Подробнее</a>
			</div>	

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>	 

		</div>
	</div>
</div>
<?php 
get_footer();
?>