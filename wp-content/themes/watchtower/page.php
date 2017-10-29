<?php while (have_posts()) : the_post(); ?>

	<?php if (has_post_thumbnail()) : ?>

		<div class="col-md-6">
			<?php echo get_the_post_thumbnail($post_id, 'full', ['class' => 'img-responsive']); ?>
		</div>

		<div class="col-md-6">
			<br>
			<div class="padding-left">
				<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>

	<?php else : ?>
		<div class="col-md-12">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	<?php endif; ?>

<?php endwhile; ?>
