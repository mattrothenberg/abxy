<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel atelier-panel rellax" data-rellax-speed="1"></div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-push-6 sm-top-offset-75">
      <h1><?php the_title(); ?></h1>
      <div class="lead">
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-pull-6">
      <img class="img-responsive" src="http://placekitten.com/700/500" alt="" />
      <em class="em-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</em>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h1>The Artists</h1>
    </div>
  </div>

  <div class="row artist-row">
    <div class="artist-image">
      <img class="img-responsive" src="http://placekitten.com/700/500" alt="" />
    </div>
    <div class="artist-bio">
      <h2>Artist Name</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <button class="btn btn-small btn-transparent" href="#">Download Artist's Press Pack</button>
    </div>
  </div>
  <hr>
  <div class="row artist-row">
    <div class="artist-image">
      <img class="img-responsive" src="http://placekitten.com/700/500" alt="" />
    </div>
    <div class="artist-bio">
      <h2>Artist Name</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <button class="btn btn-small btn-transparent" href="#">Download Artist's Press Pack</button>
    </div>
  </div>

  <hr>
<?php endwhile; ?>
