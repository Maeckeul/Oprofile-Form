<?php

// J'affiche mon header
get_header();

// J'affiche ma banner
get_template_part('template-parts/front-page/banner');

// J'affiche la liste de mes articles
get_template_part('template-parts/front-page/posts');

// Get pages set in the customizer (if any)
$pages = [];
for ( $count = 1; $count <= 5; $count++ ) {
	$mod = get_theme_mod( 'oprofile_select_pages' . $count );
	if ( 'page-none-selected' != $mod ) {
		$pages[] = $mod;
	}
}

$args = array(
	'posts_per_page' => 5,
	'post_type' => 'page',
	'post__in' => $pages,
	'orderby' => 'post__in'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
	$count = 1;
	while ( $query->have_posts() ) : $query->the_post();
?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'featured-' . $count ); ?>>

			<header class="entry-header">
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-summary clearfix">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		

		</article><!-- #post-## -->

	<?php
	$count++;
	endwhile;
else :
	if ( current_user_can( 'customize' ) ) { ?>
		<div class="message">
			<p><?php _e( 'There are no pages available to display.', 'textdomain' ); ?></p>
			<p><?php printf(
				__( 'These pages can be set in the <a href="%s">customizer</a>.', 'textdomain' ),
				admin_url( 'customize.php?autofocus[control]=showcase' )
			); ?>
			</p>
		</div>
	<?php }
endif;

// J'affiche la grille des compétences
get_template_part('template-parts/front-page/grid');

// J'affiche le footer
get_footer();