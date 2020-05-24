<footer class="footer">
<!--      <form action="" class="contact-form">
        <div class="field field--is-half">
          <label class="field__label" for="username">Nom</label>
          <input type="text" class="field__input" id="username">
        </div>

        <div class="field field--is-half">
          <label class="field__label" for="email">Email</label>
          <input type="email" class="field__input" id="email">
        </div>

        <div class="field">
          <label for="textmessage" class="field__label">Message</label>
          <textarea name="textmessage" id="textmessage" class="field__textarea"></textarea>
        </div>

        <div class="field">
          <input type="submit" value="Envoyer" class="field__submit">
        </div>
      </form> 
-->

<?= do_shortcode('[contact-form-7 id="32" title="Contact Footer"]'); ?>

<?php

$email = 'cmaeckeul@gmail.com';

if(get_theme_mod('oprofile_footer_email')) {

  $email = get_theme_mod('oprofile_footer_email');

}

?>

      <address class="contact-info">
        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-envelope"></i>
          <h4 class="contact-info__part__title">Email</h4>
          <a class="contact-info__part__content" href="mailto:<?= $email ?>&subject=Demande%20de%20contact&body=Nom%3A%0A%0APr%C3%A9nom%3A%0A%0AAdresse%20du%20site%20%28si%20d%C3%A9j%C3%A0%20existant%29%3A"><?= $email ?></a>
        </div>

<?php

$phone = '+33 6 25 99 11 91';

if(get_theme_mod('oprofile_footer_phone')) {

  $phone = get_theme_mod('oprofile_footer_phone');

}

$phone = str_replace(' ', '', $phone);
$phone = str_replace('.', '', $phone);
$phone = str_replace('/', '', $phone);

?>

        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-phone-alt"></i>
          <h4 class="contact-info__part__title">Téléphone</h4>
          <a class="contact-info__part__content" href="tel:<?= $phone ?>"><?= get_theme_mod('oprofile_footer_phone') ?></a>
        </div>

<?php

$address = '42 Lotissement Nouvelle Cité, Lamberton 97215 Rivère Salée';

if(get_theme_mod('oprofile_footer_address')) {

  $phone = get_theme_mod('oprofile_footer_address');

}

?>

        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-home"></i>
          <h4 class="contact-info__part__title">Adresse</h4>
          <a class="contact-info__part__content" href="https://bit.ly/2ZhXUBR" target="_blank"><?= nl2br(get_theme_mod('oprofile_footer_address')) ?></a>
        </div>
      </address>
    </footer>
