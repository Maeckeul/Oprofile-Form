<!-- Todo: Récuperer le contenu par défaut de la boucle de WordPress -->
<?php if (have_posts()): while(have_posts()): the_post(); ?>

  <section class="banner" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
    <div class="intro">
      <h1 class="intro__title"><?php the_title(); ?></h1>
      <div class="intro__content">
        <?php the_content(); ?>
      </div>
    </div>
    <div>
      <a href="#posts" class="action-button">En savoir plus</a>
      <a href="#footer" class="action-button">Contact</a>
    </div>
  </section>

<?php endwhile; endif; ?>