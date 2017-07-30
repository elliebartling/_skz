<article <?php post_class(); ?>>
  <header>
    <?php if(has_post_thumbnail()): ?>
        <div class="entry-image">
          <a href="<?php echo get_field('amazon_url'); ?>">
          <?php the_post_thumbnail(); ?>
          </a>
        </div>
      <?php endif; ?>
      <?php if(is_archive()): ?>
        <header id="entry-header">
          <h1 class="entry-title"><a href="<?php echo get_field('amazon_url') ?>"><?php echo get_the_title() ?></a></h1>
          <?php if(get_field('author')): ?>
            <div class="entry-author">
              <p class="byline author vcard">
                by <a href="<?php echo get_field('amazon_url') ?>" rel="author" class="fn">
                  <?php echo get_field('author') ?>
                </a>
              </p>
            </div>
          <?php endif; ?>
        </header>
      <?php endif; ?>
</article>
