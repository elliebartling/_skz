<header id="header">
  <div class="nav container">
    <a class="brand" href="<?php home_url('/'); ?>">
        <img src="<?php asset_path('images/logo.png'); ?>">
        <span class="title">The Skeptical Libertarian</span>
    </a>
    <nav class="nav-primary">
      <?php if (has_nav_menu('primary_navigation')) {
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      } ?>
    </nav>
    <nav class="nav-secondary">
      <?php get_template_part('partials/sidebar-top-right-nav'); ?>
      <button class="open-search"><i class="fa fa-search"></i></button>
      <div class="vertical-line"></div>
      <a href="/donate" class="btn btn-info">support</a>
    </nav>
  </div>
</header>
