// Récupérer la modal
const modal = document.querySelector( "#id01") ;
const modalContainer = document.querySelector('.modal-dialog');
const btnContact = document.querySelectorAll('.contact-close');

// Fermer la modal lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener("click", (e) => {
  if (e.target === modalContainer) {
    modal.style.display = "none";
    document.body.style.overflow = "";
  }
});

// Affiche la modal
btnContact.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    if (modal.style.display === "none") {
      modal.style.display = "table";
    }
  });
});

btnContact.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    document.body.style.overflow = "hidden";
  });
});

// Retire le #id01 de l'URL
modal.addEventListener("click", () => {
  history.replaceState(null, document.title, window.location.pathname);
});

// Récupérer le champ Référence pour l'afficher dans le champ du formulaire "Réf. photo"
(function ($) {
  $(document).ready(function(){
    let reference = $('#ref').data('reference');
    $("#ref .wpcf7-form-control").val(reference);
  });
})(jQuery);

// Désactive la possibilité de modifier le champ "Réf photo"
if (document.body.classList.contains('single-photo')) {
  const inputs = document.querySelectorAll('.wpcf7-disabled');
  inputs.forEach(function(input) {
      input.setAttribute('disabled', 'disabled');
  });
}

// Désactive la possibilité de modifier le champ "Réf photo"
if (document.body.classList.contains('single-photo')) {
  const inputs = document.querySelectorAll('.wpcf7-disabled');
  inputs.forEach(function(input) {
      input.setAttribute('disabled', 'disabled');
  });
}

