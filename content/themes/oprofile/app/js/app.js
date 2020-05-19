// Je demande à WebPack de m'ajouter scrollex
require('jquery.scrollex');

var app = {

  init: function() {

    // J'affiche un message dans la console pour
    // "témoigner" de la bonne execution de mon code
    console.log('init');

    // J'appel la méthode qui va déposer mes écouteurs d'évènements
    app.addEvents();

    // J'initialise scrollex
    app.enableScrollex();
  },
  addEvents: function() {

    // Je dépose un écouteur d'évement sur mes boutons
    // d'ouverture & fermeture du menu
    $('.ui-button').on('click', app.handleToggleMenu);
  },
  handleToggleMenu: function(event) {

    // Je demande au navigateur de s'arreter là.
    // En gros il ne continue pas le traitement du click sur un élément <a>
    event.preventDefault();

    console.log('J ai clické sur le menu');

    // La méthode toggleClass de jQuery permet d'ajouter
    // la classe sur l'élément si elle n'existe pas.
    // Mais également de supprimer la classe sur l'élément si elle existe.
    // https://api.jquery.com/toggleClass/#toggleClass-className
    $('body').toggleClass('menu-visible');

    // PI: En vanilla il existe la méthode toggle sur l'objet classList
    // qui permet de faire la même chose:
    // https://developer.mozilla.org/fr/docs/Web/API/Element/classList
  },
  enableScrollex: function() {

    // Je vais appliquer Scrollex sur l'élément que je souhaite surveiller.
    // Ainsi, scrollex va surveiller ma banner et déclancher
    // des événements à l'apparition & a la disparition de ma banner
    // dans ma page web.

    // Autrement dit lorsqu'elle apparait, je vais déclancher une action
    // Autrement dit lorsqu'elle dispparait, je vais déclancher une autre action
    $('.banner').scrollex({
      // Lorsque ma banner entre dans la page
      // j'execute ma méthode qui va libérer le header
      enter: app.removeHeaderFixed,

      // Lorsque ma banner sort de la page
      // j'execute ma méthode qui fixer le header
      leave: app.setHeaderFixed,

      bottom: $('.header').outerHeight(),
    });
  },
  removeHeaderFixed: function() {
    // https://api.jquery.com/removeClass/#removeClass-className
    $('.header').removeClass('header--is-fixed');
  },
  setHeaderFixed: function() {
    // https://api.jquery.com/addClass/#addClass-className
    $('.header').addClass('header--is-fixed');
  }
};

$(app.init);