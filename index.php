<?php if(is_author()) {
  get_template_part('templates/author-header');
} else {
  get_template_part('templates/page-header');
} ?>


<?php if (!have_posts()) : ?>
  <div class="no-posts">
    <div class="page-header">
      <h1>Sorry!</h1>
      <p>We couldn't find any results for <strong><?php echo get_search_query(); ?> </strong>.</p>
    </div>
    <div class="search-box">
      <h2 class="try-again">Try again?</h2>
      <?php echo get_search_form(false); ?>
    </div>
  </div>
<?php endif; ?>

<div class="row">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>
</div>
<?php the_posts_navigation(); ?>
