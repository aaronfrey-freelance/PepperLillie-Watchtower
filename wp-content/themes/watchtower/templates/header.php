<header class="banner">
  <div class="container-fluid">

    <a href="#mobile-menu" id="toggle-mobile-menu" class="toggle-mobile-menu">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>

    <div id="mobile-menu" class="mobile-menu">
      <ul>
        <?php
        if (has_nav_menu('primary_navigation_left')) :
          wp_nav_menu(['theme_location' => 'primary_navigation_left', 'menu_class' => 'nav left flex-container', 'items_wrap' => '%3$s']);
        endif;
        if (has_nav_menu('primary_navigation_right')) :
          wp_nav_menu(['theme_location' => 'primary_navigation_right', 'menu_class' => 'nav right flex-container', 'items_wrap' => '%3$s']);
        endif;
        ?>
      </ul>
    </div>

    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation_left')) :
        wp_nav_menu(['theme_location' => 'primary_navigation_left', 'menu_class' => 'nav left flex-container']);
      endif;
      ?>
    </nav>

    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
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