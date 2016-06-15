<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel about-panel rellax" data-rellax-speed="1"></div>
  <div class="row">

    <div class="col-xs-12 col-sm-7 sm-top-offset-small mbxl">
      <h1><?php the_title(); ?></h1>
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
      } ?>
    </div>
    <div class="col-xs-12 col-sm-5">
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
  </div>
<?php endwhile; ?>
