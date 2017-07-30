<article <?php post_class(); ?>>
  <header>

    <?php if(has_post_thumbnail()) {
      echo '<div class="entry-image">';
      the_post_thumbnail();
      echo '</div>';
      } ?>

    <h2 class="entry-title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
    <?php get_template_part('partials/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
