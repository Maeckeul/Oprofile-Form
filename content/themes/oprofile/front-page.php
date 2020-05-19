<?php

// J'affiche mon header
get_header();

// J'affiche ma banner
get_template_part('template-parts/front-page/banner');

// J'affiche la liste de mes articles
get_template_part('template-parts/front-page/posts');

// J'affiche la grille des compétences
get_template_part('template-parts/front-page/grid');

// J'affiche le footer
get_footer();