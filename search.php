<?php get_header();?>
  <main class="Main">
    <div class="Header-blog contenedor">
      <h3 class="titulo-blog">
        Resultado:
      </h3>
      <div class="buscador">
        <?php echo do_shortcode( '[searchandfilter fields="search,post_date" types=",daterange" search_placeholder="Palabra clave" submit_label="Buscar"]' ); ?>
      </div>
    </div>
    <ul class="listado-blog">
      <?php
        if(have_posts()): while(have_posts()): the_post();
          get_template_part('template-parts/content-main');
        endwhile; else:
          get_template_part('template-parts/content-none');
        endif;
      ?>
    </ul>
    <?php get_template_part('template-parts/pagination'); ?>
  </main>
<?php get_footer(); ?>