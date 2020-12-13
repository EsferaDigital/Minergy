<article class="PostSingle">
  <div class="PostSingle-img">
    <?php the_post_thumbnail('blog');?>
  </div>
  <h3 class="PostSingle-titulo">
    <?php the_title(); ?>
</h3>
  <div class="PostSingle-bloques">
    <?php the_content();?>
  </div>
</article>