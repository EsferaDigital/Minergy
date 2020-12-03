<?php get_header();?>
<main class="Main">
  <h2 class="titulo-pagina">
  <?php the_title(); ?>
  </h2>
  <div class="buscador">
    <?php get_search_form();?>
  </div>
  <?php
    if(have_posts()): while(have_posts()): the_post();
      get_template_part('template-parts/content-single');
    endwhile; else:
      get_template_part('template-parts/content-none');
    endif;
  ?>
</main>
<?php get_footer();?>