<?php
// TODO: Replace placeholders with actual company information
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Политика использования cookies | Frevonto</title>
    <meta name="description" content="Узнайте, как Frevonto использует cookies для улучшения работы сайта. GDPR-совместимая политика с возможностью управления настройками.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/cookies">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/cookies">
    <meta property="og:title" content="Политика использования cookies | Frevonto">
    <meta property="og:description" content="Как Frevonto использует cookies для улучшения работы сайта.">
    <meta property="og:image" content="https://frevonto.com/img/hero-main.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Политика использования cookies | Frevonto">
    <meta name="twitter:description" content="Как Frevonto использует cookies для улучшения работы сайта.">
    <meta name="twitter:image" content="https://frevonto.com/img/hero-main.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-banner-content">
            <div class="cookie-banner-text">
                <h3>Использование cookies</h3>
                <p>Мы используем cookies для улучшения работы сайта и анализа трафика. Вы можете выбрать, какие cookies разрешить.</p>
            </div>
            <div class="cookie-banner-actions">
                <button class="btn btn-secondary cookie-settings-btn">Настройки</button>
                <button class="btn btn-primary cookie-accept-all">Принять все</button>
                <button class="btn btn-outline cookie-reject-all">Отклонить</button>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Modal -->
    <div id="cookie-settings-modal" class="modal cookie-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Настройки cookies</h3>
                <button class="modal-close">&times;</button>
            </div>
            <div class="cookie-settings-content">
                <p>Выберите категории cookies, которые вы хотите разрешить:</p>
                
                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <label class="cookie-category-label">
                            <input type="checkbox" class="cookie-toggle" data-category="necessary" checked disabled>
                            <span class="cookie-category-title">Необходимые cookies</span>
                            <span class="cookie-category-required">Обязательные</span>
                        </label>
                    </div>
                    <div class="cookie-category-description">
                        <p>Эти cookies необходимы для базового функционирования сайта и не могут быть отключены.</p>
                        <details class="cookie-details">
                            <summary>Подробнее</summary>
                            <ul>
                                <li><strong>Сессия:</strong> Сохранение состояния сессии пользователя</li>
                                <li><strong>Безопасность:</strong> Защита от CSRF-атак</li>
                                <li><strong>Согласие:</strong> Сохранение выбранных настроек cookies</li>
                            </ul>
                        </details>
                    </div>
                </div>

                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <label class="cookie-category-label">
                            <input type="checkbox" class="cookie-toggle" data-category="analytics">
                            <span class="cookie-category-title">Аналитические cookies</span>
                        </label>
                    </div>
                    <div class="cookie-category-description">
                        <p>Помогают нам понимать, как посетители взаимодействуют с сайтом, собирая анонимную информацию.</p>
                        <details class="cookie-details">
                            <summary>Подробнее</summary>
                            <ul>
                                <li><strong>Посещения:</strong> Количество посетителей и просмотров страниц</li>
                                <li><strong>Поведение:</strong> Какие страницы наиболее популярны</li>
                                <li><strong>Производительность:</strong> Время загрузки страниц</li>
                                <li><strong>Ошибки:</strong> Отслеживание технических проблем</li>
                            </ul>
                        </details>
                    </div>
                </div>

                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <label class="cookie-category-label">
                            <input type="checkbox" class="cookie-toggle" data-category="marketing">
                            <span class="cookie-category-title">Маркетинговые cookies</span>
                        </label>
                    </div>
                    <div class="cookie-category-description">
                        <p>Используются для показа релевантной рекламы и измерения эффективности рекламных кампаний.</p>
                        <details class="cookie-details">
                            <summary>Подробнее</summary>
                            <ul>
                                <li><strong>Реклама:</strong> Персонализация рекламных объявлений</li>
                                <li><strong>Ретаргетинг:</strong> Показ релевантных предложений</li>
                                <li><strong>Социальные сети:</strong> Интеграция с социальными платформами</li>
                                <li><strong>Email-маркетинг:</strong> Отслеживание эффективности рассылок</li>
                            </ul>
                        </details>
                    </div>
                </div>

                <div class="cookie-category">
                    <div class="cookie-category-header">
                        <label class="cookie-category-label">
                            <input type="checkbox" class="cookie-toggle" data-category="functional">
                            <span class="cookie-category-title">Функциональные cookies</span>
                        </label>
                    </div>
                    <div class="cookie-category-description">
                        <p>Обеспечивают расширенную функциональность и персонализацию сайта.</p>
                        <details class="cookie-details">
                            <summary>Подробнее</summary>
                            <ul>
                                <li><strong>Предпочтения:</strong> Сохранение выбранного языка и темы</li>
                                <li><strong>Чат:</strong> Функционирование системы онлайн-поддержки</li>
                                <li><strong>Формы:</strong> Сохранение заполненных данных</li>
                                <li><strong>Видео:</strong> Интеграция с видеоплатформами</li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>
            <div class="cookie-settings-actions">
                <button class="btn btn-secondary cookie-save-settings">Сохранить настройки</button>
                <button class="btn btn-primary cookie-accept-selected">Принять выбранные</button>
            </div>
        </div>
    </div>

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
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link">Контакты</a>
                    <div class="nav-dropdown">
                        <span class="nav-link active">Политики</span>
                        <div class="dropdown-content">
                            <a href="privacy.php">Конфиденциальность</a>
                            <a href="cookies.php" class="active">Cookies</a>
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
        <section class="legal-page">
            <div class="container">
                <div class="legal-content">
                    <div class="legal-header">
                        <h1 class="page-title">Политика использования cookies</h1>
                        <p class="last-updated">Последнее обновление: <?php echo date('d.m.Y'); ?></p>
                        <div class="cookie-manage">
                            <button class="btn btn-secondary manage-cookies-btn">Управлять настройками cookies</button>
                        </div>
                    </div>

                    <div class="legal-navigation">
                        <nav class="legal-nav">
                            <a href="#what-are-cookies">Что такое cookies</a>
                            <a href="#how-we-use">Как мы используем</a>
                            <a href="#cookie-types">Типы cookies</a>
                            <a href="#third-party">Сторонние cookies</a>
                            <a href="#manage-cookies">Управление cookies</a>
                            <a href="#changes">Изменения</a>
                        </nav>
                    </div>

                    <div class="legal-sections">
                        <section id="what-are-cookies" class="legal-section">
                            <h2>1. Что такое cookies</h2>
                            <p>Cookies — это небольшие текстовые файлы, которые веб-сайты сохраняют на вашем устройстве (компьютер, планшет, смартфон) при посещении. Они широко используются для обеспечения работы веб-сайтов или более эффективной работы, а также для предоставления информации владельцам сайта.</p>
                            
                            <div class="info-box">
                                <h3>Важно знать</h3>
                                <ul>
                                    <li>Cookies не могут повредить ваше устройство или файлы</li>
                                    <li>Они не содержат вирусов или вредоносного кода</li>
                                    <li>Большинство cookies содержат анонимную информацию</li>
                                    <li>Вы можете управлять cookies в настройках браузера</li>
                                </ul>
                            </div>
                        </section>

                        <section id="how-we-use" class="legal-section">
                            <h2>2. Как мы используем cookies</h2>
                            <p>Frevonto использует cookies для следующих целей:</p>
                            
                            <div class="usage-grid">
                                <div class="usage-item">
                                    <div class="usage-icon">
                                        <img src="/img/icon-security.svg" alt="Безопасность">
                                    </div>
                                    <h3>Безопасность</h3>
                                    <p>Защита от мошенничества и обеспечение безопасности пользователей</p>
                                </div>
                                
                                <div class="usage-item">
                                    <div class="usage-icon">
                                        <img src="/img/icon-performance.svg" alt="Производительность">
                                    </div>
                                    <h3>Производительность</h3>
                                    <p>Оптимизация загрузки страниц и улучшение работы сайта</p>
                                </div>
                                
                                <div class="usage-item">
                                    <div class="usage-icon">
                                        <img src="/img/icon-personalization.svg" alt="Персонализация">
                                    </div>
                                    <h3>Персонализация</h3>
                                    <p>Сохранение ваших предпочтений и настроек</p>
                                </div>
                                
                                <div class="usage-item">
                                    <div class="usage-icon">
                                        <img src="/img/icon-analytics.svg" alt="Аналитика">
                                    </div>
                                    <h3>Аналитика</h3>
                                    <p>Понимание того, как посетители используют наш сайт</p>
                                </div>
                            </div>
                        </section>

                        <section id="cookie-types" class="legal-section">
                            <h2>3. Типы cookies, которые мы используем</h2>
                            
                            <div class="cookie-types">
                                <div class="cookie-type-card necessary">
                                    <div class="cookie-type-header">
                                        <h3>Необходимые cookies</h3>
                                        <span class="cookie-type-badge required">Обязательные</span>
                                    </div>
                                    <p>Эти cookies необходимы для работы сайта и не могут быть отключены в наших системах.</p>
                                    
                                    <div class="cookie-list">
                                        <div class="cookie-item">
                                            <h4>session_id</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Сохранение сессии пользователя</span>
                                                <span><strong>Срок:</strong> До закрытия браузера</span>
                                                <span><strong>Тип:</strong> Первая сторона</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>csrf_token</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Защита от CSRF-атак</span>
                                                <span><strong>Срок:</strong> 24 часа</span>
                                                <span><strong>Тип:</strong> Первая сторона</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>cookie_consent</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Сохранение настроек cookies</span>
                                                <span><strong>Срок:</strong> 1 год</span>
                                                <span><strong>Тип:</strong> Первая сторона</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cookie-type-card analytics">
                                    <div class="cookie-type-header">
                                        <h3>Аналитические cookies</h3>
                                        <span class="cookie-type-badge optional">По выбору</span>
                                    </div>
                                    <p>Эти cookies позволяют нам подсчитывать посещения и источники трафика.</p>
                                    
                                    <div class="cookie-list">
                                        <div class="cookie-item">
                                            <h4>_ga</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Различение пользователей</span>
                                                <span><strong>Срок:</strong> 2 года</span>
                                                <span><strong>Поставщик:</strong> Google Analytics</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>_gat</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Ограничение скорости запросов</span>
                                                <span><strong>Срок:</strong> 1 минута</span>
                                                <span><strong>Поставщик:</strong> Google Analytics</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>_gid</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Различение пользователей</span>
                                                <span><strong>Срок:</strong> 24 часа</span>
                                                <span><strong>Поставщик:</strong> Google Analytics</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cookie-type-card marketing">
                                    <div class="cookie-type-header">
                                        <h3>Маркетинговые cookies</h3>
                                        <span class="cookie-type-badge optional">По выбору</span>
                                    </div>
                                    <p>Эти cookies используются для отслеживания посетителей на веб-сайтах.</p>
                                    
                                    <div class="cookie-list">
                                        <div class="cookie-item">
                                            <h4>fbp</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Пиксель Facebook для рекламы</span>
                                                <span><strong>Срок:</strong> 3 месяца</span>
                                                <span><strong>Поставщик:</strong> Facebook</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>_gcl_au</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Эксперименты с рекламой</span>
                                                <span><strong>Срок:</strong> 3 месяца</span>
                                                <span><strong>Поставщик:</strong> Google AdSense</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cookie-type-card functional">
                                    <div class="cookie-type-header">
                                        <h3>Функциональные cookies</h3>
                                        <span class="cookie-type-badge optional">По выбору</span>
                                    </div>
                                    <p>Эти cookies обеспечивают расширенную функциональность и персонализацию.</p>
                                    
                                    <div class="cookie-list">
                                        <div class="cookie-item">
                                            <h4>lang_preference</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Сохранение выбранного языка</span>
                                                <span><strong>Срок:</strong> 1 год</span>
                                                <span><strong>Тип:</strong> Первая сторона</span>
                                            </div>
                                        </div>
                                        
                                        <div class="cookie-item">
                                            <h4>theme_preference</h4>
                                            <div class="cookie-details">
                                                <span><strong>Цель:</strong> Сохранение выбранной темы</span>
                                                <span><strong>Срок:</strong> 6 месяцев</span>
                                                <span><strong>Тип:</strong> Первая сторона</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="third-party" class="legal-section">
                            <h2>4. Сторонние cookies</h2>
                            <p>Некоторые cookies устанавливаются сторонними сервисами, которые отображаются на наших страницах:</p>
                            
                            <div class="third-party-services">
                                <div class="service-card">
                                    <div class="service-header">
                                        <img src="/img/service-google-analytics.svg" alt="Google Analytics" class="service-logo">
                                        <div class="service-info">
                                            <h3>Google Analytics</h3>
                                            <span class="service-type">Аналитика</span>
                                        </div>
                                    </div>
                                    <p>Предоставляет статистику посещений и поведения пользователей на сайте.</p>
                                    <a href="https://policies.google.com/privacy" target="_blank" class="service-policy">Политика конфиденциальности</a>
                                </div>
                                
                                <div class="service-card">
                                    <div class="service-header">
                                        <img src="/img/service-facebook.svg" alt="Facebook" class="service-logo">
                                        <div class="service-info">
                                            <h3>Facebook Pixel</h3>
                                            <span class="service-type">Реклама</span>
                                        </div>
                                    </div>
                                    <p>Помогает измерять эффективность рекламы и создавать целевые аудитории.</p>
                                    <a href="https://www.facebook.com/privacy/explanation" target="_blank" class="service-policy">Политика конфиденциальности</a>
                                </div>
                                
                                <div class="service-card">
                                    <div class="service-header">
                                        <img src="/img/service-linkedin.svg" alt="LinkedIn" class="service-logo">
                                        <div class="service-info">
                                            <h3>LinkedIn Insight Tag</h3>
                                            <span class="service-type">Реклама</span>
                                        </div>
                                    </div>
                                    <p>Отслеживает конверсии и предоставляет данные для ретаргетинга.</p>
                                    <a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" class="service-policy">Политика конфиденциальности</a>
                                </div>
                            </div>
                        </section>

                        <section id="manage-cookies" class="legal-section">
                            <h2>5. Управление cookies</h2>
                            
                            <h3>5.1 Настройки на нашем сайте</h3>
                            <p>Вы можете управлять настройками cookies в любое время:</p>
                            <div class="manage-options">
                                <button class="btn btn-primary manage-cookies-btn">Управлять настройками cookies</button>
                            </div>

                            <h3>5.2 Настройки браузера</h3>
                            <p>Большинство браузеров позволяют управлять cookies через настройки:</p>
                            
                            <div class="browser-instructions">
                                <details class="browser-detail">
                                    <summary class="browser-name">
                                        <img src="/img/browser-chrome.svg" alt="Chrome">
                                        Google Chrome
                                    </summary>
                                    <div class="browser-steps">
                                        <ol>
                                            <li>Откройте Chrome и нажмите на три точки в правом верхнем углу</li>
                                            <li>Выберите "Настройки" → "Конфиденциальность и безопасность"</li>
                                            <li>Нажмите "Файлы cookie и другие данные сайтов"</li>
                                            <li>Выберите желаемые настройки</li>
                                        </ol>
                                    </div>
                                </details>
                                
                                <details class="browser-detail">
                                    <summary class="browser-name">
                                        <img src="/img/browser-firefox.svg" alt="Firefox">
                                        Mozilla Firefox
                                    </summary>
                                    <div class="browser-steps">
                                        <ol>
                                            <li>Откройте Firefox и нажмите на три линии в правом верхнем углу</li>
                                            <li>Выберите "Настройки" → "Приватность и защита"</li>
                                            <li>В разделе "Куки и данные сайтов" настройте параметры</li>
                                        </ol>
                                    </div>
                                </details>
                                
                                <details class="browser-detail">
                                    <summary class="browser-name">
                                        <img src="/img/browser-safari.svg" alt="Safari">
                                        Safari
                                    </summary>
                                    <div class="browser-steps">
                                        <ol>
                                            <li>Откройте Safari и выберите "Safari" → "Настройки"</li>
                                            <li>Перейдите на вкладку "Конфиденциальность"</li>
                                            <li>Настройте параметры "Файлы cookie и данные веб-сайтов"</li>
                                        </ol>
                                    </div>
                                </details>
                                
                                <details class="browser-detail">
                                    <summary class="browser-name">
                                        <img src="/img/browser-edge.svg" alt="Edge">
                                        Microsoft Edge
                                    </summary>
                                    <div class="browser-steps">
                                        <ol>
                                            <li>Откройте Edge и нажмите на три точки в правом верхнем углу</li>
                                            <li>Выберите "Настройки" → "Файлы cookie и разрешения сайтов"</li>
                                            <li>Нажмите "Файлы cookie и данные сайта"</li>
                                            <li>Настройте желаемые параметры</li>
                                        </ol>
                                    </div>
                                </details>
                            </div>

                            <div class="warning-box">
                                <h4>⚠️ Важное предупреждение</h4>
                                <p>Отключение некоторых cookies может повлиять на функциональность сайта. Некоторые функции могут работать неправильно или быть недоступными.</p>
                            </div>
                        </section>

                        <section id="changes" class="legal-section">
                            <h2>6. Изменения в политике cookies</h2>
                            <p>Мы можем время от времени обновлять эту политику использования cookies. Любые изменения будут опубликованы на этой странице с указанием даты последнего обновления.</p>
                            
                            <p>Существенные изменения будут доведены до вашего сведения через:</p>
                            <ul>
                                <li>Уведомление на главной странице сайта</li>
                                <li>Email-уведомление (если у нас есть ваш адрес)</li>
                                <li>Обновленный баннер cookie-согласия</li>
                            </ul>

                            <h3>Контактная информация</h3>
                            <p>Если у вас есть вопросы о нашем использовании cookies, свяжитесь с нами:</p>
                            <div class="contact-details">
                                <!-- TODO: Replace with actual email -->
                                <p><strong>Email:</strong> privacy@frevonto.com<br>
                                <!-- TODO: Replace with actual phone -->
                                <strong>Телефон:</strong> +372 6xx xxxx<br>
                                <!-- TODO: Replace with actual address -->
                                <strong>Адрес:</strong> [ADDRESS_PLACEHOLDER], Tallinn, 101xx, Estonia</p>
                            </div>
                        </section>
                    </div>

                    <div class="legal-footer">
                        <p>Дата вступления в силу: <?php echo date('d.m.Y'); ?></p>
                        <div class="legal-actions">
                            <button class="btn btn-primary manage-cookies-btn">Настройки cookies</button>
                            <a href="privacy.php" class="btn btn-secondary">Политика конфиденциальности</a>
                        </div>
                    </div>
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
                            <img src="/img/logo.svg" alt="Frevonto" class="logo-img">
                            <span class="logo-text">Frevon<span class="accent">to</span></span>
                        </div>
                        <p class="footer-description">Находим лучших IT-специалистов для веб-проектов в Эстонии</p>
                    </div>
                    <div class="footer-nav">
                        <div class="footer-column">
                            <h4 class="footer-column-title">Правовая информация</h4>
                            <nav class="footer-links">
                                <a href="privacy.php">Конфиденциальность</a>
                                <a href="cookies.php" class="active">Cookies</a>
                                <a href="terms.php">Условия использования</a>
                                <a href="gdpr.php">GDPR</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="footer-contact">
                    <div class="contact-info">
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