<?php get_header();?>
<main class="Main">
  <div class="Header-blog contenedor">
    <h3 class="titulo-blog">
      Novedades:
    </h3>
    <div class="buscador">
      <?php echo do_shortcode( '[searchandfilter fields="search,post_date" types=",daterange" search_placeholder="Palabra clave" submit_label="Buscar"]' ); ?>
    </div>
  </div>
  <?php
    if(have_posts()): while(have_posts()): the_post();
      get_template_part('template-parts/content-single');
    endwhile; else:
      get_template_part('template-parts/content-none');
    endif;
  ?>
</main>
<span class="contenedor linea-fondo"></span>
<?php get_footer();?>