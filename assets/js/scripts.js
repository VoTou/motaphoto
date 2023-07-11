// Récupérer la modal
const modal = document.querySelector( "#id01") ;
const modalContainer = document.querySelector('.modal-dialog');
const btnContact = document.querySelector('.contact-btn');

// Fermer la modal lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener("click", (e) => {
  if (e.target === modalContainer) {
    modal.style.display = "none";
  }
});

// Désactive l'affichage de la modal
btnContact.addEventListener("click", (e) => {
  if (modal.style.display === "none")
  modal.style.display = "table";
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
