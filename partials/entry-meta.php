<div class="entry-meta">
  <time class="updated" datetime="<?php echo get_post_time('c', true); ?>"><?php echo get_the_date(); ?></time>
  <?php if (get_the_tags()) {
      $tag = get_the_tags()[0];
    } ?>

    | <a href="<?php echo get_tag_link($tag->term_id); ?>"><span class="tags"><?php echo $tag->name; ?></span></a>
</div>
