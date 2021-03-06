

<div class="page-header">
  <h1>Bookshelf</h1>
</div>

<?php if (!have_posts()) { ?>
  <div class="row">
    <div class="col">
    <div class="alert alert-warning">
      Sorry, no results were found.
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
    <?= get_search_form(false) ?>
  </div>
  </div>
<?php } ?>

<div class="row">
<?php
  while ( have_posts() ) : the_post();
    get_template_part('templates/content-book');
  endwhile;
?>
</div>
