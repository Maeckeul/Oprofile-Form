<?php

function oprofile_customizer($wp_customize)
{
  // Premiere chose à réaliser: l'ajout d'un panel
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/
  $wp_customize->add_panel(
    // Identifiant unique du panel
    'oprofile_theme_panel',
    [
      // Titre affiché
      'title' => 'oProfile',
      // Description affichée dans le ?
      'description' => 'oProfile Panel - Gestion du thème',
      // Emplacement
      'priority' => 1
    ]
  );

  // Deuxième étape: ajouter une section dans mon panel
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_home',
    [
      'title' => "Page d'accueil",
      'description' => "oProfile Section - Gestion de la page d'accueil",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_posts_count',
    [
      'default' => 6
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_posts_count',
    [
      // Le type d'input
      'type' => 'number',
      // J'ajoute des attributs sur mon input
      'input_attrs' => [
        'min' => 2,
        'max' => 10,
        'step' => 2
      ],
      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_home',
      // Le label affiché
      'label' => "Nombre d'articles",
      // Description
      'description' => "Nombre d'articles affichées sur la page d'accueil"
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_home',
    [
      'title' => "Page d'accueil",
      'description' => "oProfile Section - Gestion de la page d'accueil",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_select_pages',
    [
      'default' => ''
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_select_pages',
    [
      // Le type d'input
      'type' => 'dropdown-pages',
  
      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_home',
      // Le label affiché
      'label' => "Selection de pages pour l'accueil",
      // Description
      'description' => "Selectionner une page qui viendra entre les articles et la grille de compétences"
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_footer',
    [
      'title' => "Footer",
      'description' => "oProfile Section - Gestion du footer",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_footer_email',
    [
      'default' => 'cmaeckeul@gmail.com'
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_footer_email',
    [
      // Le type d'input
      'type' => 'email',

      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_footer',
      // Le label affiché
      'label' => "Email",
      // Description
      'description' => "Adresse email située au pied de page"
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_footer',
    [
      'title' => "Footer",
      'description' => "oProfile Section - Gestion du footer",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_footer_phone',
    [
      'default' => '+33 6 25 99 11 91'
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_footer_phone',
    [
      // Le type d'input
      'type' => 'text',

      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_footer',
      // Le label affiché
      'label' => "Téléphone",
      // Description
      'description' => "Numéro de téléphone situé au pied de page"
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_footer',
    [
      'title' => "Footer",
      'description' => "oProfile Section - Gestion du footer",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_footer_address',
    [
      'default' => '42 Lotissement Nouvelle Cité, Lamberton 97215 Rivère Salée'
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_footer_address',
    [
      // Le type d'input
      'type' => 'textarea',

      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_footer',
      // Le label affiché
      'label' => "Adresse",
      // Description
      'description' => "Adresse géographique située en pied de page"
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_footer',
    [
      'title' => "Footer",
      'description' => "oProfile Section - Gestion du footer",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  // Troisième étape: ajouter un setting & son control

  // 1 - Créer le setting
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
  $wp_customize->add_setting(
    'oprofile_footer_display',
    [
      'default' => 'Non'
    ]
  );

  // 2 - Ajouter son control
  // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
  // https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
  $wp_customize->add_control(
    'oprofile_footer_display',
    [
      // Le type d'input
      'type' => 'select',

      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_footer',
      // Le label affiché
      'label' => "Affichage du footer",
      // Description
      'description' => "Desactiver le footer ?",
      'choices' => ['Non' => 'Non', 'Oui' => 'Oui']
    ]
  );

  $wp_customize->add_setting(
    'oprofile_footer_color_picker',
    [
      'default' => '#242943',
      'transport' => 'refresh',
    ]
  );

  $wp_customize->add_section(
    // Identifiant unique de la section
    'oprofile_footer',
    [
      'title' => "Footer",
      'description' => "oProfile Section - Gestion du footer",
      // Identifiant du panel dans lequel placer cette section
      'panel' => 'oprofile_theme_panel'
    ]  
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'oprofile_footer_color_control',
    [
      // Le type d'input
      

      // La section sur laquel est greffée mon setting
      'section' => 'oprofile_footer',
      // Le label affiché
      'label' => "Choix de la couleur du footer",
      // Description
      'description' => "Couleur",
      'settings' => 'oprofile_footer_color_picker',
    ]
  ));


}

add_action('customize_register', 'oprofile_customizer');

function customize_css() { ?>
  <style type="text/css">

    .footer {
      background-color: <?= get_theme_mod('oprofile_footer_color_picker') ?> ;
    }

  </style>
<?php }

add_action('wp_head', 'customize_css');