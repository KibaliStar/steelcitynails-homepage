// import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Finde alle Links im mobilen Menü
    const mobileLinks = document.querySelectorAll('.mobile-menu-links a');
    // Finde die Checkbox, die das Menü steuert
    const menuCheckbox = document.getElementById('menu-toggle');

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Wenn ein Link geklickt wird, entferne das Häkchen (Menü schließt sich)
            if (menuCheckbox) {
                menuCheckbox.checked = false;
            }
        });
    });
});