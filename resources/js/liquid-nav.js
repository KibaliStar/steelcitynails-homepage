"use strict";

/*
    Dieses Script bewegt die helle "Pille" hinter dem aktiven Navigationspunkt.
*/

document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("#liquidNav");
    const activePill = document.querySelector("#activePill");
    const glare = document.querySelector("#liquidGlare");
    const navLinks = document.querySelectorAll(".nav-link");

    if (!nav || !activePill || !glare || navLinks.length === 0) {
        return;
    }

    function movePillToLink(link) {
    activePill.style.width = link.offsetWidth + "px";
    activePill.style.height = link.offsetHeight + "px";
    activePill.style.transform = "translate(" + link.offsetLeft + "px, " + link.offsetTop + "px)";
}

const activeLink = document.querySelector(".nav-link.active");

if (activeLink) {
    activePill.style.transition = "none";
    movePillToLink(activeLink);

    activePill.offsetHeight;

    activePill.style.transition =
        "transform 0.35s ease, width 0.35s ease, height 0.35s ease";
}

navLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
        const targetUrl = link.href;

        event.preventDefault();

        navLinks.forEach((navLink) => {
            navLink.classList.remove("active");
        });

        link.classList.add("active");

        requestAnimationFrame(() => {
            movePillToLink(link);
        });

        setTimeout(() => {
            window.location.href = targetUrl;
        }, 400);
    });
});

    window.addEventListener("resize", () => {
        const currentActiveLink = document.querySelector(".nav-link.active");

        if (currentActiveLink) {
            movePillToLink(currentActiveLink);
        }
    });

    nav.addEventListener("mousemove", (event) => {
        const navPosition = nav.getBoundingClientRect();

        const mouseX = event.clientX - navPosition.left;
        const mouseY = event.clientY - navPosition.top;

        glare.style.setProperty("--x", mouseX + "px");
        glare.style.setProperty("--y", mouseY + "px");
    });
});