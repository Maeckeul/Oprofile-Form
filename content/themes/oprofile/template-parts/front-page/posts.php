<section class="posts" id="posts">

  <!-- Todo: Récupérer les derniers articles, en utilisant une boucle custom -->
  <?php

  $args = [
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date',
    'posts_per_page' => 6
  ];

  $wp_query = new WP_Query($args);

  if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>

    <?php get_template_part('template-parts/posts/post', 'excerpt'); ?>

  <?php endwhile; wp_reset_postdata(); endif; ?>

</section>