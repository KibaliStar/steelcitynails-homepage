@props([
    'title' => 'FEATURED NAIL SERVICES',
    'subtitle' => 'All kinds of procedures for your hands and feet.',
    'small' => 'Our services',
    'services' => [],
])

<section class="services-section">
    <div class="services-slider-wrapper">
  <div class="swiper" id="servicesSlider">
    <div class="swiper-wrapper">
      @foreach ($services as $service)
        <div class="swiper-slide">
          <div class="service-slide">
            <span class="picture">
              <img src="{{ $service['image'] }}"
                   alt="{{ $service['name'] }}"
                   loading="lazy">
            </span>
            <p class="caption">
              {{ $service['name'] }}
              <span class="dash">—</span>
              <span class="from">from</span>
              <span class="price"><em>{{ $service['price'] }}</em></span>
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <button class="slider-arrow prev" id="sliderPrev" aria-label="Vorheriger Slide">
    <svg viewBox="0 0 30 30">
      <path d="M19.533 15l-9.1-9.45c-.577-.6-.577-1.5 0-2.1.578-.6 1.445-.6 2.023 0l10.11 10.5c.29.3.434.75.434 1.05 0 .45-.144.75-.433 1.05l-10.111 10.5c-.29.3-.578.45-1.012.45-.433 0-.722-.15-1.01-.45-.578-.6-.578-1.5 0-2.1l9.1-9.45z"/>
    </svg>
  </button>
  <button class="slider-arrow next" id="sliderNext" aria-label="Nächster Slide">
    <svg viewBox="0 0 30 30">
      <path d="M19.533 15l-9.1-9.45c-.577-.6-.577-1.5 0-2.1.578-.6 1.445-.6 2.023 0l10.11 10.5c.29.3.434.75.434 1.05 0 .45-.144.75-.433 1.05l-10.111 10.5c-.29.3-.578.45-1.012.45-.433 0-.722-.15-1.01-.45-.578-.6-.578-1.5 0-2.1l9.1-9.45z"/>
    </svg>
  </button>
</div>
</section>
