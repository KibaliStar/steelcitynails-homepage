@props([
    'id' => 'gallerySlider',
    'images' => [], // Array mit URLs oder ['image' => '...', 'alt' => '...']
    'perView' => 4, // Desktop
    'perViewMd' => 3, // Tablet
    'perViewSm' => 2, // Mobile
    'space' => 15, // Gap in px
])

<div class="gallery-slider-wrapper">
    <div class="swiper" id="{{ $id }}" data-per-view="{{ $perView }}" data-per-view-md="{{ $perViewMd }}"
        data-per-view-sm="{{ $perViewSm }}" data-space="{{ $space }}">
        <div class="swiper-wrapper">
            @foreach ($images as $img)
                @php
                    $src = is_array($img) ? $img['image'] ?? '' : $img;
                    $alt = is_array($img) ? $img['alt'] ?? '' : '';
                @endphp
                <div class="swiper-slide">
                    <div class="gallery-slide">
                        <span class="picture">
                            <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy">
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <button class="gallery-arrow prev" id="{{ $id }}Prev" aria-label="Vorheriger Slide">
        <svg viewBox="0 0 30 30">
            <path
                d="M19.533 15l-9.1-9.45c-.577-.6-.577-1.5 0-2.1.578-.6 1.445-.6 2.023 0l10.11 10.5c.29.3.434.75.434 1.05 0 .45-.144.75-.433 1.05l-10.111 10.5c-.29.3-.578.45-1.012.45-.433 0-.722-.15-1.01-.45-.578-.6-.578-1.5 0-2.1l9.1-9.45z" />
        </svg>
    </button>
    <button class="gallery-arrow next" id="{{ $id }}Next" aria-label="Nächster Slide">
        <svg viewBox="0 0 30 30">
            <path
                d="M19.533 15l-9.1-9.45c-.577-.6-.577-1.5 0-2.1.578-.6 1.445-.6 2.023 0l10.11 10.5c.29.3.434.75.434 1.05 0 .45-.144.75-.433 1.05l-10.111 10.5c-.29.3-.578.45-1.012.45-.433 0-.722-.15-1.01-.45-.578-.6-.578-1.5 0-2.1l9.1-9.45z" />
        </svg>
    </button>
</div>
