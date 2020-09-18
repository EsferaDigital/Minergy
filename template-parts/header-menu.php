<section class="Panel">
  <?php
  if(has_nav_menu('menu_principal')):
    wp_nav_menu(array(
      'theme_location' => 'menu_principal',
      'container' => 'nav',
      'container_id' => 'Menu',
      'container_class' => 'menu-principal'
    ));
  else:
  ?>
    <nav class="menu-principal">
      <ul>
        <?php wp_list_pages('title_li'); ?>
      </ul>
    </nav>
  <?php endif; ?>
</section>