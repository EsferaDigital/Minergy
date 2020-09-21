<?php
// Archivo principal
get_header(); ?>
<main class="Main contenedor">
  <?php while(have_posts()): the_post();
      the_content();
    endwhile;
  ?>
</main>
<?php get_footer();