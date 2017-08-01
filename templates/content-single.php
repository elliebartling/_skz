<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header id="entry-header">
      <?php get_template_part('partials/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('partials/entry-author'); ?>
      <?php if(has_post_thumbnail()): ?>
        <div class="entry-image">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
    </header>
    <div class="social-suggestions">
      <h5>Share</h5>
      <?php if(get_field('first_social')): ?>
        <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()) ?>&text=<?php echo urlencode(get_field('first_social'))?>"><i class="fa fa-twitter"></i><?= get_field('first_social') ?></a>
      <?php endif; ?>
      <?php if(get_field('second_social')): ?>
        <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()) ?>&text=<?php echo urlencode(get_field('second_social'))?>"><i class="fa fa-twitter"></i><?= get_field('second_social') ?></a>
      <?php endif; ?>
      <?php if(get_field('third_social')): ?>
        <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_the_permalink()) ?>&text=<?php echo urlencode(get_field('third_social'))?>"><i class="fa fa-twitter"></i><?= get_field('third_social') ?></a>
      <?php endif; ?>
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
