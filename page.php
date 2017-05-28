<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-12 col-sm-5">
      <h1 class="text-center content-heading"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-5">
      <div class="text-justify">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-1">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('full', array( 'class' => 'img-responsive' ));
      } ?>
    </div>
  </div>
<?php endwhile; ?>
