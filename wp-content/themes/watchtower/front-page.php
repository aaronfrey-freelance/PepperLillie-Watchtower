<?php while (have_posts()) : the_post(); ?>

	<div class="callout-container">
		<img src="<?php bloginfo('template_directory'); ?>/dist/images/front-page.jpg" class="full-width img-responsive">
		<div class="absolute-fill">
			<div class="center-parent">
				<div class="center-child">
					<div class="main-callout text-center clearfix">
						<div class="border">
							<h1>Live &amp; Work Better Here.</h1>
							<p>Responsive, friendly and thorough residential, commercial, healthcare and municipal property services in the Philadelphia Area.</p>
							<a href="https://properties-resi-life.securecafe.com/onlineleasing/residential-life/floorplans.aspx" target="_blank" class="btn btn-primary">Apply Today</a>
							<a href="https://properties-resi-life.securecafe.com/residentservices/apartmentsforrent/userlogin.aspx" target="_blank" class="btn btn-primary">Resident Services</a>
							<a href="https://showmojo.com/ba126fc0e6/listings/mapsearch?cities=Philadelphia%2C+PA&zips=&bedrooms=&rent" target="_blank" class="btn btn-primary">Schedule Your Tour</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix">

		<a href="<?php echo site_url('residential'); ?>" class="resident-link">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/residential.png">
			<div class="border absolute-fill">
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

		<a href="<?php echo site_url('commercial'); ?>" class="resident-link right">
			<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/commercial.png">
			<div class="border absolute-fill">
				<div class="center-parent text-right">
					<div class="center-child">
						<h1>
							Commercial<img src="<?php bloginfo('template_directory'); ?>/dist/images/arrow-right.png">
						</h1>
						<p>Click here to access commercial tenant services</p>
					</div>
				</div>
			</div>
		</a>

	</div><!-- .clearfix -->

	<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>