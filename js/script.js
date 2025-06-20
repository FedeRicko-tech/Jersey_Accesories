document.addEventListener("DOMContentLoaded", function () {
  // Cek jika kita berada di halaman jersey
  if (typeof jerseyData !== "undefined") {
    const jerseyModal = document.getElementById("jerseyModal");
    if (jerseyModal) {
      jerseyModal.addEventListener("show.bs.modal", function (event) {
        const triggerElement = event.relatedTarget;
        const jerseyId = triggerElement.getAttribute("data-jersey-id");
        const currentJersey = jerseyData.find((j) => j.id == jerseyId);

        if (!currentJersey) return;

        const modalMainImage = jerseyModal.querySelector("#modalMainImage");
        const modalThumbnailContainer = jerseyModal.querySelector( "#modalThumbnailContainer" );

        jerseyModal.querySelector("#modalTeam").textContent = currentJersey.team;
        jerseyModal.querySelector("#modalName").textContent = currentJersey.name;

        modalThumbnailContainer.innerHTML = "";
        if ( currentJersey.gallery_images && currentJersey.gallery_images.length > 0 ) {
          modalMainImage.src = currentJersey.gallery_images[0];
          currentJersey.gallery_images.forEach((imageUrl) => {
            const thumb = document.createElement("img");
            thumb.src = imageUrl;
            thumb.className = "img-fluid img-thumbnail modal-thumbnail";
            modalThumbnailContainer.appendChild(thumb);
          });
        }

        modalThumbnailContainer.addEventListener("click", function (e) {
          if (e.target && e.target.nodeName === "IMG") {
            modalMainImage.src = e.target.src;
          }
        });
      });
    }
  }
});

// Accessories
document.addEventListener("DOMContentLoaded", function () {
  if (typeof accessoryData !== "undefined") {
    const accessoryModal = document.getElementById("accessoryModal");
    if (accessoryModal) {
      accessoryModal.addEventListener("show.bs.modal", function (event) {
        const triggerElement = event.relatedTarget;
        const accessoryId = triggerElement.getAttribute("data-accessory-id");
        const currentAccessory = accessoryData.find((a) => a.id == accessoryId);

        if (!currentAccessory) return;

        const modalMainImage = accessoryModal.querySelector( "#accessoryModalMainImage" );
        const modalThumbnailContainer = accessoryModal.querySelector( "#accessoryModalThumbnailContainer" );

        accessoryModal.querySelector("#accessoryModalCategory").textContent = currentAccessory.category;
        accessoryModal.querySelector("#accessoryModalName").textContent = currentAccessory.name;

        modalThumbnailContainer.innerHTML = "";
        if ( currentAccessory.gallery_images && currentAccessory.gallery_images.length > 0 ) {
          modalMainImage.src = currentAccessory.gallery_images[0];
          currentAccessory.gallery_images.forEach((imageUrl) => {
            const thumb = document.createElement("img");
            thumb.src = imageUrl;
            thumb.className = "img-fluid img-thumbnail modal-thumbnail";
            modalThumbnailContainer.appendChild(thumb);
          });
        }

        modalThumbnailContainer.addEventListener("click", function (e) {
          if (e.target && e.target.nodeName === "IMG") {
            modalMainImage.src = e.target.src;
          }
        });
      });
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  // Cek jika kita berada di halaman jersey
  if (typeof jerseyData !== "undefined") {
    const jerseyModal = document.getElementById("jerseyModal");
    if (jerseyModal) {
      jerseyModal.addEventListener("show.bs.modal", function (event) {
        const triggerElement = event.relatedTarget;
        const jerseyId = triggerElement.getAttribute("data-jersey-id");
        const currentJersey = jerseyData.find((j) => j.id == jerseyId);

        if (!currentJersey) return;

        const modalMainImage = jerseyModal.querySelector("#modalMainImage");
        const modalThumbnailContainer = jerseyModal.querySelector( "#modalThumbnailContainer" );

        jerseyModal.querySelector("#modalTeam").textContent = currentJersey.team;
        jerseyModal.querySelector("#modalName").textContent = currentJersey.name;

        modalThumbnailContainer.innerHTML = "";
        if ( currentJersey.gallery_images && currentJersey.gallery_images.length > 0 ) {
          modalMainImage.src = currentJersey.gallery_images[0];
          currentJersey.gallery_images.forEach((imageUrl) => {
            const thumb = document.createElement("img");
            thumb.src = imageUrl;
            thumb.className = "img-fluid img-thumbnail modal-thumbnail";
            modalThumbnailContainer.appendChild(thumb);
          });
        }

        modalThumbnailContainer.addEventListener("click", function (e) {
          if (e.target && e.target.nodeName === "IMG") {
            modalMainImage.src = e.target.src;
          }
        });
      });
    }
  }
});

// Accessories
document.addEventListener("DOMContentLoaded", function () {
  if (typeof accessoryData !== "undefined") {
    const accessoryModal = document.getElementById("accessoryModal");
    if (accessoryModal) {
      accessoryModal.addEventListener("show.bs.modal", function (event) {
        const triggerElement = event.relatedTarget;
        const accessoryId = triggerElement.getAttribute("data-accessory-id");
        const currentAccessory = accessoryData.find((a) => a.id == accessoryId);

        if (!currentAccessory) return;

        const modalMainImage = accessoryModal.querySelector( "#accessoryModalMainImage" );
        const modalThumbnailContainer = accessoryModal.querySelector( "#accessoryModalThumbnailContainer" );

        accessoryModal.querySelector("#accessoryModalCategory").textContent = currentAccessory.category;
        accessoryModal.querySelector("#accessoryModalName").textContent = currentAccessory.name;

        modalThumbnailContainer.innerHTML = "";
        if ( currentAccessory.gallery_images && currentAccessory.gallery_images.length > 0 ) {
          modalMainImage.src = currentAccessory.gallery_images[0];
          currentAccessory.gallery_images.forEach((imageUrl) => {
            const thumb = document.createElement("img");
            thumb.src = imageUrl;
            thumb.className = "img-fluid img-thumbnail modal-thumbnail";
            modalThumbnailContainer.appendChild(thumb);
          });
        }

        modalThumbnailContainer.addEventListener("click", function (e) {
          if (e.target && e.target.nodeName === "IMG") {
            modalMainImage.src = e.target.src;
          }
        });
      });
    }
  }
});