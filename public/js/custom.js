document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const sidebar   = document.getElementById('sidebar');
    const overlay   = document.getElementById('overlay');

    if (!hamburger || !sidebar || !overlay) return;

    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
    });

    sidebar.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });
    });

    const popularSlider = document.querySelector('.popularSwiper');

    if (popularSlider && typeof Swiper !== 'undefined') {
        new Swiper('.popularSwiper', {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 },
            }
        });
    }
});

