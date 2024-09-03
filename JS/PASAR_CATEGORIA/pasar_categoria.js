document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.main__categorias');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active', 'no-select');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active', 'no-select');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active', 'no-select');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; // Ajusta la velocidad de desplazamiento
        slider.scrollLeft = scrollLeft - walk;
    });
});
