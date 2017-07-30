<article <?php post_class('featured'); ?>>
  <div class="entry-image col col-md-9">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="entry-content">
    <?php get_template_part('partials/entry-meta'); ?>
    <h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <?php get_template_part('partials/entry-author'); ?>
  </div>
</article>
