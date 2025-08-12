<?php
// TODO: Replace placeholders with actual company information
// TODO: Add actual form processing logic
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | Frevonto — Свяжитесь с нами</title>
    <meta name="description" content="Свяжитесь с Frevonto для обсуждения вашего проекта или вакансии. Офис в Таллине, Эстония. Быстрый отклик в течение 24 часов.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/contacts">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/contacts">
    <meta property="og:title" content="Контакты | Frevonto">
    <meta property="og:description" content="Свяжитесь с Frevonto для обсуждения вашего проекта или вакансии. Быстрый отклик в течение 24 часов.">
    <meta property="og:image" content="https://frevonto.com/img/contact-hero.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Контакты | Frevonto">
    <meta name="twitter:description" content="Свяжитесь с Frevonto для обсуждения вашего проекта или вакансии. Быстрый отклик в течение 24 часов.">
    <meta name="twitter:image" content="https://frevonto.com/img/contact-hero.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
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
                    <img src="img/logo.jpg" alt="Frevonto" class="logo-img">
                    <span class="logo-text">Frevon<span class="accent">to</span></span>
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-link">Главная</a>
                    <a href="about.php" class="nav-link">О нас</a>
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link active">Контакты</a>
               
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
        <!-- Page Header -->
        <section class="contacts-header">
            <div class="container">
                <div class="contacts-header-content">
                    <div class="contacts-header-text">
                        <h1 class="page-title">Свяжитесь с нами</h1>
                        <p class="page-description">Обсудим ваш проект, ответим на вопросы или поможем с поиском идеального специалиста</p>
                        <div class="quick-contact">
                            <div class="quick-contact-item">
                                <div class="quick-icon">
                                    <img src="img/icon-phone.svg" alt="Телефон">
                                </div>
                                <div class="quick-content">
                                    <!-- TODO: Replace with actual phone -->
                                    <strong><a href="tel:+37255549123">+372 5554 9123</a></strong>
                                    <p>Звоните в рабочие часы</p>
                                </div>
                            </div>
                            <div class="quick-contact-item">
                                <div class="quick-icon">
                                    <img src="img/icon-email.svg" alt="Email">
                                </div>
                                <div class="quick-content">
                                    <strong><a href="mailto:info@frevonto.com">info@frevonto.com</a></strong>
                                    <p>Ответим в течение 24 часов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-header-visual">
                        <img src="img/contact-hero.jpg" alt="Офис Frevonto в Таллине" class="contacts-header-image">
                        <div class="contacts-accent"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form & Info -->
        <section class="contact-section">
            <div class="container">
                <div class="contact-content">
                    <!-- Contact Form -->
                    <div class="contact-form-wrapper">
                        <div class="form-header">
                            <h2 class="form-title">Напишите нам</h2>
                            <p class="form-description">Заполните форму, и мы свяжемся с вами в ближайшее время</p>
                        </div>
                        
                        <form class="contact-form" id="contact-form" method="POST" action="">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="contact-name">Имя и фамилия *</label>
                                    <input type="text" id="contact-name" name="name" required>
                                    <span class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Email *</label>
                                    <input type="email" id="contact-email" name="email" required>
                                    <span class="error-message"></span>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="contact-phone">Телефон</label>
                                    <input type="tel" id="contact-phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="contact-company">Компания</label>
                                    <input type="text" id="contact-company" name="company">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inquiry-type">Тип запроса *</label>
                                <select id="inquiry-type" name="inquiry_type" required>
                                    <option value="">Выберите тип запроса</option>
                                    <option value="job_application">Отклик на вакансию</option>
                                    <option value="design_order">Заказ дизайна</option>
                                    <option value="partnership">Партнерство</option>
                                    <option value="consultation">Консультация</option>
                                    <option value="other">Другое</option>
                                </select>
                                <span class="error-message"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="contact-message">Сообщение *</label>
                                <textarea id="contact-message" name="message" rows="5" placeholder="Расскажите подробнее о вашем запросе..." required></textarea>
                                <span class="error-message"></span>
                            </div>
                            
                            <div class="form-group file-upload">
                                <label for="contact-file">Прикрепить файл</label>
                                <div class="file-upload-wrapper">
                                    <input type="file" id="contact-file" name="attachment" accept=".pdf,.doc,.docx,.txt">
                                    <label for="contact-file" class="file-upload-label">
                                        <img src="img/icon-upload.svg" alt="Загрузить">
                                        <span>Выберите файл или перетащите сюда</span>
                                    </label>
                                    <span class="file-name"></span>
                                </div>
                                <small>Поддерживаются файлы: PDF, DOC, DOCX, TXT (до 10 МБ)</small>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="consent" required>
                                    <span class="checkmark"></span>
                                    Согласен с <a href="privacy.php" target="_blank">политикой конфиденциальности</a> и обработкой персональных данных *
                                </label>
                                <span class="error-message"></span>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="newsletter">
                                    <span class="checkmark"></span>
                                    Хочу получать новости о вакансиях и услугах
                                </label>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary btn-large">
                                    <span class="btn-text">Отправить сообщение</span>
                                    <span class="btn-loading">Отправляется...</span>
                                </button>
                                <button type="reset" class="btn btn-secondary">Очистить форму</button>
                            </div>
                        </form>
                        
                        <!-- Form Success Message -->
                        <div class="form-success" id="form-success">
                            <div class="success-icon">
                                <img src="img/icon-success.svg" alt="Успешно">
                            </div>
                            <h3>Сообщение отправлено!</h3>
                            <p>Мы получили ваше сообщение и свяжемся с вами в ближайшее время.</p>
                            <button class="btn btn-secondary" onclick="resetContactForm()">Отправить еще одно сообщение</button>
                        </div>
                    </div>
                    
                    <!-- Contact Information -->
                    <div class="contact-info-wrapper">
                        <div class="contact-info-card">
                            <h3 class="info-title">Контактная информация</h3>
                            <div class="contact-details">
                                <div class="contact-detail">
                                    <div class="detail-icon">
                                        <img src="img/icon-location.svg" alt="Адрес" class="contact-detail-icon">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Адрес офиса</h4>
                                        <!-- TODO: Replace with actual address -->
                                        <p><a href="https://maps.google.com/?q=Tartu+mnt+25,+10117+Tallinn,+Estonia" target="_blank" rel="noopener" class="contact-link"><strong>Tartu mnt 25</strong><br>
                                        10117 Tallinn, Estonia</a></p>
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="detail-icon">
                                        <img src="img/icon-phone.svg" alt="Телефон" class="contact-detail-icon">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Телефон</h4>
                                        <!-- TODO: Replace with actual phone -->
                                        <p><a href="tel:+37255549123" class="contact-link"><strong>+372 5554 9123</strong></a><br>
                                        Пн-Пт: 9:00-18:00 EET</p>
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="detail-icon">
                                        <img src="img/icon-email.svg" alt="Email" class="contact-detail-icon">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Email</h4>
                                        <p><a href="mailto:info@frevonto.com" class="contact-link"><strong>info@frevonto.com</strong></a><br>
                                        Ответим в течение 24 часов</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="working-hours">
                                <h4>Часы работы</h4>
                                <div class="hours-list">
                                    <div class="hours-item">
                                        <span>Понедельник - Пятница</span>
                                        <span>9:00 - 18:00</span>
                                    </div>
                                    <div class="hours-item">
                                        <span>Суббота</span>
                                        <span>10:00 - 16:00</span>
                                    </div>
                                    <div class="hours-item">
                                        <span>Воскресенье</span>
                                        <span>Выходной</span>
                                    </div>
                                </div>
                                <p class="hours-note">В нерабочее время отвечаем на email</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <div class="container">
                <div class="map-header">
                    <h2 class="section-title">Как нас найти</h2>
                    <p class="section-subtitle">Наш офис находится в центре Таллина, рядом с деловым районом</p>
                </div>
                <div class="map-wrapper">
                    <!-- TODO: Replace with actual map embed or interactive map -->
                    <div class="map-placeholder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028.973370849346!2d24.760451877119202!3d59.43351867466487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692935f6bf6a8c1%3A0x47bb17d1fd6a6622!2sTartu%20mnt%2025%2C%2010117%20Tallinn%2C%20Estonia!5e0!3m2!1sen!2sua!4v1755016230632!5m2!1sen!2sua"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="map-info">
                        <h3>Удобное расположение</h3>
                        <ul class="location-benefits">
                            <li>5 минут пешком от остановки Vabaduse väljak</li>
                            <li>Рядом с бизнес-центрами и кафе</li>
                            <li>Парковка для посетителей</li>
                            <li>Доступность для людей с ограниченными возможностями</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title">Часто задаваемые вопросы</h2>
                    <p class="section-subtitle">Ответы на популярные вопросы о наших услугах</p>
                </div>
                <div class="faq-list">
                    <div class="faq-item" data-animate="fade-up">
                        <div class="faq-question">
                            <h3>Как быстро вы отвечаете на запросы?</h3>
                            <button class="faq-toggle">
                                <img src="img/icon-chevron-down.svg" alt="Развернуть">
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Мы стремимся отвечать на все запросы в течение 24 часов в рабочие дни. Срочные вопросы обрабатываем в течение 2-4 часов. В выходные дни время ответа может увеличиться до 48 часов.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-animate="fade-up" data-delay="100">
                        <div class="faq-question">
                            <h3>Работаете ли вы с международными клиентами?</h3>
                            <button class="faq-toggle">
                                <img src="img/icon-chevron-down.svg" alt="Развернуть">
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Да, мы работаем с клиентами по всему миру. Большая часть нашей команды владеет английским языком, и мы успешно реализовали проекты для компаний из США, Германии, Великобритании и других стран.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-animate="fade-up" data-delay="200">
                        <div class="faq-question">
                            <h3>Какие способы оплаты вы принимаете?</h3>
                            <button class="faq-toggle">
                                <img src="img/icon-chevron-down.svg" alt="Развернуть">
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Мы принимаем банковские переводы, PayPal, Wise (бывший TransferWise) и криптовалюты. Для международных клиентов рекомендуем Wise как наиболее выгодный способ перевода.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-animate="fade-up" data-delay="300">
                        <div class="faq-question">
                            <h3>Предоставляете ли вы техническую поддержку после завершения проекта?</h3>
                            <button class="faq-toggle">
                                <img src="img/icon-chevron-down.svg" alt="Развернуть">
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Да, мы предоставляем бесплатную техническую поддержку в течение 3 месяцев после запуска проекта. Это включает исправление багов, небольшие доработки и консультации по использованию.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item" data-animate="fade-up" data-delay="400">
                        <div class="faq-question">
                            <h3>Можно ли посетить ваш офис для личной встречи?</h3>
                            <button class="faq-toggle">
                                <img src="img/icon-chevron-down.svg" alt="Развернуть">
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Конечно! Мы всегда рады личным встречам с клиентами. Рекомендуем предварительно согласовать время встречи по телефону или email, чтобы гарантировать присутствие нужных специалистов.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alternative Contact Methods -->
        <section class="alt-contact">
            <div class="container">
                <div class="alt-contact-content">
                    <div class="alt-method">
                        <div class="alt-icon">
                            <img src="img/icon-calendar.svg" alt="Запланировать встречу">
                        </div>
                        <div class="alt-content">
                            <h3>Запланировать встречу</h3>
                            <p>Забронируйте удобное время для видеозвонка или личной встречи</p>
                            <!-- TODO: Add actual calendar booking link -->
                            <a href="#" class="btn btn-secondary">Выбрать время</a>
                        </div>
                    </div>
                    
                    <div class="alt-method">
                        <div class="alt-icon">
                            <img src="img/icon-chat.svg" alt="Онлайн чат">
                        </div>
                        <div class="alt-content">
                            <h3>Онлайн чат</h3>
                            <p>Задайте вопрос в реальном времени нашей службе поддержки</p>
                            <button class="btn btn-secondary" onclick="openChat()">Начать чат</button>
                        </div>
                    </div>
                    
                    <div class="alt-method">
                        <div class="alt-icon">
                            <img src="img/icon-document.svg" alt="Техническое задание">
                        </div>
                        <div class="alt-content">
                            <h3>Техническое задание</h3>
                            <p>Загрузите готовое ТЗ или заполните нашу анкету для проекта</p>
                            <!-- TODO: Add actual file upload or form link -->
                            <a href="#" class="btn btn-secondary">Загрузить ТЗ</a>
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
    <script src="script.js"></script>
</body>
</html>