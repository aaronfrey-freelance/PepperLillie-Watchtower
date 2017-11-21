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
      $has_post_thumbnail = has_post_thumbnail();
    ?>

    <!-- If this is the default page layout -->
    <?php if (!is_page_template()) : ?>
      <!-- If there is a featured image -->
      <?php if ($has_post_thumbnail) : ?>
        <?php $banner_image = get_the_post_thumbnail_url($post_id, 'full'); ?>
        <!-- Display the featured image as a full width banner -->
        <div class="banner-image" style="background-image: url(<?php echo $banner_image; ?>);"></div>
      <?php endif; ?>
    <?php endif; ?>

    <div class="wrap container-fluid <?php echo $has_post_thumbnail ? 'has-thumbnail' : ''; ?>" role="document">

      <?php if (!is_front_page()) : ?>

        <?php if (!is_page_template('template-sidebar.php')) : ?>
          <div class="row">
            <?php get_template_part('templates/page', 'header'); ?>
          </div>
        <?php else : ?>

          <div class="row">
            <div class="jumbo-image">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
              <?php else : ?>
                <img src="http://via.placeholder.com/1200x225" class="img-responsive">
              <?php endif; ?>
              <?php get_template_part('templates/page', 'header'); ?>
            </div>
          </div>

        <?php endif; ?>

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
