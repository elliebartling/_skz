<?php while (have_posts()) : the_post(); ?>
  <div class="main">
    <div class="col">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="page-header" id="contributors">
      <h1>Contributors</h1>
    </div>
    <div class="contributors-wrap">
      <?php
        $contributors = get_field('contributors');
      ?>
      <?php foreach ($contributors as $c): ?>
        <div class="contributor">
          <div class="image">
            <?php echo $c['user_avatar'] ?>
          </div>
          <div class="details-wrapper">
            <h1><a href="/author/<?php echo $c['user_nicename']; ?>"><?php echo $c['user_firstname']; ?> <?php echo $c['user_lastname']; ?></a></h1>
            <p><?php echo $c['user_description']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="page-header donate-widget" id="support">
      <?php dynamic_sidebar('sidebar-page-footer'); ?>
    </div>
    </div>
  </div>
<?php endwhile; ?>
