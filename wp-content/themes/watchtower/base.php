<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="wrap container-fluid" role="document">

      <?php if (!is_page_template()) : ?>
        <div class="row">
          <?php get_template_part('templates/page', 'header'); ?>
        </div>
      <?php endif; ?>

      <?php if (is_page_template('template-sidebar.php')) : ?>
        <div class="row">
          <div class="jumbo-image">
            <img src="http://via.placeholder.com/1200x225" class="img-responsive">
            <?php get_template_part('templates/page', 'header'); ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="content row">

        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->

        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>

      </div><!-- /.content -->

    </div><!-- /.wrap -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

  </body>
</html>
