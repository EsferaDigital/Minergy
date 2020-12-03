<div class="logo">
  <?php
    if(has_custom_logo()):
      the_custom_logo();
    else:
  ?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="<?php bloginfo('name'); ?>">
    </a>
  <?php endif; ?>
</div>