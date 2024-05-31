  <header class="header">
    <div class="header__menu wrapper">
      <div class="header__logo">
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
        	the_custom_logo();
        }
        ?>
      </div>
      <nav>
        <?php wp_nav_menu(array('theme_location' => 'public-menu')); ?>
      </nav>
    </div>
  </header>