<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
      <div class="logo">
        <a href="<?= home_url(); ?>" class="logo__text"><?php bloginfo('name'); ?></a>
      </div>

      <?php

          // Va me chercher le menu associé à l'emplacement...
          // (en l'occurence l'emplacement "main")
          wp_nav_menu([
            'theme_location' => 'social',
          ]);

    ?>

<!--      <ul class="social-nav">
        <li class="social-nav__item"><a href=""><i class="fab fa-twitter"></i></a></li>
        <li class="social-nav__item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li class="social-nav__item"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
        <li class="social-nav__item"><a href=""><i class="fab fa-instagram"></i></a></li>
        <li class="social-nav__item"><a href=""><i class="fab fa-github"></i></a></li>
      </ul> -->

      <a href="" class="ui-button open-menu">
        <i class="navbar__social__nav--color fas fa-bars"></i>
      </a>
    </header>