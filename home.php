<?php get_header();?>
  <main class="Main">
    <h3 class="titulo-pagina">
      <?php the_title(); ?>
    </h3>
    <div class="buscador">
      <?php get_search_form();?>
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