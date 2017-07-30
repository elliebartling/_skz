<?php while (have_posts()) : the_post(); ?>
  <div class="main">
    <div class="col">
    <?php get_template_part('templates/content', 'page'); ?>
    </div>
  </div>
<?php endwhile; ?>
