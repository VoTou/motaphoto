// Récupérer la modal
const modal = document.getElementById("id01");

// Fermer la modal lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});