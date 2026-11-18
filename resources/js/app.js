// import './bootstrap';
// import.meta.glob('../fonts/*.ttf');
import initServicesSlider from "./services-slider";
import initGallerySlider from "./gallery-slider";

document.addEventListener("DOMContentLoaded", () => {
    // Finde alle Links im mobilen Menü
    const mobileLinks = document.querySelectorAll(".mobile-menu-links a");
    // Finde die Checkbox, die das Menü steuert
    const menuCheckbox = document.getElementById("menu-toggle");

    initServicesSlider();
    initGallerySlider();

    mobileLinks.forEach((link) => {
        link.addEventListener("click", () => {
            // Wenn ein Link geklickt wird, entferne das Häkchen (Menü schließt sich)
            if (menuCheckbox) {
                menuCheckbox.checked = false;
            }
        });
    });
});
