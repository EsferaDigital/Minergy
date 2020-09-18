<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php minergy_custom_meta_description(); ?>">
  <?php wp_head();?>
</head>
<body <?php body_class(''); ?>>
  <header class="site-header">
    <div class="contenedor">
      <div class="barra-navegacion">
        <?php
          get_template_part('template-parts/header-logo');
          get_template_part('template-parts/header-menu');
        ?>
      </div>
    </div>
  </header>
