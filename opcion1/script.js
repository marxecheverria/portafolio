// Inicializar animaciones de scroll
AOS.init({
    duration: 1000,
    once: true,
    mirror: false
});

// Cambio de color del nav al hacer scroll
window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.style.paddingTop = '1rem';
        nav.style.paddingBottom = '1rem';
        nav.classList.add('shadow-2xl');
    } else {
        nav.style.paddingTop = '1.5rem';
        nav.style.paddingBottom = '1.5rem';
        nav.classList.remove('shadow-2xl');
    }
});
