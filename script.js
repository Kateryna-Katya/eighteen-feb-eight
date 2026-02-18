document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Инициализация AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50
    });

    // 3. Three.js Background (Hero)
    const initHero3D = () => {
        const container = document.getElementById('hero-canvas');
        if (!container) return;
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);
        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 2000; i++) {
            vertices.push(Math.random() * 2000 - 1000, Math.random() * 2000 - 1000, Math.random() * 2000 - 1000);
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
        const material = new THREE.PointsMaterial({ color: 0xf3ff00, size: 2, transparent: true, opacity: 0.4 });
        const points = new THREE.Points(geometry, material);
        scene.add(points);
        camera.position.z = 500;
        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.05;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.05;
        });
        const animate = () => {
            requestAnimationFrame(animate);
            points.rotation.x += 0.0003;
            points.rotation.y += 0.0003;
            camera.position.x += (mouseX - camera.position.x) * 0.05;
            camera.position.y += (-mouseY - camera.position.y) * 0.05;
            camera.lookAt(scene.position);
            renderer.render(scene, camera);
        };
        animate();
    };
    initHero3D();

    // 4. Swiper Reviews
    new Swiper('.reviews-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 768: { slidesPerView: 2 }, 1100: { slidesPerView: 3 } }
    });

    // 5. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 6. Капча
    const captchaText = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaAnswer');
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let correctAnswer = num1 + num2;
    if(captchaText) captchaText.innerText = `${num1} + ${num2} = `;

    // 7. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^\d]/g, '');
    });

    // 8. Обработка формы
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (parseInt(captchaInput.value) !== correctAnswer) {
            alert('Неверный ответ на капчу!');
            return;
        }

        const submitBtn = contactForm.querySelector('.form__submit');
        submitBtn.disabled = true;
        submitBtn.innerText = 'Отправка...';

        // Имитация AJAX
        setTimeout(() => {
            contactForm.style.display = 'none';
            formMessage.classList.add('form__message--success');
            formMessage.innerText = 'Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.';
        }, 1500);
    });

    // 9. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // 10. Sticky Header
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.style.background = window.scrollY > 100 ? 'rgba(10, 10, 10, 0.95)' : 'rgba(10, 10, 10, 0.8)';
    });
});