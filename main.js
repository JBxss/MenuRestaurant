let cerrar = document.querySelectorAll(".cerrar")[0];
let abrir = document.querySelectorAll(".btn-secundary")[0];
let modal = document.querySelectorAll(".mod")[0];
let modalC = document.querySelectorAll(".mod-container")[0];

abrir.addEventListener("click", function (e) {
  e.preventDefault;
  modalC.style.opacity = "1";
  modalC.style.visibility = "visible";
  modal.classList.toggle("mod-close");
});

cerrar.addEventListener("click", function (e) {
  e.preventDefault;
  modal.classList.toggle("mod-close");
  setTimeout(function () {
    modalC.style.opacity = "0";
    modalC.style.visibility = "hidden";
  }, 900);
});

window.addEventListener("click", function (e) {
  e.preventDefault;
  if (e.target == modalC) {
    modal.classList.toggle("mod-close");
    setTimeout(function () {
      modalC.style.opacity = "0";
      modalC.style.visibility = "hidden";
    }, 900);
  }
});
