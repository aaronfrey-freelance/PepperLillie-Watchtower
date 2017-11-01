<div class="social-container">

	<div class="social">
		<?php $facebook_account = get_field('facebook_account', 'option');
		if ($facebook_account) : ?>
			<a href="<?php echo $facebook_account; ?>" target="_blank">
				<i class="fa fa-facebook"></i>
			</a>
		<?php endif; ?>
		<?php $instagram_account = get_field('instagram_account', 'option');
		if ($instagram_account) : ?>
			<a href="<?php echo $instagram_account; ?>" target="_blank">
				<i class="fa fa-instagram"></i>		
			</a>
		<?php endif; ?>
		<?php $twitter_account = get_field('twitter_account', 'option');
		if ($twitter_account) : ?>
			<a href="<?php echo $twitter_account; ?>" target="_blank">
				<i class="fa fa-twitter"></i>		
			</a>
		<?php endif; ?>
	</div>

</div>

<footer class="content-info">

  <div class="footer-contact clearfix">
  	
  	<a class="brand pull-left hidden-sm hidden-xs" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.svg" class="img-responsive">
    </a>

		<div class="contact-info-container">

  		<div class="center-parent clearfix">

	  		<div class="center-child first">
	  			<div class="content-center">
		  			FMC Tower<br>
						2929 Walnut Street<br>
						Suite 1540<br>
						Philadelphia PA 19104
					</div>
	  		</div>

	  		<div class="center-child middle">
	  			Contact Us<br>
					<a href="mailto:info@wtprops.com">info@wtprops.com</a><br>
					<a href="tel:2155082210">215.508.2210</a>
	  		</div>

	  		<div class="center-child clearfix">
	  			<a href="https://properties-resi-life.securecafe.com/onlineleasing/residential-life/floorplans.aspx" target="_blank" class="btn btn-primary">Apply Today</a>
	  			<a href="https://properties-resi-life.securecafe.com/residentservices/apartmentsforrent/userlogin.aspx" target="_blank" class="btn btn-primary">Residential Services</a>
	  		</div>

  		</div>

			<div class="copywrite">
	  		Watchtower Property Co. &copy; Copyright <?php echo date('Y'); ?> All Rights Reserved.
	  	</div>

  	</div>

  </div>

</footer>