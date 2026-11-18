import Swiper from "swiper";
import { Navigation } from "swiper/modules";
import "swiper/css";

export default function initGallerySlider() {
    const el = document.querySelector("#gallerySlider");
    if (!el) return;

    const perView = parseInt(el.dataset.perView) || 4;
    const perMd = parseInt(el.dataset.perViewMd) || 3;
    const perSm = parseInt(el.dataset.perViewSm) || 2;
    const space = parseInt(el.dataset.space) || 15;

    new Swiper(el, {
        modules: [Navigation],
        slidesPerView: perView,
        spaceBetween: space,
        loop: true,
        navigation: {
            prevEl: "#gallerySliderPrev",
            nextEl: "#gallerySliderNext",
        },
        breakpoints: {
            0: { slidesPerView: perSm, spaceBetween: space },
            768: { slidesPerView: perMd, spaceBetween: space },
            992: { slidesPerView: perView, spaceBetween: space },
        },
    });
}
