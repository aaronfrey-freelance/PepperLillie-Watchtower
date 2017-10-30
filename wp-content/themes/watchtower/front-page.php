<?php while (have_posts()) : the_post(); ?>

	<div class="callout-container text-center">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/front-page.jpg" class="full-width img-responsive">
		<div class="main-callout">
			<div class="border">
				<h1>Live &amp; Work Better Here.</h1>
				<p>Responsive, friendly and thorough residential, commercial, healthcare and municipal property services in the Philadelphia Area.</p>
				<a href="#" class="btn btn-primary">Apply Today</a>
				<a href="#" class="btn btn-primary">Resident Services</a>
				<a href="#" class="btn btn-primary">Schedule Your Tour</a>
			</div>
		</div>
	</div>

	<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>