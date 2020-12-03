<?php

function minergy_lista_iniciativas(){ ?>
  <ul class="listado-blog">
    <?php
      $args = array(
        'post_type' => 'minergy_iniciativas',
        'posts_per_page' => 10
      );
      $iniciativas = new WP_Query($args);
      while($iniciativas->have_posts()): $iniciativas->the_post();
    ?>
    <li class="PostCard">
      <h3 class="PostCard-titulo">
        <?php the_title(); ?>
      </h3>
      <div class="PostCard-img">
        <?php the_post_thumbnail('card');?>
      </div>
      <div class="PostCard-extracto">
        <?php the_excerpt();?>
      </div>
      <div class="PostCard-autor">
        <h4>Autor: <a href="https://minergyconnect.pe/user/<?php the_author(); ?>"><?php the_author(); ?></a></h4>
      </div>
      <div class="PostCard-link">
        <a href="<?php the_permalink(); ?>">
          VER <span>+</span>
        </a>
      </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
  </ul>
<?php
}