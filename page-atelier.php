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
      <div class="carousel">
        <?php if( have_rows('carousel') ): while ( have_rows('carousel') ) : the_row(); ?>
          <div class="carousel-slide">
            <?php $image = get_sub_field('carousel_image');
            if( !empty($image) ): ?>
            	<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1 class="content-heading add-top-marg">
        The Artists
      </h1>
      <p>PDFs available for download</p>
    </div>
  </div>
  <?php if( have_rows('artists') ): while ( have_rows('artists') ) : the_row(); ?>
    <div class="row">
      <div class="col-sm-12 text-center">
        <a href="<?php the_sub_field('artist_press_pack'); ?>" target="_blank" class="artist-link"><?php the_sub_field('artist_name'); ?></a>
      </div>
    </div>
  <?php endwhile; endif; ?>
<?php endwhile; ?>
