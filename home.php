<?php
  $args = array(
    'posts_per_page' => 5,
  );

  $featured = new WP_Query($args);

  $args = array(
    'posts_per_page' => 7,
    'post_type' => 'book'
  );

  $books = new WP_Query($args);

 ?>


<section id="posts" class="section row">
  <div class="main col-12 col-lg-9">
    <?php if(!$featured->have_posts()) { ?>
      <div class="alert alert-warning">
        Sorry, no results were found.
      </div>
    <?php } ?>

    <?php while ($featured->have_posts() && $featured->current_post < 0) : ($featured->the_post()) ?>
      <div class="featured-header">
        <?php get_template_part('templates/content-featured'); ?>
      </div>
    <?php endwhile; ?>
      <div class="latest">
        <div class="section-title-wrap">
          <h1 class="section-title" id="latest-title">Latest</h1>
        </div>
        <div class="latest-container">
          <?php while ($featured->have_posts()) : ($featured->the_post());
            get_template_part('templates/content');
            endwhile;
          ?>
          <a href="" class="btn btn-outline btn-info see-more-btn">see more</a>
        </div>
      </div>
  </div>
  <?php get_template_part('templates/sidebar-editorspick'); ?>
</section>

<section id="books" class="">
  <div class="section-title-wrap books-title-wrap row">
    <h1 class="section-title" id="books-title">Bookshelf</h1>
  </div>
  <div class="carousel row">
    <?php while ($books->have_posts()) : ($books->the_post()); ?>
        <?php get_template_part('templates/content-book'); ?>
    <?php endwhile; ?>
  </div>
</section>
<aside id="subscribe">
  <h2>Skepticism in your inbox</h2>
  <?php dynamic_sidebar('sidebar-home'); ?>
</aside>
