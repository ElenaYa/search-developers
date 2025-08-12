<?php
// TODO: Replace placeholders with actual company information
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Политика конфиденциальности | Frevonto</title>
    <meta name="description" content="Политика конфиденциальности Frevonto. Узнайте, как мы обрабатываем и защищаем ваши персональные данные в соответствии с GDPR.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/privacy">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/privacy">
    <meta property="og:title" content="Политика конфиденциальности | Frevonto">
    <meta property="og:description" content="Как Frevonto обрабатывает и защищает персональные данные в соответствии с GDPR.">
    <meta property="og:image" content="https://frevonto.com/img/hero-main.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Политика конфиденциальности | Frevonto">
    <meta name="twitter:description" content="Как Frevonto обрабатывает и защищает персональные данные в соответствии с GDPR.">
    <meta name="twitter:image" content="https://frevonto.com/img/hero-main.jpg">
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
                    <a href="about.php" class="nav-link">О нас</a>
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link">Контакты</a>
                    <div class="nav-dropdown">
                        <span class="nav-link active">Политики</span>
                        <div class="dropdown-content">
                            <a href="privacy.php" class="active">Конфиденциальность</a>
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
        <section class="legal-page">
            <div class="container">
                <div class="legal-content">
                    <div class="legal-header">
                        <h1 class="page-title">Политика конфиденциальности</h1>
                        <p class="last-updated">Последнее обновление: <?php echo date('d.m.Y'); ?></p>
                    </div>

                    <div class="legal-navigation">
                        <nav class="legal-nav">
                            <a href="#overview">Обзор</a>
                            <a href="#data-collection">Сбор данных</a>
                            <a href="#data-usage">Использование данных</a>
                            <a href="#data-sharing">Передача данных</a>
                            <a href="#data-security">Безопасность</a>
                            <a href="#your-rights">Ваши права</a>
                            <a href="#contact">Контакты</a>
                        </nav>
                    </div>

                    <div class="legal-sections">
                        <section id="overview" class="legal-section">
                            <h2>1. Обзор политики конфиденциальности</h2>
                            <p>Frevonto (далее "мы", "наша компания") серьезно относится к защите персональных данных наших пользователей. Данная политика конфиденциальности объясняет, как мы собираем, используем, храним и защищаем информацию, которую вы предоставляете при использовании нашего веб-сайта и услуг.</p>
                            
                            <p>Мы соблюдаем требования Общего регламента по защите данных (GDPR) Европейского союза и законодательства Эстонии в области защиты персональных данных.</p>
                            
                            <div class="info-box">
                                <h3>Контролер данных</h3>
                                <p><strong>Frevonto</strong><br>
                                <!-- TODO: Replace with actual address -->
                                Адрес: Tartu mnt 25, 10117 Tallinn, Estonia<br>
                                <!-- TODO: Replace with actual registration number -->
                                Регистрационный номер: [COMPANY_REG_NUMBER]<br>
                                <!-- TODO: Replace with actual email -->
                                Email: privacy@frevonto.com</p>
                            </div>
                        </section>

                        <section id="data-collection" class="legal-section">
                            <h2>2. Какие данные мы собираем</h2>
                            
                            <h3>2.1 Данные, предоставляемые добровольно</h3>
                            <ul>
                                <li><strong>Контактная информация:</strong> имя, фамилия, email, номер телефона</li>
                                <li><strong>Профессиональная информация:</strong> опыт работы, навыки, портфолио</li>
                                <li><strong>Информация о компании:</strong> название, сфера деятельности, размер</li>
                                <li><strong>Сообщения:</strong> содержание форм обратной связи и переписки</li>
                                <li><strong>Файлы:</strong> резюме, портфолио, техническое задание</li>
                            </ul>

                            <h3>2.2 Данные, собираемые автоматически</h3>
                            <ul>
                                <li><strong>Техническая информация:</strong> IP-адрес, браузер, операционная система</li>
                                <li><strong>Данные об активности:</strong> страницы, которые вы посещаете, время на сайте</li>
                                <li><strong>Cookies:</strong> небольшие файлы для улучшения работы сайта</li>
                            </ul>

                            <h3>2.3 Данные от третьих лиц</h3>
                            <p>Мы можем получать информацию из открытых источников (LinkedIn, GitHub) для проверки квалификации кандидатов только с их согласия.</p>
                        </section>

                        <section id="data-usage" class="legal-section">
                            <h2>3. Как мы используем ваши данные</h2>
                            
                            <h3>3.1 Основные цели обработки</h3>
                            <ul>
                                <li>Предоставление наших услуг по подбору IT-специалистов</li>
                                <li>Обработка заявок на вакансии и заказов дизайна</li>
                                <li>Связь с вами по поводу ваших запросов</li>
                                <li>Улучшение качества наших услуг</li>
                                <li>Соблюдение правовых обязательств</li>
                            </ul>

                            <h3>3.2 Правовые основания</h3>
                            <p>Мы обрабатываем персональные данные на следующих основаниях:</p>
                            <ul>
                                <li><strong>Согласие:</strong> когда вы даете явное согласие на обработку</li>
                                <li><strong>Исполнение договора:</strong> для предоставления запрашиваемых услуг</li>
                                <li><strong>Законные интересы:</strong> для улучшения сайта и услуг</li>
                                <li><strong>Правовые обязательства:</strong> для соблюдения требований закона</li>
                            </ul>

                            <h3>3.3 Автоматизированное принятие решений</h3>
                            <p>Мы не используем автоматизированные системы для принятия решений, которые могут существенно повлиять на ваши права. Все решения о подборе специалистов принимаются людьми.</p>
                        </section>

                        <section id="data-sharing" class="legal-section">
                            <h2>4. Передача персональных данных</h2>
                            
                            <h3>4.1 Когда мы передаем данные</h3>
                            <p>Мы можем передавать ваши персональные данные в следующих случаях:</p>
                            <ul>
                                <li>Потенциальным работодателям (только с вашего согласия)</li>
                                <li>Поставщикам услуг, которые помогают нам работать</li>
                                <li>При наличии правового обязательства</li>
                                <li>Для защиты наших прав и безопасности</li>
                            </ul>

                            <h3>4.2 Международные передачи</h3>
                            <p>Некоторые наши поставщики услуг могут находиться за пределами ЕС/ЕЭЗ. В таких случаях мы обеспечиваем соответствующий уровень защиты через:</p>
                            <ul>
                                <li>Решения Европейской комиссии об адекватности</li>
                                <li>Стандартные договорные оговорки</li>
                                <li>Другие подходящие гарантии</li>
                            </ul>

                            <h3>4.3 Наши поставщики услуг</h3>
                            <div class="service-providers">
                                <div class="provider">
                                    <h4>Хостинг и инфраструктура</h4>
                                    <p>Используем надежных европейских провайдеров с соответствующими сертификатами безопасности.</p>
                                </div>
                                <div class="provider">
                                    <h4>Email-рассылки</h4>
                                    <p>Сервисы email-маркетинга с сертификацией GDPR для информирования о вакансиях.</p>
                                </div>
                                <div class="provider">
                                    <h4>Аналитика</h4>
                                    <p>Анонимизированная аналитика веб-сайта для улучшения пользовательского опыта.</p>
                                </div>
                            </div>
                        </section>

                        <section id="data-security" class="legal-section">
                            <h2>5. Безопасность данных</h2>
                            
                            <h3>5.1 Технические меры</h3>
                            <ul>
                                <li>Шифрование данных при передаче (SSL/TLS)</li>
                                <li>Шифрование данных при хранении</li>
                                <li>Регулярное обновление системы безопасности</li>
                                <li>Мониторинг и обнаружение угроз</li>
                                <li>Резервное копирование данных</li>
                            </ul>

                            <h3>5.2 Организационные меры</h3>
                            <ul>
                                <li>Ограниченный доступ к персональным данным</li>
                                <li>Обучение сотрудников вопросам безопасности</li>
                                <li>Политики и процедуры защиты данных</li>
                                <li>Регулярные аудиты безопасности</li>
                            </ul>

                            <h3>5.3 Сроки хранения</h3>
                            <p>Мы храним персональные данные только столько, сколько это необходимо:</p>
                            <ul>
                                <li><strong>Кандидаты:</strong> 2 года после последнего контакта</li>
                                <li><strong>Клиенты:</strong> 7 лет для налоговой отчетности</li>
                                <li><strong>Технические данные:</strong> 1 год</li>
                                <li><strong>Маркетинговые данные:</strong> до отзыва согласия</li>
                            </ul>
                        </section>

                        <section id="your-rights" class="legal-section">
                            <h2>6. Ваши права в отношении персональных данных</h2>
                            
                            <div class="rights-grid">
                                <div class="right-item">
                                    <h3>Право на информацию</h3>
                                    <p>Вы имеете право знать, как обрабатываются ваши персональные данные.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на доступ</h3>
                                    <p>Вы можете запросить копию ваших персональных данных, которые мы обрабатываем.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на исправление</h3>
                                    <p>Вы можете попросить исправить неточные или неполные данные.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на удаление</h3>
                                    <p>В определенных случаях вы можете потребовать удаления ваших данных.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на ограничение</h3>
                                    <p>Вы можете попросить ограничить обработку ваших данных.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на переносимость</h3>
                                    <p>Вы можете получить ваши данные в структурированном формате.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Право на возражение</h3>
                                    <p>Вы можете возразить против обработки ваших данных в определенных случаях.</p>
                                </div>
                                
                                <div class="right-item">
                                    <h3>Отзыв согласия</h3>
                                    <p>Если обработка основана на согласии, вы можете его отозвать в любое время.</p>
                                </div>
                            </div>

                            <div class="rights-exercise">
                                <h3>Как реализовать свои права</h3>
                                <p>Для реализации ваших прав свяжитесь с нами по адресу:</p>
                                <!-- TODO: Replace with actual email -->
                                <p><strong>Email:</strong> privacy@frevonto.com</p>
                                <p>Мы рассмотрим ваш запрос в течение 30 дней.</p>
                            </div>
                        </section>

                        <section id="contact" class="legal-section">
                            <h2>7. Контактная информация и жалобы</h2>
                            
                            <h3>7.1 Наши контакты</h3>
                            <div class="contact-details">
                                <p><strong>Ответственный за защиту данных:</strong></p>
                                <p>Frevonto<br>
                                <!-- TODO: Replace with actual address -->
                                Tartu mnt 25<br>
                                10117 Tallinn, Estonia<br>
                                <!-- TODO: Replace with actual email -->
                                Email: privacy@frevonto.com<br>
                                <!-- TODO: Replace with actual phone -->
                                Телефон: +372 5554 9123</p>
                            </div>

                            <h3>7.2 Подача жалобы</h3>
                            <p>Если вы считаете, что мы нарушили ваши права на защиту персональных данных, вы можете подать жалобу в надзорный орган:</p>
                            
                            <div class="authority-info">
                                <p><strong>Эстонская инспекция по защите данных</strong><br>
                                Веб-сайт: <a href="https://www.aki.ee" target="_blank">www.aki.ee</a><br>
                                Email: info@aki.ee<br>
                                Телефон: +372 627 4135</p>
                            </div>

                            <h3>7.3 Изменения в политике</h3>
                            <p>Мы можем обновлять эту политику конфиденциальности. О существенных изменениях мы уведомим вас по email или через уведомление на сайте.</p>
                            
                            <p>Рекомендуем периодически проверять эту страницу для ознакомления с актуальной версией политики.</p>
                        </section>

                        <section class="legal-section">
                            <h2>8. Дополнительная информация</h2>
                            
                            <h3>8.1 Дети</h3>
                            <p>Наши услуги не предназначены для лиц младше 16 лет. Мы сознательно не собираем персональные данные детей.</p>
                            
                            <h3>8.2 Ссылки на другие сайты</h3>
                            <p>Наш сайт может содержать ссылки на другие веб-сайты. Мы не несем ответственности за политику конфиденциальности других сайтов.</p>
                            
                            <h3>8.3 Применимое право</h3>
                            <p>Данная политика регулируется законодательством Эстонской Республики.</p>
                        </section>
                    </div>

                    <div class="legal-footer">
                        <p>Дата вступления в силу: <?php echo date('d.m.Y'); ?></p>
                        <div class="legal-actions">
                            <a href="contacts.php" class="btn btn-primary">Связаться с нами</a>
                            <a href="gdpr.php" class="btn btn-secondary">Подробнее о GDPR</a>
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
                            <h4 class="footer-column-title">Правовая информация</h4>
                            <nav class="footer-links">
                                <a href="privacy.php" class="active">Конфиденциальность</a>
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