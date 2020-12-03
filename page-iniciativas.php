<?php get_header();?>
  <main class="Main">
    <h3 class="titulo-pagina">
      <?php the_title(); ?>
    </h3>
    <div class="buscador">
      <?php get_search_form();?>
    </div>
    <?php minergy_lista_iniciativas(); ?>
  </main>
<?php get_footer(); ?>