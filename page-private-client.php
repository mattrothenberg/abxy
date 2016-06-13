<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel private-panel rellax" data-rellax-speed="1"></div>
  <div class="row">
    <div class="col-xs-12 col-sm-5 sm-top-offset-75">
      <h1 class="text-right"><?php the_title(); ?></h1>
      <div class="lead">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-7">
      <img class="img-responsive" src="http://placekitten.com/700/500" alt="" />
      <em class="em-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</em>
    </div>
  </div>
<?php endwhile; ?>
