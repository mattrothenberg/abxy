<div class="splash">
  <div class="splash-inner">
    <img class="img-responsive splash-logo" src="<?php echo get_template_directory_uri() . '/assets/images/abxy-logo.jpg' ?>" alt="">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'splash-navigation']);
    endif;
    ?>
  </div>
</div>
