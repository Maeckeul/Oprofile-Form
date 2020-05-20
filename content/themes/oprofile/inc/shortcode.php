<?php

function sc_helloworld()
{
  return '<strong style="color: red">Hello World!</strong>';
}

add_shortcode('hello_world', 'sc_helloworld');

function sc_follow($shorcode_atts, $shortcode_content = null)
{
  // Ici, je viens lister les valeurs par défaut de mes attributs
  // du coup je sais à l'avance que les index existeront
  $shorcode_atts = shortcode_atts([
    'blaze' => 'oclock_io',
    'toto' => 'tutu',
  ], $shorcode_atts);

  if (empty($shortcode_content)) {

    $shortcode_content = 'Me suivre sur Twitter !';
  }

  $html = '<a href="https://twitter.com/'.$shorcode_atts['blaze'].'" target="_blank" class="action-button">';
  $html .= $shortcode_content;
  $html .= '</a>';

  return $html;
}

add_shortcode('follow', 'sc_follow');

function sc_bouton_tout_moche($attributs) {
    $attributs = shortcode_atts([
        'url' => home_url(),
    ], $attributs);

    $html = '<a href="'.$attributs['url'].'" target="_blank" class="action-button"  style="color: red; border-color: red; :hover=red">';
    $html .= 'un super lien';
    $html .= '</a>';

    return $html;
}

add_shortcode('bouton_tout_moche', 'sc_bouton_tout_moche');