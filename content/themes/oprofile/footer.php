<?php 

if(get_theme_mod('oprofile_footer_display') === 'Non'): 

get_template_part('template-parts/footer/footer');

endif;

?>

  </div>

<?php
 
get_template_part('template-parts/footer/menu');

?>

<?php wp_footer(); ?>

</body>
</html>