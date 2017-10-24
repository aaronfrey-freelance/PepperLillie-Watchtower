<header class="banner">
  <div class="container-fluid">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation_left')) :
        wp_nav_menu(['theme_location' => 'primary_navigation_left', 'menu_class' => 'nav left flex-container']);
      endif;
      ?>
    </nav>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.svg">
    </a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation_right')) :
        wp_nav_menu(['theme_location' => 'primary_navigation_right', 'menu_class' => 'nav right flex-container']);
      endif;
      ?>
    </nav>
  </div>
</header>
