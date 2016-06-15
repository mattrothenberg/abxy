<?php while (have_posts()) : the_post(); ?>
  <div class="floating-panel atelier-panel rellax" data-rellax-speed="1"></div>
  <div class="row">
    <div class="col-xs-12 col-sm-5 col-sm-push-7 sm-top-offset-75 atelier-content">
      <h1><?php the_title(); ?></h1>
      <?php get_template_part('templates/content', 'page'); ?>
    </div>
    <div class="col-xs-12 col-sm-7 col-sm-pull-5">
      <div class="carousel">
        <?php if( have_rows('carousel') ): while ( have_rows('carousel') ) : the_row(); ?>
          <div class="carousel-slide">
            <?php $image = get_sub_field('carousel_image');
            if( !empty($image) ): ?>
            	<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
            <!-- <em class="em-subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</em> -->
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h1>The Artists</h1>
    </div>
  </div>
  <?php if( have_rows('artists') ): while ( have_rows('artists') ) : the_row(); ?>
    <section class="artist-box">
      <div class="row artist-row">
        <?php $image = get_sub_field('artist_photo');
        if( !empty($image) ): ?>
          <div class="artist-image">
            <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        <?php endif; ?>
        <div class="artist-bio">
          <h2><?php the_sub_field('artist_name'); ?></h2>
          <p><?php the_sub_field('artist_bio'); ?></p>
          <button class="btn btn-small btn-transparent" href="#">Download Artist's Press Pack</button>
        </div>
      </div>
    </section>
  <?php endwhile; endif; ?>
<?php endwhile; ?>
