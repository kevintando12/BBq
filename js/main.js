document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.primary-nav');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', () => {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', String(!isExpanded));
            navigation.classList.toggle('is-open', !isExpanded);
        });
    }

    const gallery = document.querySelector('[data-gallery]');
    if (!gallery) return;

    const slides = [
        { src: 'img/kamado-black-shelves.png', alt: 'Zwarte Kamado met houten zijtafels in de tuin', title: 'Kamado in de tuin' },
        { src: 'img/product-kamado-deck.png', alt: 'Kamado met zijtafels op een terras', title: 'Kamado met zijtafels' },
        { src: 'img/product-kamado-open.png', alt: 'Kamado met deksel open en eten op de grill', title: 'Van het vuur op tafel' }
    ];
    const image = gallery.querySelector('[data-gallery-image]');
    const counter = gallery.querySelector('[data-gallery-counter]');
    const status = gallery.querySelector('[data-gallery-status]');
    const thumbnails = [...gallery.querySelectorAll('[data-gallery-index]')];
    let activeIndex = 0;

    const showSlide = (index) => {
        activeIndex = (index + slides.length) % slides.length;
        const slide = slides[activeIndex];
        image.src = slide.src;
        image.alt = slide.alt;
        counter.textContent = `${String(activeIndex + 1).padStart(2, '0')} / ${String(slides.length).padStart(2, '0')}`;
        status.textContent = `Foto ${activeIndex + 1} van ${slides.length}: ${slide.title}`;
        thumbnails.forEach((thumbnail, thumbnailIndex) => {
            const isActive = thumbnailIndex === activeIndex;
            thumbnail.classList.toggle('is-active', isActive);
            thumbnail.setAttribute('aria-pressed', String(isActive));
        });
    };

    gallery.querySelector('.gallery-previous').addEventListener('click', () => showSlide(activeIndex - 1));
    gallery.querySelector('.gallery-next').addEventListener('click', () => showSlide(activeIndex + 1));
    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener('click', () => showSlide(Number(thumbnail.dataset.galleryIndex)));
    });
    document.addEventListener('keydown', (event) => {
        if (!gallery.contains(document.activeElement)) return;
        if (event.key === 'ArrowLeft') showSlide(activeIndex - 1);
        if (event.key === 'ArrowRight') showSlide(activeIndex + 1);
    });
});
