<footer class="footer">
      <form action="" class="contact-form">
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

      <address class="contact-info">
        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-envelope"></i>
          <h4 class="contact-info__part__title">Email</h4>
          <a class="contact-info__part__content" href="mailto:christophe@oclock.io&subject=Demande%20de%20contact&body=Nom%3A%0A%0APr%C3%A9nom%3A%0A%0AAdresse%20du%20site%20%28si%20d%C3%A9j%C3%A0%20existant%29%3A">christophe@oclock.io</a>
        </div>

        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-phone-alt"></i>
          <h4 class="contact-info__part__title">Téléphone</h4>
          <a class="contact-info__part__content" href="tel:+33679708933">+33 6 79 70 89 33</a>
        </div>

        <div class="contact-info__part">
          <i class="contact-info__part__icon fas fa-home"></i>
          <h4 class="contact-info__part__title">Adresse</h4>
          <a class="contact-info__part__content" href="https://bit.ly/2ZhXUBR" target="_blank">10 Michel Hubert Descours<br />27300 Bernay</a>
        </div>
      </address>
    </footer>
  </div>

  <div class="menu">
    <a href="" class="ui-button close-menu">
      <i class="fas fa-times"></i>
    </a>

    <nav class="main-nav">
      <ul>
        <li class="main-nav__item"><a href="">Homepage</a></li>
        <li class="main-nav__item"><a href="">Blog</a></li>
        <li class="main-nav__item"><a href="">Projects</a></li>
        <li class="main-nav__item"><a href="">Exemple</a></li>
        <li class="main-nav__item"><a href="">Contact</a></li>
      </ul>
    </nav>

    <ul class="social-nav">
      <li class="social-nav__item"><a href=""><i class="fab fa-twitter"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-google-plus-g"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-instagram"></i></a></li>
      <li class="social-nav__item"><a href=""><i class="fab fa-github"></i></a></li>
    </ul>
  </div>

  <?php wp_footer(); ?>
</body>
</html>