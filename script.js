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
document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // 2. Three.js Background
    const initHero3D = () => {
        const container = document.getElementById('hero-canvas');
        if (!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        // Создаем частицы (звезды/узлы)
        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 2000; i++) {
            vertices.push(
                Math.random() * 2000 - 1000,
                Math.random() * 2000 - 1000,
                Math.random() * 2000 - 1000
            );
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
        
        const material = new THREE.PointsMaterial({
            color: 0xf3ff00,
            size: 2,
            transparent: true,
            opacity: 0.5
        });

        const points = new THREE.Points(geometry, material);
        scene.add(points);

        camera.position.z = 500;

        // Анимация при движении мыши
        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.05;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.05;
        });

        const animate = () => {
            requestAnimationFrame(animate);
            points.rotation.x += 0.0005;
            points.rotation.y += 0.0005;
            
            camera.position.x += (mouseX - camera.position.x) * 0.05;
            camera.position.y += (-mouseY - camera.position.y) * 0.05;
            camera.lookAt(scene.position);
            
            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    };

    initHero3D();
});