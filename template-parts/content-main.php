<li class="Post">
  <div class="PostCard">
    <div class="PostCard-img">
      <?php the_post_thumbnail('card');?>
    </div>
    <h3 class="PostCard-titulo">
      <?php the_title(); ?>
    </h3>
  </div>
  <div class="Post-link">
    <a href="<?php the_permalink(); ?>">
      VER MÁS
    </a>
  </div>
</li>