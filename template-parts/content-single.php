<article class="Post">
  <div class="Post-img">
    <?php the_post_thumbnail('blog');?>
  </div>
  <div class="Post-content">
    <h2 class="Post-titulo">
      <?php the_title(); ?>
    </h2>
    <div class="Post-bloques">
      <?php the_content();?>
    </div>
    <div class="Post-footer">
      <div class="Post-footer-category">
        <i class="far fa-bookmark"></i>
        <?php the_category( ' ' ); ?>
      </div>
      <div class="Post-footer-tags">
        <p><?php the_tags('<i class="fas fa-tags"></i>', ' - ',''); ?></p>
      </div>
      <div class="Post-footer-date">
        <?php the_date(); ?>
      </div>
      <div class="Post-footer-autor">
        <h4><a href="https://minergyconnect.pe/user/<?php the_author(); ?>"><?php the_author(); ?></a></h4>
      </div>
    </div>
  </div>
</article>