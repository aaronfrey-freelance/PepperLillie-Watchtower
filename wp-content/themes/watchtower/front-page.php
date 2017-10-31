<?php while (have_posts()) : the_post(); ?>

	<div class="callout-container">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/front-page.jpg" class="full-width img-responsive">
		<div class="main-callout text-center">
			<div class="border">
				<h1>Live &amp; Work Better Here.</h1>
				<p>Responsive, friendly and thorough residential, commercial, healthcare and municipal property services in the Philadelphia Area.</p>
				<a href="#" class="btn btn-primary">Apply Today</a>
				<a href="#" class="btn btn-primary">Resident Services</a>
				<a href="#" class="btn btn-primary">Schedule Your Tour</a>
			</div>
		</div>
		<div class="clearfix">
			<a href="#" class="resident-link">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/residential.png">
				<div class="border">
					<div class="center-parent">
						<div class="center-child">
							<h1>
								<img src="<?php bloginfo('template_directory'); ?>/dist/images/arrow-left.png">Residential
							</h1>
							<p>Click here to access housing and apartment services</p>
						</div>
					</div>
				</div>
			</a>
			<a href="#" class="resident-link right">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/commercial.png">
				<div class="border">
					<div class="center-parent">
						<div class="center-child">
							<h1>
								Commercial<img src="<?php bloginfo('template_directory'); ?>/dist/images/arrow-right.png">
							</h1>
							<p>Click here to access commercial tenant services</p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>

	<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>