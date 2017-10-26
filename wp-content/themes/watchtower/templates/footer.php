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

<!-- <footer class="content-info">
  <div class="container"></div>
</footer> -->