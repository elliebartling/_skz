<aside class="col-12 col-lg-3" id="sidebar-editors-picks">
  <div style="width:300px" class="sidebar-item advertisements">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 600x300 ad -->
    <p class="advertisement-title">Advertisement</p>
    <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:600px"
         data-ad-client="ca-pub-7264352120103797"
         data-ad-slot="7421283897"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
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
