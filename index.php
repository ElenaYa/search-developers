<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frevonto — Поиск IT‑специалистов в Эстонии</title>
    <meta name="description" content="Найдем лучших веб‑разработчиков, дизайнеров и QA специалистов для вашего проекта в Эстонии. Профессиональные дизайн‑пакеты от €450.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/">
    <meta property="og:title" content="Frevonto — Поиск IT‑специалистов в Эстонии">
    <meta property="og:description" content="Найдем лучших веб‑разработчиков, дизайнеров и QA специалистов для вашего проекта в Эстонии. Профессиональные дизайн‑пакеты от €450.">
    <meta property="og:image" content="https://frevonto.com/img/hero-main.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Frevonto — Поиск IT‑специалистов в Эстонии">
    <meta name="twitter:description" content="Найдем лучших веб‑разработчиков, дизайнеров и QA специалистов для вашего проекта в Эстонии. Профессиональные дизайн‑пакеты от €450.">
    <meta name="twitter:image" content="https://frevonto.com/img/hero-main.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content" style="padding-left: 0; padding-right: 0;">
                <div class="logo">
                    <img src="img/logo.jpg" alt="Frevonto" class="logo-img">
                    <span class="logo-text">Frevon<span class="accent">to</span></span>
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-link active">Главная</a>
                    <a href="about.php" class="nav-link">О нас</a>
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link">Контакты</a>
                    <div class="nav-dropdown">
                        <span class="nav-link">Политики</span>
                        <div class="dropdown-content">
                            <a href="privacy.php">Конфиденциальность</a>
                            <a href="cookies.php">Cookies</a>
                            <a href="terms.php">Условия использования</a>
                            <a href="gdpr.php">GDPR</a>
                        </div>
                    </div>
                </nav>
                <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title reveal" data-animate="true"><span class="underline">Находим <span class="gradient-text">лучших IT-специалистов</span> для вашего проекта</span></h1>
                        <p class="hero-description">Собираем команды веб-разработчиков, дизайнеров и QA-инженеров в Эстонии. Быстро, качественно, с гарантией результата.</p>
                        <div class="hero-cta">
                            <a href="offers.php#jobs" class="btn btn-primary">Откликнуться на вакансию</a>
                            <a href="offers.php#design" class="btn btn-secondary">Заказать дизайн</a>
                        </div>
                        <div class="hero-stats">
                            <div class="stat">
                                <span class="stat-number">150+</span>
                                <span class="stat-label">специалистов</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">89%</span>
                                <span class="stat-label">успешных проектов</span>
                            </div>
                            <div class="stat">
                                <span class="stat-number">24ч</span>
                                <span class="stat-label">время отклика</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero-visual">
                        <img src="img/hero-main.jpg" alt="IT команда за работой" class="hero-image">
                        <div class="hero-accent"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-long">
            <div class="container">
                <div class="about-long-content">
                    <h2 class="about-long-title reveal" data-animate="true"><span class="underline">Почему Frevonto</span></h2>
                    <p class="about-long-text">
                        Мы соединяем бизнес-задачи с правильными людьми и технологиями. Наша команда глубоко погружается в контекст, чтобы предложить реалистичные сроки, выверенный стек и понятные процессы. Мы открыто говорим о стоимости и рисках, используем практики CI/CD, пишем поддерживаемый код и аккуратно передаем знание. В работе опираемся на принципы прозрачности, измеримости и постоянного улучшения. Такой подход помогает быстрее достигать ощутимых результатов, сохраняя гибкость и качество на каждом этапе — от гипотез и дизайна до внедрения и поддержки.
                    </p>
                </div>
            </div>
        </section>

        <section class="specialists">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal" data-animate="true"><span class="underline">Кого ищем</span></h2>
                    <p class="section-subtitle">Талантливых специалистов для амбициозных проектов</p>
                </div>
                <div class="specialists-grid">
                    <div class="specialist-card" data-animate="slide-up">
                        <div class="specialist-icon"><i class="fa-solid fa-palette fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">UI/UX Дизайнеры</span></h3>
                        <p class="specialist-description">Создание современных интерфейсов и пользовательских сценариев</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Проектно</span>
                        </div>
                        <div class="specialist-range">€18-40/час</div>
                    </div>
                    <div class="specialist-card" data-animate="slide-up" data-delay="100">
                        <div class="specialist-icon"><i class="fa-solid fa-code fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">Frontend разработчики</span></h3>
                        <p class="specialist-description">HTML5, CSS3, JavaScript, адаптивная верстка</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Проектно</span>
                        </div>
                        <div class="specialist-range">€22-50/час</div>
                    </div>
                    <div class="specialist-card" data-animate="slide-up" data-delay="200">
                        <div class="specialist-icon"><i class="fa-brands fa-php fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">PHP разработчики</span></h3>
                        <p class="specialist-description">Backend разработка, API, работа с базами данных</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Проектно</span>
                        </div>
                        <div class="specialist-range">€25-55/час</div>
                    </div>
                    <div class="specialist-card" data-animate="slide-up" data-delay="300">
                        <div class="specialist-icon"><i class="fa-solid fa-clipboard-check fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">QA инженеры</span></h3>
                        <p class="specialist-description">Тестирование, автоматизация, контроль качества</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Проjectно</span>
                        </div>
                        <div class="specialist-range">€18-40/час</div>
                    </div>
                    <div class="specialist-card" data-animate="slide-up" data-delay="400">
                        <div class="specialist-icon"><i class="fa-solid fa-diagram-project fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">Project Manager</span></h3>
                        <p class="specialist-description">Управление проектами, планирование, координация команд</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Консультации</span>
                        </div>
                        <div class="specialist-range">€28-55/час</div>
                    </div>
                    <div class="specialist-card" data-animate="slide-up" data-delay="500">
                        <div class="specialist-icon"><i class="fa-solid fa-gears fa-2xl" aria-hidden="true"></i></div>
                        <h3 class="specialist-title reveal" data-animate="true"><span class="underline">DevOps инженеры</span></h3>
                        <p class="specialist-description">CI/CD, контейнеризация, инфраструктура как код, мониторинг</p>
                        <div class="specialist-types">
                            <span class="badge">Full-time</span>
                            <span class="badge">Part-time</span>
                            <span class="badge">Проектно</span>
                        </div>
                        <div class="specialist-range">€30-65/час</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="offers">
            <div class="container">
                <div class="offers-content">
                    <div class="offers-text">
                        <h2 class="section-title reveal" data-animate="true"><span class="underline">Что предлагаем</span></h2>
                        <div class="offers-list">
                            <div class="offer-item">
                                <div class="offer-icon"><i class="fa-solid fa-euro-sign fa-xl" aria-hidden="true"></i></div>
                                <div class="offer-content">
                                    <h3>Конкурентные ставки</h3>
                                    <p>Диапазоны от €18 до €60/час в зависимости от опыта и роли</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="offer-icon"><i class="fa-solid fa-sitemap fa-xl" aria-hidden="true"></i></div>
                                <div class="offer-content">
                                    <h3>Четкие процессы</h3>
                                    <p>Структурированная работа с техническими заданиями и регулярным фидбеком</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="offer-icon"><i class="fa-regular fa-eye fa-xl" aria-hidden="true"></i></div>
                                <div class="offer-content">
                                    <h3>Прозрачные задачи</h3>
                                    <p>Детальные брифы, понятные критерии приемки, отсутствие размытых требований</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offers-visual">
                        <img src="img/team-collaboration.jpg" alt="Командная работа" class="offers-image">
                    </div>
                </div>
            </div>
        </section>

        <section class="workflow">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title reveal" data-animate="true"><span class="underline">Как работаем</span></h2>
                    <p class="section-subtitle">Простой и эффективный процесс от первого контакта до результата</p>
                </div>
                <div class="workflow-steps">
                    <div class="workflow-step" data-animate="fade-up">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h3 class="step-title">Бриф и анализ</h3>
                            <p class="step-description">Детально изучаем ваши потребности, техническое задание и требования к специалисту</p>
                        </div>
                    </div>
                    <div class="workflow-step" data-animate="fade-up" data-delay="100">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h3 class="step-title">Подбор и тестирование</h3>
                            <p class="step-description">Находим подходящих кандидатов, проводим техническое интервью и тестовые задания</p>
                        </div>
                    </div>
                    <div class="workflow-step" data-animate="fade-up" data-delay="200">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h3 class="step-title">Старт проекта</h3>
                            <p class="step-description">Знакомим специалиста с проектом, настраиваем процессы взаимодействия</p>
                        </div>
                    </div>
                    <div class="workflow-step" data-animate="fade-up" data-delay="300">
                        <div class="step-number">04</div>
                        <div class="step-content">
                            <h3 class="step-title">Сопровождение</h3>
                            <p class="step-description">Обеспечиваем регулярную обратную связь и решаем возникающие вопросы</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title reveal" data-animate="true"><span class="underline">Портфолио кейсов</span></h2>
                    <p class="section-subtitle">Примеры успешных проектов наших специалистов</p>
                </div>
                <div class="portfolio-grid">
                    <div class="portfolio-card" data-animate="scale-in">
                        <div class="portfolio-image">
                            <img src="img/case-ecommerce.jpg" alt="E-commerce проект">
                            <div class="portfolio-overlay">
                                <span class="portfolio-category">E-commerce</span>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">Интернет-магазин электроники</h3>
                            <p class="portfolio-description">Полный цикл разработки: от UX-исследования до запуска. Интеграция с платежными системами и системой учета.</p>
                            <div class="portfolio-meta">
                                <span class="portfolio-team">Команда: 4 специалиста</span>
                                <span class="portfolio-time">Срок: 6 недель</span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card" data-animate="scale-in" data-delay="100">
                        <div class="portfolio-image">
                            <img src="img/case-corporate.jpg" alt="Корпоративный сайт">
                            <div class="portfolio-overlay">
                                <span class="portfolio-category">Corporate</span>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">Корпоративный сайт IT-компании</h3>
                            <p class="portfolio-description">Современный дизайн с акцентом на технологии. Мультиязычность, адаптивность, SEO-оптимизация.</p>
                            <div class="portfolio-meta">
                                <span class="portfolio-team">Команда: 3 специалиста</span>
                                <span class="portfolio-time">Срок: 3 недели</span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-card" data-animate="scale-in" data-delay="200">
                        <div class="portfolio-image">
                            <img src="img/case-webapp.jpg" alt="Веб-приложение">
                            <div class="portfolio-overlay">
                                <span class="portfolio-category">Web App</span>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3 class="portfolio-title">CRM-система для логистики</h3>
                            <p class="portfolio-description">Сложное веб-приложение с панелями администратора и пользователя. Интеграция с внешними API.</p>
                            <div class="portfolio-meta">
                                <span class="portfolio-team">Команда: 5 специалистов</span>
                                <span class="portfolio-time">Срок: 12 недель</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="technologies">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title reveal" data-animate="true"><span class="underline">Технологии и инструменты</span></h2>
                    <p class="section-subtitle">Современный стек для эффективной разработки</p>
                </div>
                <div class="tech-categories">
                    <div class="tech-category">
                        <h3 class="tech-category-title">Frontend</h3>
                        <div class="tech-icons">
                            <div class="tech-icon"><i class="fa-brands fa-html5 fa-2xl" aria-hidden="true"></i><span>HTML5</span></div>
                            <div class="tech-icon"><i class="fa-brands fa-css3-alt fa-2xl" aria-hidden="true"></i><span>CSS3</span></div>
                            <div class="tech-icon"><i class="fa-brands fa-js fa-2xl" aria-hidden="true"></i><span>JavaScript</span></div>
                            <div class="tech-icon"><i class="fa-brands fa-react fa-2xl" aria-hidden="true"></i><span>React</span></div>
                        </div>
                    </div>
                    <div class="tech-category">
                        <h3 class="tech-category-title">Backend</h3>
                        <div class="tech-icons">
                            <div class="tech-icon"><i class="fa-brands fa-php fa-2xl" aria-hidden="true"></i><span>PHP</span></div>
                            <div class="tech-icon"><i class="fa-brands fa-laravel fa-2xl" aria-hidden="true"></i><span>Laravel</span></div>
                            <div class="tech-icon"><i class="fa-solid fa-database fa-2xl" aria-hidden="true"></i><span>MySQL</span></div>
                            <div class="tech-icon"><i class="fa-brands fa-node-js fa-2xl" aria-hidden="true"></i><span>Node.js</span></div>
                        </div>
                    </div>
                    <div class="tech-category">
                        <h3 class="tech-category-title">Design & Testing</h3>
                        <div class="tech-icons">
                            <div class="tech-icon"><i class="fa-brands fa-figma fa-2xl" aria-hidden="true"></i><span>Figma</span></div>
                            <div class="tech-icon"><i class="fa-solid fa-file-image fa-2xl" aria-hidden="true"></i><span>Photoshop</span></div>
                            <div class="tech-icon"><i class="fa-solid fa-vial-circle-check fa-2xl" aria-hidden="true"></i><span>Cypress</span></div>
                            <div class="tech-icon"><i class="fa-solid fa-envelope-open-text fa-2xl" aria-hidden="true"></i><span>Postman</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-banner">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title reveal" data-animate="true"><span class="underline">Готовы начать проект?</span></h2>
                    <p class="cta-description">Расскажите о ваших потребностях, и мы подберем идеальную команду специалистов</p>
                    <div class="cta-actions">
                        <a href="contacts.php" class="btn btn-primary btn-large">Обсудить проект</a>
                        <a href="offers.php" class="btn btn-secondary btn-large">Посмотреть вакансии</a>
                    </div>
                </div>
                <div class="cta-visual">
                    <img src="img/cta-illustration.jpg" alt="Начать проект" class="cta-image">
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-main">
                    <div class="footer-brand">
                        <div class="logo">
                            <img src="img/logo.jpg" alt="Frevonto" class="logo-img">
                            <span class="logo-text">Frevon<span class="accent">to</span></span>
                        </div>
                        <p class="footer-description">Находим лучших IT-специалистов для веб-проектов в Эстонии</p>
                      
                    </div>
                    <div class="footer-nav">
                        <div class="footer-column">
                            <h4 class="footer-column-title">Компания</h4>
                            <nav class="footer-links">
                                <a href="about.php">О нас</a>
                                <a href="offers.php">Вакансии</a>
                                <a href="offers.php#design">Дизайн-услуги</a>
                                <a href="contacts.php">Контакты</a>
                            </nav>
                        </div>
                        <div class="footer-column">
                            <h4 class="footer-column-title">Специалисты</h4>
                            <nav class="footer-links">
                                <a href="offers.php#designer">UI/UX Дизайнеры</a>
                                <a href="offers.php#frontend">Frontend разработчики</a>
                                <a href="offers.php#php">PHP разработчики</a>
                                <a href="offers.php#qa">QA инженеры</a>
                                <a href="offers.php#pm">Project Manager</a>
                            </nav>
                        </div>
                        <div class="footer-column">
                            <h4 class="footer-column-title">Правовая информация</h4>
                            <nav class="footer-links">
                                <a href="privacy.php">Конфиденциальность</a>
                                <a href="cookies.php">Cookies</a>
                                <a href="terms.php">Условия использования</a>
                                <a href="gdpr.php">GDPR</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="footer-contact">
                    <div class="contact-info">
                        <div class="contact-item">
                            <img src="img/icon-location.svg" alt="Адрес" class="contact-icon">
                            <div>
                                <a href="https://maps.google.com/?q=Tartu+mnt+25,+10117+Tallinn,+Estonia" target="_blank" rel="noopener" class="contact-link">
                                    <strong>Tartu mnt 25</strong><br>
                                    10117 Tallinn, Estonia
                                </a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="img/icon-phone.svg" alt="Телефон" class="contact-icon">
                            <div>
                                <a href="tel:+37255549123" class="contact-link">
                                    <strong>+372 5554 9123</strong>
                                </a><br>
                                Пн-Пт: 9:00-18:00 EET
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="img/icon-email.svg" alt="Email" class="contact-icon">
                            <div>
                                <a href="mailto:info@frevonto.com" class="contact-link">
                                    <strong>info@frevonto.com</strong>
                                </a><br>
                                Ответим в течение 24 часов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Frevonto. Все права защищены.</p>
               
            </div>
        </div>
    </footer>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Frevonto",
      "url": "https://frevonto.com/",
      "logo": "https://frevonto.com/img/logo.jpg",
      "contactPoint": [{
        "@type": "ContactPoint",
        "contactType": "customer support",
        "email": "info@frevonto.com",
        "telephone": "+372 5554 9123",
        "areaServed": "EE",
        "availableLanguage": ["ru", "en"]
      }]
    }
    </script>

    <script src="script.js"></script>
</body>
</html>