<?php

function oprofile_setup()
{
  // Fonctionnalité de thèmes:

  // Gestion du titre automatique
  add_theme_support('title-tag');

  // demande à WP d'activer les thumbnails
  add_theme_support('post-thumbnails');

  add_theme_support('menus');

  register_nav_menus([
    'main' => 'Menu de navigation du site'
  ]);
}

add_action('after_setup_theme', 'oprofile_setup');