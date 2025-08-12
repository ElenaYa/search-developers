<?php
// TODO: Replace placeholders with actual company information
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас | Frevonto — Поиск IT‑специалистов в Эстонии</title>
    <meta name="description" content="Узнайте больше о Frevonto — нашей команде, ценностях и подходе к поиску IT‑талантов в Эстонии.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/about">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/about">
    <meta property="og:title" content="О нас | Frevonto">
    <meta property="og:description" content="Узнайте больше о Frevonto — нашей команде, ценностях и подходе к поиску IT‑талантов в Эстонии.">
    <meta property="og:image" content="https://frevonto.com/img/about-hero.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="О нас | Frevonto">
    <meta name="twitter:description" content="Узнайте больше о Frevonto — нашей команде, ценностях и подходе к поиску IT‑талантов в Эстонии.">
    <meta name="twitter:image" content="https://frevonto.com/img/about-hero.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="img/logo.jpg" alt="Frevonto" class="logo-img">
                    <span class="logo-text">Frevon<span class="accent">to</span></span>
                </div>
                <nav class="nav">
                    <a href="index.php" class="nav-link">Главная</a>
                    <a href="about.php" class="nav-link active">О нас</a>
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
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="page-header-content">
                    <h1 class="page-title">О нашей компании</h1>
                    <p class="page-description">Мы объединяем талантливых IT-специалистов с амбициозными проектами, создавая успешные веб-решения в Эстонии</p>
                </div>
                <div class="page-header-visual">
                    <img src="img/about-hero.jpg" alt="Команда Frevonto" class="page-header-image">
                </div>
            </div>
        </section>

        <!-- Company Story -->
        <section class="company-story">
            <div class="container">
                <div class="story-content">
                    <div class="story-text">
                        <h2 class="section-title">Наша история</h2>
                        <div class="story-blocks">
                            <div class="story-block">
                                <div class="story-year">2019</div>
                                <div class="story-content-text">
                                    <h3>Основание компании</h3>
                                    <p>Начали как небольшая команда веб-разработчиков в Таллине, работая над локальными проектами для эстонских стартапов.</p>
                                </div>
                            </div>
                            <div class="story-block">
                                <div class="story-year">2021</div>
                                <div class="story-content-text">
                                    <h3>Расширение услуг</h3>
                                    <p>Запустили направление подбора IT-специалистов после множества запросов от клиентов на поиск талантливых разработчиков.</p>
                                </div>
                            </div>
                            <div class="story-block">
                                <div class="story-year">2023</div>
                                <div class="story-content-text">
                                    <h3>Региональное лидерство</h3>
                                    <p>Стали одной из ведущих компаний по подбору IT-кадров в Балтийском регионе, работаем с 50+ компаниями.</p>
                                </div>
                            </div>
                            <div class="story-block">
                                <div class="story-year">2025</div>
                                <div class="story-content-text">
                                    <h3>Новые горизонты</h3>
                                    <p>Развиваем AI-инструменты для более точного матчинга специалистов с проектами, запускаем менторские программы.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="story-visual">
                        <img src="img/office-tallinn.jpg" alt="Офис в Таллине" class="story-image">
                        <div class="story-accent"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Values -->
        <section class="values">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title">Наши ценности</h2>
                    <p class="section-subtitle">Принципы, которые определяют наш подход к работе и взаимодействию</p>
                </div>
                <div class="values-grid">
                    <div class="value-card" data-animate="slide-up">
                        <div class="value-icon">
                            <img src="img/icon-quality.svg" alt="Качество">
                        </div>
                        <h3 class="value-title">Качество превыше скорости</h3>
                        <p class="value-description">Мы выбираем специалистов не только по техническим навыкам, но и по способности работать в команде и создавать качественные решения.</p>
                    </div>
                    <div class="value-card" data-animate="slide-up" data-delay="100">
                        <div class="value-icon">
                            <img src="img/icon-transparency.svg" alt="Прозрачность">
                        </div>
                        <h3 class="value-title">Прозрачность во всем</h3>
                        <p class="value-description">Открыто говорим о ставках, сроках и процессах. Никаких скрытых условий или неожиданных сюрпризов.</p>
                    </div>
                    <div class="value-card" data-animate="slide-up" data-delay="200">
                        <div class="value-icon">
                            <img src="img/icon-growth.svg" alt="Развитие">
                        </div>
                        <h3 class="value-title">Постоянное развитие</h3>
                        <p class="value-description">Инвестируем в обучение наших специалистов и следим за новейшими трендами в IT-индустрии.</p>
                    </div>
                    <div class="value-card" data-animate="slide-up" data-delay="300">
                        <div class="value-icon">
                            <img src="img/icon-partnership.svg" alt="Партнерство">
                        </div>
                        <h3 class="value-title">Долгосрочное партнерство</h3>
                        <p class="value-description">Строим отношения не на один проект, а на годы. Многие наши клиенты работают с нами уже более 3 лет.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Команда экспертов</h2>
                    <p class="section-subtitle">Профессионалы, которые знают IT-рынок Эстонии изнутри</p>
                </div>
                <div class="team-grid">
                    <div class="team-member" data-animate="fade-up">
                        <div class="member-photo">
                            <img src="img/team-anna.jpg" alt="Анна Петрова">
                            <div class="member-overlay">
                                <div class="member-social">
                                    <a href="#" class="social-link"><img src="img/social-linkedin.svg" alt="LinkedIn"></a>
                                    <a href="#" class="social-link"><img src="img/social-github.svg" alt="GitHub"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">Анна Петрова</h3>
                            <p class="member-role">Основатель и CEO</p>
                            <p class="member-description">15+ лет в IT-рекрутменте. Ранее — Head of HR в крупных эстонских IT-компаниях.</p>
                            <div class="member-skills">
                                <span class="skill-tag">HR Strategy</span>
                                <span class="skill-tag">IT Recruitment</span>
                                <span class="skill-tag">Team Building</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-member" data-animate="fade-up" data-delay="100">
                        <div class="member-photo">
                            <img src="img/team-dmitri.jpg" alt="Дмитрий Козлов">
                            <div class="member-overlay">
                                <div class="member-social">
                                    <a href="#" class="social-link"><img src="img/social-linkedin.svg" alt="LinkedIn"></a>
                                    <a href="#" class="social-link"><img src="img/social-github.svg" alt="GitHub"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">Дмитрий Козлов</h3>
                            <p class="member-role">CTO и Lead разработчик</p>
                            <p class="member-description">12+ лет в веб-разработке. Эксперт по PHP, Laravel, архитектуре современных веб-приложений.</p>
                            <div class="member-skills">
                                <span class="skill-tag">PHP/Laravel</span>
                                <span class="skill-tag">Architecture</span>
                                <span class="skill-tag">DevOps</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-member" data-animate="fade-up" data-delay="200">
                        <div class="member-photo">
                            <img src="img/team-elena.jpg" alt="Елена Соколова">
                            <div class="member-overlay">
                                <div class="member-social">
                                    <a href="#" class="social-link"><img src="img/social-linkedin.svg" alt="LinkedIn"></a>
                                    <a href="#" class="social-link"><img src="img/social-dribbble.svg" alt="Dribbble"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">Елена Соколова</h3>
                            <p class="member-role">Head of Design</p>
                            <p class="member-description">10+ лет в UX/UI дизайне. Специализируется на B2B интерфейсах и дизайн-системах.</p>
                            <div class="member-skills">
                                <span class="skill-tag">UI/UX Design</span>
                                <span class="skill-tag">Design Systems</span>
                                <span class="skill-tag">Figma</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-member" data-animate="fade-up" data-delay="300">
                        <div class="member-photo">
                            <img src="img/team-marcus.jpg" alt="Маркус Линн">
                            <div class="member-overlay">
                                <div class="member-social">
                                    <a href="#" class="social-link"><img src="img/social-linkedin.svg" alt="LinkedIn"></a>
                                    <a href="#" class="social-link"><img src="img/social-twitter.svg" alt="Twitter"></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3 class="member-name">Маркус Линн</h3>
                            <p class="member-role">Senior QA Engineer</p>
                            <p class="member-description">8+ лет в тестировании. Эксперт по автоматизации и контролю качества веб-приложений.</p>
                            <div class="member-skills">
                                <span class="skill-tag">Test Automation</span>
                                <span class="skill-tag">Cypress</span>
                                <span class="skill-tag">API Testing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Metrics -->
        <section class="metrics">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title">Результаты в цифрах</h2>
                    <p class="section-subtitle">Факты, которые говорят о качестве нашей работы</p>
                </div>
                <div class="metrics-grid">
                    <div class="metric-card" data-animate="counter">
                        <div class="metric-icon">
                            <img src="img/icon-projects.svg" alt="Проекты">
                        </div>
                        <div class="metric-number" data-count="240">0</div>
                        <div class="metric-label">Завершенных проектов</div>
                        <div class="metric-period">За последние 3 года</div>
                    </div>
                    <div class="metric-card" data-animate="counter" data-delay="100">
                        <div class="metric-icon">
                                    <img src="img/icon-specialists.svg" alt="Специалисты">
                        </div>
                        <div class="metric-number" data-count="150">0</div>
                        <div class="metric-label">IT-специалистов в базе</div>
                        <div class="metric-period">Проверенные профессионалы</div>
                    </div>
                    <div class="metric-card" data-animate="counter" data-delay="200">
                        <div class="metric-icon">
                            <img src="img/icon-sla.svg" alt="SLA">
                        </div>
                        <div class="metric-number" data-count="98.5">0</div>
                        <div class="metric-label">% выполнения SLA</div>
                        <div class="metric-period">Соблюдение сроков</div>
                    </div>
                    <div class="metric-card" data-animate="counter" data-delay="300">
                        <div class="metric-icon">
                            <img src="img/icon-nps.svg" alt="NPS">
                        </div>
                        <div class="metric-number" data-count="84">0</div>
                        <div class="metric-label">NPS оценка</div>
                        <div class="metric-period">Индекс лояльности клиентов</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust & Processes -->
        <section class="trust">
            <div class="container">
                <div class="trust-content">
                    <div class="trust-text">
                        <h2 class="section-title">Почему нам доверяют</h2>
                        <div class="trust-features">
                            <div class="trust-feature">
                                <div class="trust-icon">
                                    <img src="img/icon-process.svg" alt="Процессы">
                                </div>
                                <div class="trust-content-text">
                                    <h3>Отлаженные процессы</h3>
                                    <p>Структурированный подход к каждому этапу: от анализа потребностей до финальной сдачи проекта.</p>
                                    <ul class="trust-list">
                                        <li>Детальные брифы и техзадания</li>
                                        <li>Регулярные статус-встречи</li>
                                        <li>Промежуточные демо и приемка</li>
                                        <li>Документирование всех решений</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trust-feature">
                                <div class="trust-icon">
                                    <img src="img/icon-communication.svg" alt="Коммуникации">
                                </div>
                                <div class="trust-content-text">
                                    <h3>Прозрачная коммуникация</h3>
                                    <p>Всегда на связи и готовы объяснить любые технические решения простым языком.</p>
                                    <ul class="trust-list">
                                        <li>Ответ на сообщения в течение 4 часов</li>
                                        <li>Еженедельные отчеты о прогрессе</li>
                                        <li>Доступ к инструментам управления проектами</li>
                                        <li>Персональный менеджер проекта</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="trust-feature">
                                <div class="trust-icon">
                                    <img src="img/icon-sla-guarantee.svg" alt="SLA гарантии">
                                </div>
                                <div class="trust-content-text">
                                    <h3>SLA гарантии</h3>
                                    <p>Фиксируем обязательства по срокам, качеству и поддержке в договоре.</p>
                                    <ul class="trust-list">
                                        <li>Гарантия соблюдения дедлайнов</li>
                                        <li>Бесплатные исправления в течение 30 дней</li>
                                        <li>Техподдержка 3 месяца после запуска</li>
                                        <li>Компенсация при нарушении SLA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trust-visual">
                        <img src="img/quality-process.jpg" alt="Процесс контроля качества" class="trust-image">
                        <div class="trust-stats">
                            <div class="trust-stat">
                                <span class="trust-stat-number">24ч</span>
                                <span class="trust-stat-label">среднее время отклика</span>
                            </div>
                            <div class="trust-stat">
                                <span class="trust-stat-number">99%</span>
                                <span class="trust-stat-label">проектов в срок</span>
                            </div>
                            <div class="trust-stat">
                                <span class="trust-stat-number">0</span>
                                <span class="trust-stat-label">критических инцидентов</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications & Awards -->
        <section class="certifications">
            <div class="container">
                <div class="section-header center">
                    <h2 class="section-title">Сертификаты и награды</h2>
                    <p class="section-subtitle">Признание профессионального сообщества</p>
                </div>
                <div class="cert-grid">
                    <div class="cert-item" data-animate="scale-in">
                        <img src="img/cert-iso.svg" alt="ISO 27001" class="cert-logo">
                        <h3 class="cert-title">ISO 27001</h3>
                        <p class="cert-description">Международный стандарт информационной безопасности</p>
                        <span class="cert-year">2023</span>
                    </div>
                    <div class="cert-item" data-animate="scale-in" data-delay="100">
                        <img src="img/cert-gdpr.svg" alt="GDPR Compliance" class="cert-logo">
                        <h3 class="cert-title">GDPR Compliance</h3>
                        <p class="cert-description">Соответствие европейским стандартам защиты данных</p>
                        <span class="cert-year">2024</span>
                    </div>
                    <div class="cert-item" data-animate="scale-in" data-delay="200">
                        <img src="img/award-best-employer.svg" alt="Best IT Employer" class="cert-logo">
                        <h3 class="cert-title">Best IT Employer</h3>
                        <p class="cert-description">Лучший работодатель в IT сфере Эстонии</p>
                        <span class="cert-year">2024</span>
                    </div>
                    <div class="cert-item" data-animate="scale-in" data-delay="300">
                        <img src="img/cert-startup.svg" alt="Startup Estonia" class="cert-logo">
                        <h3 class="cert-title">Startup Estonia</h3>
                        <p class="cert-description">Партнер государственной программы поддержки стартапов</p>
                        <span class="cert-year">2022</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content center">
                    <h2 class="cta-title">Готовы к сотрудничеству?</h2>
                    <p class="cta-description">Давайте обсудим ваш проект и найдем идеальное решение</p>
                    <div class="cta-actions">
                        <a href="contacts.php" class="btn btn-primary btn-large">Связаться с нами</a>
                        <a href="offers.php" class="btn btn-secondary btn-large">Посмотреть услуги</a>
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
                                <!-- TODO: Replace with actual address -->
                                <strong>Tartu mnt 25</strong><br>
                                10117 Tallinn, Estonia
                            </div>
                        </div>
                        <div class="contact-item">
                            <img src="img/icon-phone.svg" alt="Телефон" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual phone -->
                                <strong>+372 5554 9123</strong><br>
                                Пн-Пт: 9:00-18:00 EET
                            </div>
                        </div>
                        <div class="contact-item">
                                <img src="img/icon-email.svg" alt="Email" class="contact-icon">
                            <div>
                                <!-- TODO: Replace with actual email -->
                                <strong>info@frevonto.com</strong><br>
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