AOS.init({ duration: 1000, once: true });

// Lógica del Cursor Personalizado
const cursor = document.getElementById('custom-cursor');
document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
});

// Efecto del cursor sobre elementos interactivos
const interactives = document.querySelectorAll('a, button, .service-card');
interactives.forEach(el => {
    el.addEventListener('mouseenter', () => {
        cursor.style.transform = 'scale(4)';
        cursor.style.mixBlendMode = 'difference';
        cursor.style.background = '#ffffff';
    });
    el.addEventListener('mouseleave', () => {
        cursor.style.transform = 'scale(1)';
        cursor.style.mixBlendMode = 'normal';
        cursor.style.background = '#ff5722';
    });
});

// Parallax sutil en el Hero
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const heroText = document.querySelector('#inicio h1');
    if (heroText) {
        heroText.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
});
