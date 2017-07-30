<div class="sidebar-books">
  <h2></h2>
  <?php
    $args = array(
      'post_type' => 'book',
      'orderby'   => 'rand',
      'posts_per_page' => 3,
    );

    $books = new WP_Query($args);
  ?>
  <div class="">
    <?php while ($books->have_posts()) : ($books->the_post()); ?>
      <div class="book">
        <a class="image-link" target="_blank" href="<?php echo get_field('amazon_url'); ?>">
          <?php echo the_post_thumbnail(); ?>
        </a>
        <a class="content-link" target="_blank" href="<?php echo get_field('amazon_url'); ?>">
          <h4 class="book-title"><?php echo get_the_title(); ?></h4>
          <p class="book-author"><?php echo get_field('author'); ?></p>
          <div class="book-banner"><i class="fa fa-amazon"></i>buy&nbsp;on&nbsp;amazon</div>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="sidebar-item advertisements">
    <p class="advertisement-title">Advertisement</p>
    <div class="advertisement">
      <img src="http://via.placeholder.com/300x600">
    </div>
  </div>
</div>
