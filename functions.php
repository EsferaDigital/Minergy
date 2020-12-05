<?php
/*
* My hub Theme Functions and Definitions
*
*@link https://developer.wordpress.org(themes/basic/theme-functions)
*
*@package wordpress
*@subpackage hub
*@since 1.0.0
*@version 1.2.0
*/

//Establecer el ancho máximo permitido para cualquier contenido en el tema, como por ejemplo, embeds e imágenes.
if(!isset($content_width)){
  $content_width = 1600;
}

//Establecer variables globales y asignar un valor a esas variables

global $font_awesome;
// global $Jquery;
// global $slicknavCSS;
// global $slicknavJS;

$font_awesome = 'https://use.fontawesome.com/releases/v5.7.2/css/all.css';
// $Jquery = 'https://code.jquery.com/jquery-3.4.1.min.js';




// declaramos, registramos y cargamos los css y js
if(!function_exists('minergy_scripts')):
  function minergy_scripts() {
    // Declaramos variables
    global $font_awesome;
    // global $Jquery;

    // $sweet = 'https://cdn.jsdelivr.net/npm/sweetalert2@8';
    $style = get_stylesheet_uri();

    // Registramos los archivos css

    wp_enqueue_style('iconos', $font_awesome, array(), '5.7.2', 'all' );
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Lato&display=swap', array(), '1.0.0');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
    wp_enqueue_style('style', $style, array('normalize', 'googleFonts'), fileatime(get_template_directory() . '/style.css'), 'all');

    // Registramos los archivos js

    // wp_register_script('Jquery', $Jquery, array(), '3.4.1', true);
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('particlesJS', 'https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js', array(), '2.0.0', true);
    wp_enqueue_script('globaljs', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS', 'particlesJS'), fileatime(get_template_directory() . '/js/scripts.js'), true);

  }
endif;
add_action( 'wp_enqueue_scripts', 'minergy_scripts' );

//Creamos Menús
if(!function_exists('minergy_menus')):
  function minergy_menus() {
    register_nav_menus(array(
      'menu_principal' => __('Menú Principal', 'minergy'),
      'menu_secundario' => __('Menú Secundario', 'minergy'),
    ));
  }
endif;
add_action( 'init', 'minergy_menus' );

// Creamos Widgets
if(!function_exists('minergy_register_sidebars')):
  function minergy_register_sidebars() {

    register_sidebar(array(
      'name' => __('Sidebar Principal', 'minergy'),
      'id' => 'sidebar_main',
      'description' => __('Este es el sidebar principal y aparecerá al lado del contenido principal.', 'minergy'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna I', 'qtr'),
    //   'id' => 'footer_uno',
    //   'description' => __('Columna uno del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna II', 'qtr'),
    //   'id' => 'footer_dos',
    //   'description' => __('Columna dos del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna III', 'qtr'),
    //   'id' => 'footer_tres',
    //   'description' => __('Columna tres del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));
  }
endif;
add_action('widgets_init', 'minergy_register_sidebars');

// Añadimos soportes básicos
if(!function_exists('minergy_setup')):
  function minergy_setup() {
    // soporte a imagen destacada
    add_theme_support('post-thumbnails');

    // Agregamos imagenes de tamaño personalizado
    add_image_size('blog', 1600, 400, true);
    add_image_size('card', 500, 170, true);

    //soporte a etiquetas semánticas de html5
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

    // soporte a formatos de entrada
    add_theme_support('post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ));

    // Soporte a colores para editor gutenberg
    add_theme_support('editor-color-palette', array(
      array(
        'name' => __('Calipso', 'minergy'),
        'slug' => 'calipso',
        'color' => '#009b96',
      ),
      array(
        'name' => __('Calipso claro', 'minergy'),
        'slug' => 'calipso-claro',
        'color' => '#54aa9e',
      ),
      array(
        'name' => __('Amarillo', 'minergy'),
        'slug' => 'amarillo',
        'color' => '#ebb000',
      ),
      array(
        'name' => __('Gris', 'minergy'),
        'slug' => 'gris',
        'color' => '#605f5f',
      ),
      array(
        'name' => __('Blanco', 'minergy'),
        'slug' => 'blanco',
        'color' => '#ffffff',
      ),
    ));

    //Soporte a títulos dinámicos de páginas del sitio (para el SEO)
    add_theme_support('title-tag');

    //Soporte para que añada meta que permite interactuar con lectores RSS
    add_theme_support('automatic-feed-links');

    // Remueve meta etiqueta que muestra la versión de wordpress que usamos
    remove_action('wp_head', 'wp_generator');
  }
endif;
add_action('after_setup_theme', 'minergy_setup');

// Soportes adicionales
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/custom-excerpt.php';
require get_template_directory() . '/inc/custom-description.php';

// Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

