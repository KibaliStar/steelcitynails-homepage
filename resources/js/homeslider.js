// ===== 1. JSON LADEN =====
async function loadSliderImages() {
    try {
        const response = await fetch('/homeslider.json');
        if (!response.ok) {
            throw new Error(`JSON konnte nicht geladen werden (Status: ${response.status})`);
        }
        const images = await response.json();
        renderSlider(images);
    } catch (error) {
        console.error('Fehler beim Laden des Sliders:', error);
        document.getElementById('sliderTrack').innerHTML = '<span style="color:#fff; padding:0 20px;">⚠️ Bilder konnten nicht geladen werden</span>';
    }
}

// ===== 2. SLIDER RENDERN =====
function renderSlider(images) {
    const track = document.getElementById('sliderTrack');
    
    // Bilder in HTML umwandeln
    const imgElements = images.map(img => 
        `<img src="${img.src}" alt="${img.alt}" loading="lazy" />`
    ).join('');

    // ⭐ Doppelte Kopie für endlosen Loop
    const wrapper = document.createElement('div');
    wrapper.className = 'slider-wrapper';
    wrapper.innerHTML = imgElements + imgElements;
    
    // ⭐ Leeren Track leeren und Wrapper einfügen
    track.innerHTML = '';
    track.appendChild(wrapper);

    // Dynamische Animationsdauer
    const duration = Math.max(120, images.length * 12);
    wrapper.style.animationDuration = duration + 's';
}

// ===== 3. START =====
document.addEventListener('DOMContentLoaded', loadSliderImages);