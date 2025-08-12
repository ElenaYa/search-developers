<?php
// TODO: Replace placeholders with actual company information
// TODO: Add actual form processing logic
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | WebTalent Est - Свяжитесь с нами</title>
    <meta name="description" content="Свяжитесь с WebTalent Est для обсуждения вашего проекта или вакансии. Офис в Таллине, Эстония. Быстрый отклик в течение 24 часов.">
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
                    <img src="img/logo.svg" alt="WebTalent Est" class="logo-img">
                    <span class="logo-text">WebTalent<span class="accent">Est</span></span>
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-link">Главная</a>
                    <a href="about.php" class="nav-link">О нас</a>
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link active">Контакты</a>
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
                                    <strong>+372 6xx xxxx</strong>
                                    <p>Звоните в рабочие часы</p>
                                </div>
                            </div>
                            <div class="quick-contact-item">
                                <div class="quick-icon">
                                    <img src="img/icon-email.svg" alt="Email">
                                </div>
                                <div class="quick-content">
                                    <!-- TODO: Replace with actual email -->
                                    <strong>hello@[your-domain].eu</strong>
                                    <p>Ответим в течение 24 часов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-header-visual">
                        <img src="img/contact-hero.jpg" alt="Наш офис в Таллине" class="contacts-header-image">
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
                                        <img src="img/icon-location.svg" alt="Адрес">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Адрес офиса</h4>
                                        <!-- TODO: Replace with actual address -->
                                        <p><strong>[ADDRESS_PLACEHOLDER]</strong><br>
                                        Tallinn, 101xx, Estonia</p>
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="detail-icon">
                                        <img src="img/icon-phone.svg" alt="Телефон">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Телефон</h4>
                                        <!-- TODO: Replace with actual phone -->
                                        <p><strong>+372 6xx xxxx</strong><br>
                                        Пн-Пт: 9:00-18:00 EET</p>
                                    </div>
                                </div>
                                
                                <div class="contact-detail">
                                    <div class="detail-icon">
                                        <img src="img/icon-email.svg" alt="Email">
                                    </div>
                                    <div class="detail-content">
                                        <h4>Email</h4>
                                        <!-- TODO: Replace with actual email -->
                                        <p><strong>hello@[your-domain].eu</strong><br>
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
                            
                            <div class="social-links">
                                <h4>Мы в социальных сетях</h4>
                                <div class="social-icons">
                                    <!-- TODO: Add actual social media links -->
                                    <a href="#" class="social-link">
                                        <img src="img/social-linkedin.svg" alt="LinkedIn">
                                        <span>LinkedIn</span>
                                    </a>
                                    <a href="#" class="social-link">
                                        <img src="img/social-github.svg" alt="GitHub">
                                        <span>GitHub</span>
                                    </a>
                                    <a href="#" class="social-link">
                                        <img src="img/social-telegram.svg" alt="Telegram">
                                        <span>Telegram</span>
                                    </a>
                                </div>
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
                        <img src="img/tallinn-map.jpg" alt="Карта офиса в Таллине" class="map-image">
                        <div class="map-overlay">
                            <div class="map-pin">
                                <img src="img/icon-map-pin.svg" alt="Наше местоположение">
                                <span>WebTalent Est</span>
                            </div>
                        </div>
                    </div>
                    <div class="map-info">
                        <h3>Удобное расположение</h3>
                        <ul class="location-benefits">
                            <li>5 минут пешком от остановки Vabaduse väljak</li>
                            <li>Рядом с бизнес-центрами и кафе</li>
                            <li>Парковка для посетителей</li>
                            <li>Доступность для людей с ограниченными возможностями</li>
                        </ul>
                        <div class="directions">
                            <!-- TODO: Add actual Google Maps or other map service link -->
                            <a href="#" class="btn btn-secondary">Построить маршрут</a>
                        </div>
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
                            <img src="img/logo.svg" alt="WebTalent Est" class="logo-img">
                            <span class="logo-text">WebTalent<span class="accent">Est</span></span>
                        </div>
                        <p class="footer-description">Находим лучших IT-специалистов для веб-проектов в Эстонии</p>
                        <div class="footer-social">
                            <!-- TODO: Add actual social media links -->
                            <a href="#" class="social-link"><img src="img/social-linkedin.svg" alt="LinkedIn"></a>
                            <a href="#" class="social-link"><img src="img/social-github.svg" alt="GitHub"></a>
                            <a href="#" class="social-link"><img src="img/social-telegram.svg" alt="Telegram"></a>
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
                            <img src="img/icon-location.svg" alt="Адрес" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual address -->
                                <strong>[ADDRESS_PLACEHOLDER]</strong><br>
                                Tallinn, 101xx, Estonia
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="img/icon-phone.svg" alt="Телефон" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual phone -->
                                <strong>+372 6xx xxxx</strong><br>
                                Пн-Пт: 9:00-18:00 EET
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="img/icon-email.svg" alt="Email" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual email -->
                                <strong>hello@[your-domain].eu</strong><br>
                                Ответим в течение 24 часов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> WebTalent Est. Все права защищены.</p>
                <p>Регистрационный код: <!-- TODO: Add company registration number -->[COMPANY_REG_NUMBER]</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>