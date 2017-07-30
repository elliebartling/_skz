<aside class="col-12 col-lg-3" id="sidebar-editors-picks">
  <div class="sidebar-item advertisements">
    <p class="advertisement-title">Advertisement</p>
    <div class="advertisement">
      <img src="http://via.placeholder.com/300x600">
    </div>
  </div>
  <div class="sidebar-item books">
    <h2>Editor's Picks</h2>
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'tag' => 'editors-pick'
      );

      $picks = new WP_Query($args);
    ?>
    <div class="picks">
      <?php while ($picks->have_posts()) : ($picks->the_post()); ?>
        <div class="pick">
          <a class="content-link" target="_blank" href="<?php echo the_permalink(); ?>">
            <h4 class="pick-title"><?php echo get_the_title(); ?></h4>
          </a>
          <?php echo the_excerpt(); ?>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</aside>
