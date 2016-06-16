<article <?php post_class(); ?>>
  <div class="row">
    <div class="col-sm-6 col-centered">
      <header>
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="article-meta">
          <?php get_template_part('templates/entry-meta'); ?>
        </div>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
</article>
