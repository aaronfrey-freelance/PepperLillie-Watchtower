<?php use Roots\Sage\Titles; ?>

<div class="page-header">

<?php if (is_page_template('template-content-right.php')) : ?>
  <div class="col-sm-6 col-sm-offset-6">
    <h1><?= Titles\title(); ?></h1>
  </div>
<?php else : ?>
	<h1><?= Titles\title(); ?></h1>
<?php endif; ?>

</div>
