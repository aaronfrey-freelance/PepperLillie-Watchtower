<?php
/**
 * Template Name: Right Content Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<?php if (has_post_thumbnail()) : ?>

		<div class="col-sm-6 inner-image">
			<?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'img-responsive']); ?>
		</div>

		<div class="col-sm-6 inner-content">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>

	<?php else : ?>
		<div class="col-md-12">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	<?php endif; ?>

<?php endwhile; ?>
