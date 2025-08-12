<?php
// TODO: Replace placeholders with actual company information
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Что ищем и предлагаем | Frevonto — Вакансии и дизайн‑услуги</title>
    <meta name="description" content="Вакансии для IT‑специалистов в Эстонии и профессиональные дизайн‑пакеты для бизнеса. Конкурентные ставки и интересные проекты.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/offers">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/offers">
    <meta property="og:title" content="Что ищем и предлагаем | Frevonto">
    <meta property="og:description" content="Вакансии для IT‑специалистов в Эстонии и дизайн‑пакеты для бизнеса.">
    <meta property="og:image" content="https://frevonto.com/img/team-collaboration.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Что ищем и предлагаем | Frevonto">
    <meta name="twitter:description" content="Вакансии для IT‑специалистов и дизайн‑пакеты для бизнеса.">
    <meta name="twitter:image" content="https://frevonto.com/img/team-collaboration.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="/img/logo.svg" alt="Frevonto" class="logo-img">
                    <span class="logo-text">Frevon<span class="accent">to</span></span>
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-link">Главная</a>
                    <a href="about.php" class="nav-link">О нас</a>
                    <a href="offers.php" class="nav-link active">Что ищем/предлагаем</a>
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
                <button class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Page Navigation -->
        <section class="page-nav">
            <div class="container">
                <div class="page-nav-content">
                    <h1 class="page-title">Что ищем и предлагаем</h1>
                    <div class="page-nav-links">
                        <a href="#jobs" class="nav-link-large active" data-section="jobs">Вакансии для специалистов</a>
                        <a href="#design" class="nav-link-large" data-section="design">Дизайн-услуги для бизнеса</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jobs Section -->
        <section id="jobs" class="jobs-section active-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Открытые вакансии</h2>
                    <p class="section-subtitle">Присоединяйтесь к команде профессионалов и работайте над интересными проектами</p>
                </div>

                <!-- Job Filters -->
                <div class="job-filters">
                    <div class="filter-group">
                        <label for="role-filter">Роль:</label>
                        <select id="role-filter" class="filter-select">
                            <option value="all">Все роли</option>
                            <option value="designer">UI/UX Дизайнер</option>
                            <option value="frontend">Frontend разработчик</option>
                            <option value="php">PHP разработчик</option>
                            <option value="qa">QA инженер</option>
                            <option value="pm">Project Manager</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="employment-filter">Занятость:</label>
                        <select id="employment-filter" class="filter-select">
                            <option value="all">Любая</option>
                            <option value="fulltime">Full-time</option>
                            <option value="parttime">Part-time</option>
                            <option value="project">Проектно</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="salary-filter">Диапазон ставки:</label>
                        <select id="salary-filter" class="filter-select">
                            <option value="all">Любой</option>
                            <option value="junior">€15-25/час</option>
                            <option value="middle">€25-40/час</option>
                            <option value="senior">€40-60/час</option>
                        </select>
                    </div>
                    <button class="filter-reset">Сбросить фильтры</button>
                </div>

                <!-- Job Cards -->
                <div class="jobs-grid">
                    <!-- UI/UX Designer -->
                    <div class="job-card" data-role="designer" data-employment="fulltime,parttime,project" data-salary="middle">
                        <div class="job-header">
                            <div class="job-icon">
                                <img src="/img/icon-designer.svg" alt="UI/UX Designer">
                            </div>
                            <div class="job-title-group">
                                <h3 class="job-title">UI/UX Дизайнер</h3>
                                <div class="job-types">
                                    <span class="job-type">Full-time</span>
                                    <span class="job-type">Part-time</span>
                                    <span class="job-type">Проектно</span>
                                </div>
                            </div>
                            <div class="job-salary">€18-45/час</div>
                        </div>
                        <div class="job-content">
                            <div class="job-description">
                                <h4>Обязанности:</h4>
                                <ul>
                                    <li>Создание пользовательских интерфейсов для веб-приложений</li>
                                    <li>Проведение UX-исследований и анализ пользовательских сценариев</li>
                                    <li>Разработка дизайн-систем и UI-китов</li>
                                    <li>Создание интерактивных прототипов в Figma</li>
                                    <li>Сотрудничество с разработчиками для реализации дизайна</li>
                                </ul>
                            </div>
                            <div class="job-requirements">
                                <h4>Требования:</h4>
                                <ul>
                                    <li>Опыт работы в UX/UI дизайне от 2+ лет</li>
                                    <li>Владение Figma, Adobe Creative Suite</li>
                                    <li>Понимание принципов веб-типографики и композиции</li>
                                    <li>Знание HTML/CSS на базовом уровне</li>
                                    <li>Английский язык на уровне B2+</li>
                                    <li>Портфолио с коммерческими проектами</li>
                                </ul>
                            </div>
                            <div class="job-benefits">
                                <h4>Что предлагаем:</h4>
                                <ul>
                                    <li>Удаленная работа или офис в Таллине</li>
                                    <li>Гибкий график и возможность part-time</li>
                                    <li>Участие в международных проектах</li>
                                    <li>Профессиональное развитие и обучение</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-primary job-apply-btn" data-job="designer">Откликнуться</button>
                            <button class="job-bookmark"><img src="/img/icon-bookmark.svg" alt="Сохранить"></button>
                        </div>
                    </div>

                    <!-- Frontend Developer -->
                    <div class="job-card" data-role="frontend" data-employment="fulltime,parttime,project" data-salary="middle,senior">
                        <div class="job-header">
                            <div class="job-icon">
                                <img src="/img/icon-frontend.svg" alt="Frontend Developer">
                            </div>
                            <div class="job-title-group">
                                <h3 class="job-title">Frontend разработчик</h3>
                                <div class="job-types">
                                    <span class="job-type">Full-time</span>
                                    <span class="job-type">Part-time</span>
                                    <span class="job-type">Проектно</span>
                                </div>
                            </div>
                            <div class="job-salary">€22-50/час</div>
                        </div>
                        <div class="job-content">
                            <div class="job-description">
                                <h4>Обязанности:</h4>
                                <ul>
                                    <li>Верстка современных адаптивных интерфейсов</li>
                                    <li>Разработка интерактивных компонентов на JavaScript</li>
                                    <li>Оптимизация производительности веб-приложений</li>
                                    <li>Интеграция с REST API и GraphQL</li>
                                    <li>Кроссбраузерная совместимость и тестирование</li>
                                </ul>
                            </div>
                            <div class="job-requirements">
                                <h4>Требования:</h4>
                                <ul>
                                    <li>Опыт коммерческой разработки от 3+ лет</li>
                                    <li>Уверенное знание HTML5, CSS3, JavaScript ES6+</li>
                                    <li>Опыт работы с React, Vue.js или Angular</li>
                                    <li>Знание препроцессоров (Sass, Less)</li>
                                    <li>Опыт работы с системами сборки (Webpack, Vite)</li>
                                    <li>Git, понимание принципов работы в команде</li>
                                </ul>
                            </div>
                            <div class="job-benefits">
                                <h4>Что предлагаем:</h4>
                                <ul>
                                    <li>Технически интересные проекты</li>
                                    <li>Современный стек технологий</li>
                                    <li>Код-ревью и менторство</li>
                                    <li>Возможность влиять на архитектурные решения</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-primary job-apply-btn" data-job="frontend">Откликнуться</button>
                            <button class="job-bookmark"><img src="/img/icon-bookmark.svg" alt="Сохранить"></button>
                        </div>
                    </div>

                    <!-- PHP Developer -->
                    <div class="job-card" data-role="php" data-employment="fulltime,parttime,project" data-salary="middle,senior">
                        <div class="job-header">
                            <div class="job-icon">
                                <img src="/img/icon-php.svg" alt="PHP Developer">
                            </div>
                            <div class="job-title-group">
                                <h3 class="job-title">PHP разработчик</h3>
                                <div class="job-types">
                                    <span class="job-type">Full-time</span>
                                    <span class="job-type">Part-time</span>
                                    <span class="job-type">Проектно</span>
                                </div>
                            </div>
                            <div class="job-salary">€25-55/час</div>
                        </div>
                        <div class="job-content">
                            <div class="job-description">
                                <h4>Обязанности:</h4>
                                <ul>
                                    <li>Разработка backend-части веб-приложений</li>
                                    <li>Проектирование и реализация REST API</li>
                                    <li>Работа с базами данных (MySQL, PostgreSQL)</li>
                                    <li>Интеграция с внешними сервисами и API</li>
                                    <li>Оптимизация производительности и масштабируемости</li>
                                </ul>
                            </div>
                            <div class="job-requirements">
                                <h4>Требования:</h4>
                                <ul>
                                    <li>Опыт разработки на PHP от 4+ лет</li>
                                    <li>Знание Laravel, Symfony или других фреймворков</li>
                                    <li>Опыт проектирования баз данных</li>
                                    <li>Понимание принципов SOLID, DRY, KISS</li>
                                    <li>Опыт работы с очередями (Redis, RabbitMQ)</li>
                                    <li>Знание Docker, основ DevOps</li>
                                </ul>
                            </div>
                            <div class="job-benefits">
                                <h4>Что предлагаем:</h4>
                                <ul>
                                    <li>Высоконагруженные проекты</li>
                                    <li>Современная инфраструктура</li>
                                    <li>Участие в архитектурных решениях</li>
                                    <li>Конференции и профессиональное развитие</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-primary job-apply-btn" data-job="php">Откликнуться</button>
                            <button class="job-bookmark"><img src="/img/icon-bookmark.svg" alt="Сохранить"></button>
                        </div>
                    </div>

                    <!-- QA Engineer -->
                    <div class="job-card" data-role="qa" data-employment="fulltime,parttime,project" data-salary="junior,middle">
                        <div class="job-header">
                            <div class="job-icon">
                                <img src="/img/icon-qa.svg" alt="QA Engineer">
                            </div>
                            <div class="job-title-group">
                                <h3 class="job-title">QA инженер</h3>
                                <div class="job-types">
                                    <span class="job-type">Full-time</span>
                                    <span class="job-type">Part-time</span>
                                    <span class="job-type">Проектно</span>
                                </div>
                            </div>
                            <div class="job-salary">€20-42/час</div>
                        </div>
                        <div class="job-content">
                            <div class="job-description">
                                <h4>Обязанности:</h4>
                                <ul>
                                    <li>Планирование и выполнение тестирования веб-приложений</li>
                                    <li>Создание тест-кейсов и чек-листов</li>
                                    <li>Автоматизация тестирования (Cypress, Selenium)</li>
                                    <li>API тестирование с Postman/Insomnia</li>
                                    <li>Документирование багов и контроль их исправления</li>
                                </ul>
                            </div>
                            <div class="job-requirements">
                                <h4>Требования:</h4>
                                <ul>
                                    <li>Опыт в тестировании веб-приложений от 2+ лет</li>
                                    <li>Знание методологий тестирования</li>
                                    <li>Опыт автоматизации тестирования</li>
                                    <li>Понимание принципов работы веб-технологий</li>
                                    <li>Опыт тестирования API</li>
                                    <li>Английский язык на уровне B1+</li>
                                </ul>
                            </div>
                            <div class="job-benefits">
                                <h4>Что предлагаем:</h4>
                                <ul>
                                    <li>Разнообразные проекты для тестирования</li>
                                    <li>Современные инструменты автоматизации</li>
                                    <li>Обучение новым технологиям</li>
                                    <li>Участие в планировании развития продукта</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-primary job-apply-btn" data-job="qa">Откликнуться</button>
                            <button class="job-bookmark"><img src="/img/icon-bookmark.svg" alt="Сохранить"></button>
                        </div>
                    </div>

                    <!-- Project Manager -->
                    <div class="job-card" data-role="pm" data-employment="fulltime,parttime" data-salary="senior">
                        <div class="job-header">
                            <div class="job-icon">
                                <img src="/img/icon-pm.svg" alt="Project Manager">
                            </div>
                            <div class="job-title-group">
                                <h3 class="job-title">Project Manager</h3>
                                <div class="job-types">
                                    <span class="job-type">Full-time</span>
                                    <span class="job-type">Консультации</span>
                                </div>
                            </div>
                            <div class="job-salary">€28-60/час</div>
                        </div>
                        <div class="job-content">
                            <div class="job-description">
                                <h4>Обязанности:</h4>
                                <ul>
                                    <li>Управление веб-проектами от планирования до запуска</li>
                                    <li>Координация работы команды разработчиков</li>
                                    <li>Планирование ресурсов и контроль бюджета</li>
                                    <li>Коммуникация с заказчиками и стейкхолдерами</li>
                                    <li>Управление рисками и решение проблем</li>
                                </ul>
                            </div>
                            <div class="job-requirements">
                                <h4>Требования:</h4>
                                <ul>
                                    <li>Опыт управления IT-проектами от 5+ лет</li>
                                    <li>Знание методологий Agile, Scrum, Kanban</li>
                                    <li>Опыт работы с Jira, Asana, Notion</li>
                                    <li>Понимание процессов веб-разработки</li>
                                    <li>Отличные коммуникативные навыки</li>
                                    <li>Английский язык на уровне B2+</li>
                                </ul>
                            </div>
                            <div class="job-benefits">
                                <h4>Что предлагаем:</h4>
                                <ul>
                                    <li>Управление международными проектами</li>
                                    <li>Самостоятельность в принятии решений</li>
                                    <li>Профессиональная команда</li>
                                    <li>Возможность влиять на развитие компании</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-actions">
                            <button class="btn btn-primary job-apply-btn" data-job="pm">Откликнуться</button>
                            <button class="job-bookmark"><img src="/img/icon-bookmark.svg" alt="Сохранить"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Design Services Section -->
        <section id="design" class="design-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Дизайн-услуги для бизнеса</h2>
                    <p class="section-subtitle">Профессиональные веб-дизайн решения с фиксированной стоимостью и гарантированными сроками</p>
                </div>

                <!-- Design Packages -->
                <div class="design-packages">
                    <!-- Lite Package -->
                    <div class="design-package" data-animate="slide-up">
                        <div class="package-header">
                            <div class="package-badge">Популярный</div>
                            <h3 class="package-title">Lite</h3>
                            <div class="package-price">
                                <span class="price">от €450</span>
                                <span class="price-period">за проект</span>
                            </div>
                        </div>
                        <div class="package-content">
                            <div class="package-description">
                                <p>Базовый корпоративный сайт с современным дизайном</p>
                            </div>
                            <div class="package-features">
                                <h4>Что входит:</h4>
                                <ul>
                                    <li>Дизайн главной страницы</li>
                                    <li>2-3 внутренние страницы</li>
                                    <li>Адаптивная версия (desktop/mobile)</li>
                                    <li>Базовая UI-система</li>
                                    <li>Исходники в Figma</li>
                                    <li>2 итерации правок</li>
                                </ul>
                            </div>
                            <div class="package-timeline">
                                <strong>Срок:</strong> 5-7 рабочих дней
                            </div>
                            <div class="package-extras">
                                <h4>Дополнительно:</h4>
                                <ul>
                                    <li>Дополнительная страница — €80</li>
                                    <li>Кастомные иллюстрации — €120</li>
                                    <li>Анимации и микроинтеракции — €150</li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-actions">
                            <button class="btn btn-primary package-order-btn" data-package="lite">Заказать Lite</button>
                            <a href="#design-process" class="package-process">Как происходит работа</a>
                        </div>
                    </div>

                    <!-- Pro Package -->
                    <div class="design-package featured" data-animate="slide-up" data-delay="100">
                        <div class="package-header">
                            <div class="package-badge accent">Рекомендуем</div>
                            <h3 class="package-title">Pro</h3>
                            <div class="package-price">
                                <span class="price">от €900</span>
                                <span class="price-period">за проект</span>
                            </div>
                        </div>
                        <div class="package-content">
                            <div class="package-description">
                                <p>Кастомный бизнес-сайт с уникальным дизайном и UX-исследованием</p>
                            </div>
                            <div class="package-features">
                                <h4>Что входит:</h4>
                                <ul>
                                    <li>UX-анализ и исследование</li>
                                    <li>Дизайн до 8 уникальных страниц</li>
                                    <li>Полная адаптивность (desktop/tablet/mobile)</li>
                                    <li>Дизайн-система с компонентами</li>
                                    <li>Интерактивный прототип</li>
                                    <li>Исходники и гайдлайны</li>
                                    <li>4 итерации правок</li>
                                </ul>
                            </div>
                            <div class="package-timeline">
                                <strong>Срок:</strong> 2-3 недели
                            </div>
                            <div class="package-extras">
                                <h4>Дополнительно:</h4>
                                <ul>
                                    <li>Дополнительная страница — €60</li>
                                    <li>Брендинг и логотип — €300</li>
                                    <li>SEO-оптимизация дизайна — €200</li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-actions">
                            <button class="btn btn-primary package-order-btn" data-package="pro">Заказать Pro</button>
                            <a href="#design-process" class="package-process">Как происходит работа</a>
                        </div>
                    </div>

                    <!-- Custom Package -->
                    <div class="design-package" data-animate="slide-up" data-delay="200">
                        <div class="package-header">
                            <div class="package-badge">Enterprise</div>
                            <h3 class="package-title">Custom</h3>
                            <div class="package-price">
                                <span class="price">от €1500</span>
                                <span class="price-period">за проект</span>
                            </div>
                        </div>
                        <div class="package-content">
                            <div class="package-description">
                                <p>Индивидуальные решения для сложных проектов и крупного бизнеса</p>
                            </div>
                            <div class="package-features">
                                <h4>Что входит:</h4>
                                <ul>
                                    <li>Полное UX-исследование с интервью</li>
                                    <li>Дизайн неограниченного количества страниц</li>
                                    <li>Кастомные компоненты и интеракции</li>
                                    <li>A/B тестирование дизайн-гипотез</li>
                                    <li>Интеграция с корпоративным стилем</li>
                                    <li>Техническое сопровождение</li>
                                    <li>Неограниченные итерации</li>
                                </ul>
                            </div>
                            <div class="package-timeline">
                                <strong>Срок:</strong> по оценке (от 4 недель)
                            </div>
                            <div class="package-extras">
                                <h4>Дополнительно:</h4>
                                <ul>
                                    <li>Аудит текущего дизайна — €400</li>
                                    <li>Консультации по UX — €80/час</li>
                                    <li>Поддержка после запуска — €200/мес</li>
                                </ul>
                            </div>
                        </div>
                        <div class="package-actions">
                            <button class="btn btn-primary package-order-btn" data-package="custom">Обсудить проект</button>
                            <a href="#design-process" class="package-process">Как происходит работа</a>
                        </div>
                    </div>
                </div>

                <!-- Design Examples -->
                <div class="design-examples">
                    <h3 class="examples-title">Примеры наших работ</h3>
                    <div class="examples-grid">
                        <div class="example-item" data-animate="scale-in">
                            <img src="/img/design-example-corporate.jpg" alt="Корпоративный сайт" class="example-image">
                            <div class="example-overlay">
                                <div class="example-info">
                                    <h4>Корпоративный сайт</h4>
                                    <p>Пакет Pro • 2 недели</p>
                                </div>
                            </div>
                        </div>
                        <div class="example-item" data-animate="scale-in" data-delay="100">
                            <img src="/img/design-example-ecommerce.jpg" alt="Интернет-магазин" class="example-image">
                            <div class="example-overlay">
                                <div class="example-info">
                                    <h4>E-commerce платформа</h4>
                                    <p>Пакет Custom • 6 недель</p>
                                </div>
                            </div>
                        </div>
                        <div class="example-item" data-animate="scale-in" data-delay="200">
                            <img src="/img/design-example-landing.jpg" alt="Лендинг страница" class="example-image">
                            <div class="example-overlay">
                                <div class="example-info">
                                    <h4>Продающий лендинг</h4>
                                    <p>Пакет Lite • 1 неделя</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Design Process -->
                <div id="design-process" class="design-process">
                    <h3 class="process-title">Этапы дизайн-проекта</h3>
                    <div class="process-steps">
                        <div class="process-step" data-animate="slide-right">
                            <div class="step-number">01</div>
                            <div class="step-content">
                                <h4>Исследование и бриф</h4>
                                <p>Изучаем ваш бизнес, целевую аудиторию и конкурентов. Определяем цели проекта и ключевые требования.</p>
                                <span class="step-duration">1-2 дня</span>
                            </div>
                        </div>
                        <div class="process-step" data-animate="slide-right" data-delay="100">
                            <div class="step-number">02</div>
                            <div class="step-content">
                                <h4>UX-планирование</h4>
                                <p>Создаем пользовательские сценарии, информационную архитектуру и wireframes основных страниц.</p>
                                <span class="step-duration">2-3 дня</span>
                            </div>
                        </div>
                        <div class="process-step" data-animate="slide-right" data-delay="200">
                            <div class="step-number">03</div>
                            <div class="step-content">
                                <h4>UI-дизайн</h4>
                                <p>Разрабатываем визуальное оформление, создаем дизайн-систему и финальные макеты всех страниц.</p>
                                <span class="step-duration">5-10 дней</span>
                            </div>
                        </div>
                        <div class="process-step" data-animate="slide-right" data-delay="300">
                            <div class="step-number">04</div>
                            <div class="step-content">
                                <h4>Тестирование и доработка</h4>
                                <p>Проводим usability-тестирование, собираем фидбек и вносим финальные правки в дизайн.</p>
                                <span class="step-duration">2-3 дня</span>
                            </div>
                        </div>
                        <div class="process-step" data-animate="slide-right" data-delay="400">
                            <div class="step-number">05</div>
                            <div class="step-content">
                                <h4>Передача и запуск</h4>
                                <p>Передаем все исходники, создаем гайдлайны для разработчиков и сопровождаем процесс верстки.</p>
                                <span class="step-duration">1-2 дня</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content center">
                    <h2 class="cta-title">Готовы начать?</h2>
                    <p class="cta-description">Свяжитесь с нами, и мы подберем идеальное решение для вашего проекта</p>
                    <div class="cta-actions">
                        <a href="contacts.php" class="btn btn-primary btn-large">Обсудить проект</a>
                        <a href="about.php" class="btn btn-secondary btn-large">Узнать больше</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Job Application Modal -->
    <div id="job-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Отклик на вакансию</h3>
                <button class="modal-close">&times;</button>
            </div>
            <form class="job-application-form" id="job-form">
                <div class="form-group">
                    <label for="applicant-name">Имя и фамилия *</label>
                    <input type="text" id="applicant-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="applicant-email">Email *</label>
                    <input type="email" id="applicant-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="applicant-phone">Телефон</label>
                    <input type="tel" id="applicant-phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="position">Позиция</label>
                    <input type="text" id="position" name="position" readonly>
                </div>
                <div class="form-group">
                    <label for="experience">Опыт работы *</label>
                    <textarea id="experience" name="experience" rows="3" placeholder="Кратко расскажите о своем опыте работы" required></textarea>
                </div>
                <div class="form-group">
                    <label for="portfolio-url">Ссылка на портфолио</label>
                    <input type="url" id="portfolio-url" name="portfolio_url" placeholder="https://your-portfolio.com">
                </div>
                <div class="form-group">
                    <label for="cover-letter">Сопроводительное письмо</label>
                    <textarea id="cover-letter" name="cover_letter" rows="4" placeholder="Расскажите, почему вы хотите работать с нами"></textarea>
                </div>
                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="consent" required>
                        <span class="checkmark"></span>
                        Согласен с <a href="privacy.php" target="_blank">политикой конфиденциальности</a> и обработкой персональных данных
                    </label>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Отправить отклик</button>
                    <button type="button" class="btn btn-secondary modal-cancel">Отмена</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Package Order Modal -->
    <div id="package-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Заказ дизайн-пакета</h3>
                <button class="modal-close">&times;</button>
            </div>
            <form class="package-order-form" id="package-form">
                <div class="form-group">
                    <label for="client-name">Имя и фамилия *</label>
                    <input type="text" id="client-name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="client-email">Email *</label>
                    <input type="email" id="client-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="client-company">Компания</label>
                    <input type="text" id="client-company" name="company">
                </div>
                <div class="form-group">
                    <label for="package-type">Выбранный пакет</label>
                    <input type="text" id="package-type" name="package_type" readonly>
                </div>
                <div class="form-group">
                    <label for="project-description">Описание проекта *</label>
                    <textarea id="project-description" name="project_description" rows="4" placeholder="Расскажите о вашем проекте, целях и требованиях" required></textarea>
                </div>
                <div class="form-group">
                    <label for="budget-range">Бюджет</label>
                    <select id="budget-range" name="budget_range">
                        <option value="">Выберите диапазон</option>
                        <option value="400-800">€400-800</option>
                        <option value="800-1500">€800-1500</option>
                        <option value="1500-3000">€1500-3000</option>
                        <option value="3000+">€3000+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="timeline">Желаемые сроки</label>
                    <select id="timeline" name="timeline">
                        <option value="">Выберите срок</option>
                        <option value="asap">Как можно быстрее</option>
                        <option value="1-2weeks">1-2 недели</option>
                        <option value="3-4weeks">3-4 недели</option>
                        <option value="flexible">Гибкие сроки</option>
                    </select>
                </div>
                <div class="form-group checkbox-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="consent" required>
                        <span class="checkmark"></span>
                        Согласен с <a href="privacy.php" target="_blank">политикой конфиденциальности</a> и обработкой персональных данных
                    </label>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Отправить заявку</button>
                    <button type="button" class="btn btn-secondary modal-cancel">Отмена</button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-main">
                    <div class="footer-brand">
                        <div class="logo">
                            <img src="/img/logo.svg" alt="Frevonto" class="logo-img">
                            <span class="logo-text">Frevon<span class="accent">to</span></span>
                        </div>
                        <p class="footer-description">Находим лучших IT-специалистов для веб-проектов в Эстонии</p>
                        <div class="footer-social">
                            <!-- TODO: Add actual social media links -->
                            <a href="#" class="social-link"><img src="/img/social-linkedin.svg" alt="LinkedIn"></a>
                            <a href="#" class="social-link"><img src="/img/social-github.svg" alt="GitHub"></a>
                            <a href="#" class="social-link"><img src="/img/social-telegram.svg" alt="Telegram"></a>
                        </div>
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
                            <img src="/img/icon-location.svg" alt="Адрес" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual address -->
                                <strong>[ADDRESS_PLACEHOLDER]</strong><br>
                                Tallinn, 101xx, Estonia
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="/img/icon-phone.svg" alt="Телефон" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual phone -->
                                <strong>+372 6xx xxxx</strong><br>
                                Пн-Пт: 9:00-18:00 EET
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="/img/icon-email.svg" alt="Email" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual email -->
                                <strong>hello@frevonto.com</strong><br>
                                Ответим в течение 24 часов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Frevonto. Все права защищены.</p>
                <p>Регистрационный код: <!-- TODO: Add company registration number -->[COMPANY_REG_NUMBER]</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>