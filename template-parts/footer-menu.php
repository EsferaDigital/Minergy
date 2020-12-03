<div class="Panel">
  <?php
  if(has_nav_menu('menu_secundario')):
    wp_nav_menu(array(
      'theme_location' => 'menu_secundario',
      'container' => 'nav',
      'container_id' => 'Menu',
      'container_class' => 'menu-secundario'
    ));
  else:
  ?>
    <nav class="menu-secundario">
      <ul>
        <li>Añadir menú</li>
      </ul>
    </nav>
  <?php endif; ?>
</div>