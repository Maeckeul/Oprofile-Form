<?php

function Oprofile_wp_nav_menu($main) {
  $newMain = str_replace('menu-item', 'main-nav__item', $main);
  return $newMain;
}

add_filter('wp_nav_menu', 'Oprofile_wp_nav_menu');

