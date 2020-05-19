<?php

function Oprofile_menus() {


  register_nav_menus([
      'social' => 'Navigation reseaux sociaux dans le header',
      'main' => 'Menu de navigation du site'
  ]);
}

add_action( 'after_setup_theme', 'Oprofile_menus' );