<div class="menu">
    <a href="" class="ui-button close-menu">
      <i class="fas fa-times"></i>
    </a>

    <?php

          // Va me chercher le menu associé à l'emplacement...
          // (en l'occurence l'emplacement "main")
          wp_nav_menu([
            'theme_location' => 'main',
            'menu_class' => '',
            'container' => 'nav',
            'container_class' => 'main-nav'
          ]);

    ?>

<!--    <nav class="main-nav">
      <ul>
        <li class="main-nav__item"><a href="">Homepage</a></li>
        <li class="main-nav__item"><a href="">Blog</a></li>
        <li class="main-nav__item"><a href="">Projects</a></li>
        <li class="main-nav__item"><a href="">Exemple</a></li>
        <li class="main-nav__item"><a href="">Contact</a></li>
      </ul>
    </nav> -->

    <ul class="social-nav">
      <li class="social-nav__item"><a href=""><i class="fab fa-twitter"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-instagram"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-github"></i></a></li>
    </ul>
  </div>