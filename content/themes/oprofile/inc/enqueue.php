<?php

function oprofile_scripts()
{
	wp_enqueue_style(
    'style',
    get_theme_file_uri('public/css/style.css'),
    [],
    '1.0.0'
  );

  wp_enqueue_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.13.0/css/all.css'
  );

  wp_enqueue_script(
    'app',
    get_theme_file_uri('public/js/app.js'),
    [],
    '1.0.0',
    true
  );
}

add_action( 'wp_enqueue_scripts', 'oprofile_scripts' );

