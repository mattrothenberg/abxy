<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel contact-panel rellax" data-rellax-speed="1"></div>
  <div class="row contact-page-content">
    <div class="col-xs-12 col-sm-3 col-sm-offset-2">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
      } ?>
    </div>
  </div>
<?php endwhile; ?>
