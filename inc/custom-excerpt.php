<?php

// Para modificar el extracto
if(!function_exists('minergy_excerpt_more')):
  function qtr_excerpt_more() {
    return '<a href="' . get_permalink() . '">' . __(' leer más', 'minergy') . '<i class="fab fa-readme"></i></a>';
  }
endif;
add_filter( 'excerpt_more', 'minergy_excerpt_more' );

if(!function_exists('minergy_excerpt_length')):
  function qtr_excerpt_length() {
    return 40;
  }
endif;
add_filter( 'excerpt_length', 'minergy_excerpt_length' );
