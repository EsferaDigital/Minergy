<?php if(get_next_post_link() || get_preview_post_link()): ?>
  <div class="Pagination">
    <nav class="Pagination-nav">
      <?php previous_posts_link('<p>Anterior</p><i class="fas fa-caret-left"></i>');?>
      <?php next_posts_link('<i class="fas fa-caret-right"></i><p>Siguiente</p>');?>
    </nav>
  </div>
<?php endif; ?>