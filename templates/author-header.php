<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <div class="image-wrapper">
    <?php echo profile_photo(); ?>
  </div>
  <div class="details-wrapper">
    <h1><?= Titles\title(); ?></h1>
    <p><?= get_the_author_meta('description'); ?></p>
  </div>
</div>
