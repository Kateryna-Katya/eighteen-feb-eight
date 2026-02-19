<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Карьерный апгрейд и инновационные стратегии
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='6' fill='%230A0A0A'/%3E%3Cpath d='M10 22L22 10M22 10H14M22 10V18' stroke='%23F3FF00' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M8 25H24' stroke='%23F3FF00' stroke-width='2' stroke-opacity='0.3' stroke-linecap='round'/%3E%3C/svg%3E">
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>

                <ul class="menu">
                    <li><a href="./#hero" class="menu__link">Главная</a></li>
                    <li><a href="./#strategy" class="menu__link">Стратегии</a></li>
                    <li><a href="./#expertise" class="menu__link">Экспертиза</a></li>
                    <li><a href="./#reviews" class="menu__link">Успех</a></li>
                    <li><a href="./#blog" class="menu__link">Блог</a></li>
                </ul>

                <a href="./#contact" class="btn btn--header">
                    <span>Связаться</span>
                    <i data-lucide="arrow-up-right"></i>
                </a>

                <button class="burger" aria-label="Menu">
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                        или смартфоне), когда вы его посещаете. Это позволяет платформе 
                        <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                        (например, логин, язык, настройки региона Германия и другие параметры) 
                        в течение определенного времени.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong>.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках карьерного консалтинга.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам.
                        </li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение стабильной и безопасной работы платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации контента.</li>
                        <li>Персонализация опыта для пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> 
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> 
                            <a href="tel:+493009014932">+49 30 0901 4932</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Адрес:</strong> 
                            Friedrichstraße 68, 10117 Berlin, Germany
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__dot"></span>
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">
                        Инновационная технология вашего карьерного роста. Решения, которые меняют правила игры на рынке
                        труда Европы.
                    </p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__links">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#strategy">Стратегии</a></li>
                        <li><a href="./#expertise">Экспертиза</a></li>
                        <li><a href="./#blog">Блог</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Контакты</h4>
                    <ul class="footer__contacts">
                        <li>
                            <i data-lucide="phone"></i>
                            <a href="tel:+493009014932">+49 30 0901 4932</a>
                        </li>
                        <li>
                            <i data-lucide="mail"></i>
                            <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <span>Friedrichstraße 68, 10117 Berlin, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy;
                    <?= date('Y') ?>
                    <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
                </p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu__content">
            <ul class="mobile-menu__list">
                <li><a href="./#hero">Главная</a></li>
                <li><a href="./#strategy">Стратегии</a></li>
                <li><a href="./#expertise">Экспертиза</a></li>
                <li><a href="./#reviews">Успех</a></li>
                <li><a href="./#blog">Блог</a></li>
                <li><a href="./#contact" class="btn btn--primary">Консультация</a></li>
            </ul>
        </div>
    </div>
    
    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                    политике</a>.</p>
            <button class="btn btn--primary btn--small" id="acceptCookies">Принять</button>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>