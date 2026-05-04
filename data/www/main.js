const modalElement = document.getElementById("imageModal");

if (modalElement) {
  const modalImage = modalElement.querySelector(".modal-image");

  modalElement.addEventListener("show.bs.modal", (event) => {
    const trigger = event.relatedTarget;
    modalImage.src = trigger?.dataset.full || "";
  });

  modalElement.addEventListener("hidden.bs.modal", () => {
    modalImage.src = "";
  });
}
