<?php

/*
  Shortcode simple
*/
function sc_helloworld()
{
  return '<strong style="color: red">Hello World!</strong>';
}

add_shortcode('hello_world', 'sc_helloworld');
// Ici dès que WordPress verra [hello_world]
// il executera automatiquement ma fonction
// sc_helloworld

/*
  Bouton me suivre
*/
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

/**
 * Shortcode: Bouton rouge bien moche
 * Utilisation sans arguments: [bouton_tout_moche]
 * Utilisation avec argument: [bouton_tout_moche url="url choisie"]
 * Utilisation avec arguments: [bouton_tout_moche url="url choisie" cible="interne"]
 */
function sc_bouton_tout_moche($attributs, $content = null)
{
  // la fonction shortcode_atts va me générer les valeurs par défaut
  // de mes attributs.
  // Ainsi si l'utilisateur "oublie" (volontairement ou non) un attribut
  // celui-ci aura une valeur par défaut => Donc pas de bug !
  $attributs = shortcode_atts([
    'url' => home_url(),
    'cible' => '_blank',
  ], $attributs);

  // Je vérifie la valeur en cible.
  // si le client à souhaité un lien interne,
  // target vaudra "_self"
  if ($attributs['cible'] == 'interne') {

    $attributs['cible'] = '_self';

  // dans tout les autres cas
  // target vaudra "_blank"
  } else {

    $attributs['cible'] = '_blank';
  }

  if (is_null($content)) {

    $content = 'Un super lien';
  }

  $html = '<a href="'.$attributs['url'].'" target="'.$attributs['cible'].'" class="action-button" style="color: red; border-color: red">';
  $html .= $content;
  $html .= '</a>';

  return $html;
}

add_shortcode('bouton_tout_moche', 'sc_bouton_tout_moche');