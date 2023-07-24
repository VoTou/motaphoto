// Récupérer la modal
const modal = document.querySelector("#id01");
const modalContainer = document.querySelector(".modal-dialog");
const btnContact = document.querySelectorAll(".contact-close");
const modalCross = document.querySelector(".modal-close");

// Fermer la modal lorsque l'utilisateur clique en dehors de celle-ci ou sur la croix
window.addEventListener("click", (e) => {
  if (e.target === modalContainer || e.target === modalCross) {
    modal.style.display = "none";
  }
});

// Affiche la modal au clic du bouton contact
btnContact.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    if (modal.style.display === "none") {
      modal.style.display = "table";
    }
  });
});

// Retire le #id01 de l'URL
modal.addEventListener("click", () => {
  history.replaceState(null, document.title, window.location.pathname);
});

// Récupérer le champ Référence pour l'afficher dans le champ du formulaire "Réf. photo"
(function ($) {
  $(document).ready(function () {
    let reference = $("#ref").data("reference");
    $("#ref .wpcf7-form-control").val(reference);
  });
})(jQuery);

// Désactive la possibilité de modifier le champ "Réf photo"
if (document.body.classList.contains("single-photo")) {
  const inputs = document.querySelectorAll(".wpcf7-disabled");
  inputs.forEach(function (input) {
    input.setAttribute("disabled", "disabled");
  });
}

// Désactive la possibilité de modifier le champ "Réf photo"
if (document.body.classList.contains("single-photo")) {
  const inputs = document.querySelectorAll(".wpcf7-disabled");
  inputs.forEach(function (input) {
    input.setAttribute("disabled", "disabled");
  });
}

(function ($) {
  $(document).ready(function () {
    // Chargment des commentaires en Ajax
    $(".js-load-photos").click(function (e) {
      // Empêcher l'envoi classique du formulaire
      e.preventDefault();

      // L'URL qui réceptionne les requêtes Ajax dans le data
      const ajaxurl = $(this).data("ajaxurl");

      // Les data du bouton
      // ⚠️ Ne changez pas le nom "action" !
      const data = {
        action: $(this).data("action"),
        nonce: $(this).data("nonce"),
        posttype: $(this).data("posttype"),
      };

      // Pour vérifier qu'on a bien récupéré les données
      console.log(ajaxurl);
      console.log(data);

      // Requête Ajax en JS natif via Fetch
      fetch(ajaxurl, {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
          "Cache-Control": "no-cache",
        },
        body: new URLSearchParams(data),
      })
        .then((response) => response.json())
        .then((response) => {
          console.log(response);

          // En cas d'erreur
          if (!response.success) {
            alert(response.data);
            return;
          }

          // Et en cas de réussite
          $(".container-galery").append(response.data); // Et afficher le HTML
        });
    });
  });
})(jQuery);


const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');
const nextThumb = document.querySelector('.next-thumbnail');
const prevThumb = document.querySelector('.prev-thumbnail');


arrowLeft.addEventListener('mouseover', () => {
  prevThumb.classList.add('show-thumbnail');
});

arrowLeft.addEventListener('mouseout', () => {
  prevThumb.classList.remove('show-thumbnail');
});

arrowRight.addEventListener('mouseover', () => {
  nextThumb.classList.add('show-thumbnail');
});

arrowRight.addEventListener('mouseout', () => {
  nextThumb.classList.remove('show-thumbnail');
});