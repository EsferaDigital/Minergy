<?php get_header();?>
<main class="Main">
  <div class="buscador">
    <?php get_search_form();?>
  </div>
  <article class="Post">
    <div class="Post-img">
      <?php the_post_thumbnail('blog');?>
    </div>
    <div class="Post-content">
      <h2 class="Post-titulo">
        <?php the_title(); ?>
      </h2>
      <div class="Post-organizador">
        <h3>Organiza: <?php the_field('organizacion');?></h3>
      </div>
      <div class="Post-tipo">
        <h3>Tipo(s) de Iniciativa:</h3>
        <p><?php the_field('tipo');?></p>
      </div>
      <div class="Post-bloques">
        <?php the_content();?>
      </div>
      <div class="Post-footer">
        <div class="Post-footer-autor">
          <h4><a href="https://minergyconnect.pe/user/<?php the_author(); ?>"><?php the_author(); ?></a></h4>
        </div>
        <div class="Post-footer-date">
          <?php the_date(); ?>
        </div>
      </div>
    </div>
  </article>
</main>
<?php get_footer();?>