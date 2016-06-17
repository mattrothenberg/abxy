<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-sm-8 col-centered">
      <article <?php post_class(); ?>>
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="article-meta">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
        </header>
        <hr>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
      </article>
    </div>
  </div>
<?php endwhile; ?>
