<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header id="entry-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('partials/entry-meta'); ?>
    </header>
    <div class="entry-image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer class="entry-footer">
    <div class="skeptical-divider">
      <img src="<?php echo asset_path('images/logo.png'); ?>" />
    </div>
    <?php dynamic_sidebar('sidebar-article-footer'); ?>
  </footer>

</article>
<aside id="sidebar">
  <h2 class="sidebar-title">Bookshelf</h2>
  <?php get_template_part('templates/sidebar-books'); ?>
  <?php dynamic_sidebar('sidebar-primary'); ?>
</aside>

<?php endwhile; ?>
