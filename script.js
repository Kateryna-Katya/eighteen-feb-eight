// Инициализация иконок Lucide
document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    // Эффект скролла для хедера
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 10, 10, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(10, 10, 10, 0.8)';
        }
    });

    // Бургер-меню (базовая логика)
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
        // Здесь можно добавить открытие мобильного меню
        console.log('Mobile menu toggled');
    });
});