<?php

// Personalización del header
if(!function_exists('minergy_custom_header')):
  function minergy_custom_header() {
    // Logo
    add_theme_support('custom-logo', array(
      'height' => 100,
      'width' => 100,
      'flex-height' => true,
      'flex-width' => true
    ));
    
    //Para que el usuario vea en tiempo real los cambios que realice desde el personalizador
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;

add_action('after_setup_theme', 'minergy_custom_header');
