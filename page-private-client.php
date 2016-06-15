<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel private-panel rellax" data-rellax-speed="1"></div>
  <div class="row">
    <div class="col-xs-12 col-sm-5 sm-top-offset-75">
      <h1 class="heading-sm-right"><?php the_title(); ?></h1>
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
    <div class="col-xs-12 col-sm-7">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
      } ?>
    </div>
  </div>
<?php endwhile; ?>
