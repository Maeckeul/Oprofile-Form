<?php

// J'affiche mon header
get_header();

// J'affiche ma banner
get_template_part('template-parts/front-page/banner');

// J'affiche la liste de mes articles
get_template_part('template-parts/front-page/posts');

// Get pages set in the customizer (if any)
$home_insert = get_theme_mod('oprofile_select_pages');

if(!empty($home_insert)):

	$args =[
		'page_id' => $home_insert
	];

$wp_query = new WP_Query($args);

if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>

<section style="background-color: grey">
<h3><?= the_title(); ?></h3>
<p><?= the_excerpt(); ?></p>
</section>

<?php endwhile; wp_reset_postdata(); endif; 

endif;

// J'affiche la grille des compétences
get_template_part('template-parts/front-page/grid');

// J'affiche le footer
 get_footer(); 