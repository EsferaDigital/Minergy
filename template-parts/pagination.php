<?php if(get_next_post_link() || get_preview_post_link()): ?>
  <div class="Pagination">
    <nav class="Pagination-nav">
      <?php
        echo paginate_links(array(
          'prev_text' => __('<span>&laquo; Anteriores</span>', 'minergy'),
          'next_text' => __('<span>Siguientes &raquo;</span>', 'minergy')
        ));
      ?>
    </nav>
  </div>
<?php endif; ?>