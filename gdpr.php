<?php
// TODO: Replace placeholders with actual company information
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDPR — Защита персональных данных | Frevonto</title>
    <meta name="description" content="Информация о защите персональных данных в соответствии с GDPR. Права субъектов данных, процедуры запросов и контакты DPO компании Frevonto.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://frevonto.com/gdpr">
    <meta property="og:site_name" content="Frevonto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frevonto.com/gdpr">
    <meta property="og:title" content="GDPR — Защита персональных данных | Frevonto">
    <meta property="og:description" content="Права субъектов данных и процедуры запросов GDPR в Frevonto.">
    <meta property="og:image" content="https://frevonto.com/img/hero-main.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GDPR — Защита персональных данных | Frevonto">
    <meta name="twitter:description" content="Права субъектов данных и процедуры запросов GDPR в Frevonto.">
    <meta name="twitter:image" content="https://frevonto.com/img/hero-main.jpg">
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
                    <a href="offers.php" class="nav-link">Что ищем/предлагаем</a>
                    <a href="contacts.php" class="nav-link">Контакты</a>
                    <div class="nav-dropdown">
                        <span class="nav-link active">Политики</span>
                        <div class="dropdown-content">
                            <a href="privacy.php">Конфиденциальность</a>
                            <a href="cookies.php">Cookies</a>
                            <a href="terms.php">Условия использования</a>
                            <a href="gdpr.php" class="active">GDPR</a>
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
                        <h1 class="page-title">GDPR - Общий регламент по защите данных</h1>
                        <p class="last-updated">Последнее обновление: <?php echo date('d.m.Y'); ?></p>
                    </div>

                    <div class="gdpr-intro">
                        <div class="intro-card">
                            <h2>Ваши права защищены</h2>
                            <p>Общий регламент по защите данных (GDPR) дает вам больше контроля над вашими персональными данными. Эта страница объясняет ваши права и то, как мы их защищаем.</p>
                        </div>
                    </div>

                    <div class="legal-navigation">
                        <nav class="legal-nav">
                            <a href="#data-controller">Контролер данных</a>
                            <a href="#your-rights">Ваши права</a>
                            <a href="#legal-basis">Правовые основания</a>
                            <a href="#data-processing">Обработка данных</a>
                            <a href="#retention">Сроки хранения</a>
                            <a href="#requests">Подача запросов</a>
                            <a href="#complaints">Жалобы</a>
                            <a href="#contact-dpo">Контакт DPO</a>
                        </nav>
                    </div>

                    <div class="legal-sections">
                        <section id="data-controller" class="legal-section">
                            <h2>1. Контролер персональных данных</h2>
                            
                            <div class="controller-info">
                                <div class="controller-card">
                                    <h3>Frevonto</h3>
                                    <div class="controller-details">
                                        <!-- TODO: Replace with actual information -->
                                        <p><strong>Регистрационный номер:</strong> [COMPANY_REG_NUMBER]</p>
                                        <p><strong>Юридический адрес:</strong> [ADDRESS_PLACEHOLDER], Tallinn, 101xx, Estonia</p>
                                         <p><strong>Email:</strong> privacy@frevonto.com</p>
                                        <p><strong>Телефон:</strong> +372 6xx xxxx</p>
                                        <p><strong>Представитель в ЕС:</strong> Да (Эстония)</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Ответственный за защиту данных (DPO)</h3>
                            <p>Мы назначили ответственного за защиту персональных данных для обеспечения соблюдения требований GDPR:</p>
                            
                            <div class="dpo-info">
                                <!-- TODO: Replace with actual DPO information -->
                                <p><strong>Имя:</strong> [DPO_NAME]<br>
                                <strong>Email:</strong> dpo@frevonto.com<br>
                                <strong>Телефон:</strong> +372 6xx xxxx<br>
                                <strong>Почтовый адрес:</strong> [ADDRESS_PLACEHOLDER], Tallinn, 101xx, Estonia</p>
                            </div>
                        </section>

                        <section id="your-rights" class="legal-section">
                            <h2>2. Ваши права в рамках GDPR</h2>
                            <p>Как субъект персональных данных, вы имеете следующие права:</p>

                            <div class="rights-detailed">
                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-info.svg" alt="Право на информацию">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на информацию</h3>
                                        <p>Вы имеете право знать, какие персональные данные мы о вас обрабатываем, для каких целей и на каком основании.</p>
                                        <div class="right-details">
                                            <h4>Включает:</h4>
                                            <ul>
                                                <li>Цели обработки данных</li>
                                                <li>Категории обрабатываемых данных</li>
                                                <li>Получатели данных</li>
                                                <li>Сроки хранения данных</li>
                                                <li>Ваши права и способы их реализации</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-access.svg" alt="Право на доступ">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на доступ (статья 15)</h3>
                                        <p>Вы можете получить копию ваших персональных данных, которые мы обрабатываем.</p>
                                        <div class="right-details">
                                            <h4>Мы предоставим:</h4>
                                            <ul>
                                                <li>Копию ваших персональных данных</li>
                                                <li>Информацию о целях обработки</li>
                                                <li>Данные о получателях информации</li>
                                                <li>Планируемые сроки хранения</li>
                                                <li>Информацию об источниках данных</li>
                                            </ul>
                                            <p><strong>Срок ответа:</strong> 1 месяц (бесплатно)</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-rectify.svg" alt="Право на исправление">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на исправление (статья 16)</h3>
                                        <p>Вы можете потребовать исправления неточных персональных данных.</p>
                                        <div class="right-details">
                                            <h4>Мы исправим:</h4>
                                            <ul>
                                                <li>Неточную информацию</li>
                                                <li>Неполные данные</li>
                                                <li>Устаревшие сведения</li>
                                            </ul>
                                            <p><strong>Срок исправления:</strong> немедленно после верификации</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-erase.svg" alt="Право на удаление">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на удаление / "Право быть забытым" (статья 17)</h3>
                                        <p>В определенных случаях вы можете потребовать удаления ваших персональных данных.</p>
                                        <div class="right-details">
                                            <h4>Применимо когда:</h4>
                                            <ul>
                                                <li>Данные больше не нужны для первоначальных целей</li>
                                                <li>Вы отзываете согласие</li>
                                                <li>Данные обрабатывались незаконно</li>
                                                <li>Удаление требуется для соблюдения закона</li>
                                            </ul>
                                            <div class="warning-box">
                                                <p><strong>Исключения:</strong> Мы можем сохранить данные для выполнения правовых обязательств или защиты правовых интересов.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-restrict.svg" alt="Право на ограничение">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на ограничение обработки (статья 18)</h3>
                                        <p>Вы можете потребовать временного прекращения обработки ваших данных.</p>
                                        <div class="right-details">
                                            <h4>Применимо когда:</h4>
                                            <ul>
                                                <li>Вы оспариваете точность данных</li>
                                                <li>Обработка является незаконной</li>
                                                <li>Данные нужны вам для правовых требований</li>
                                                <li>Вы возражаете против обработки</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-portability.svg" alt="Право на переносимость">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на переносимость данных (статья 20)</h3>
                                        <p>Вы можете получить ваши данные в структурированном формате для передачи другому контролеру.</p>
                                        <div class="right-details">
                                            <h4>Форматы предоставления:</h4>
                                            <ul>
                                                <li>JSON (предпочтительный)</li>
                                                <li>CSV для табличных данных</li>
                                                <li>XML для структурированных данных</li>
                                                <li>PDF для документов</li>
                                            </ul>
                                            <p><strong>Условие:</strong> Данные должны обрабатываться автоматизированными средствами на основе согласия или договора.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-object.svg" alt="Право на возражение">
                                    </div>
                                    <div class="right-content">
                                        <h3>Право на возражение (статья 21)</h3>
                                        <p>Вы можете возразить против обработки ваших данных в определенных случаях.</p>
                                        <div class="right-details">
                                            <h4>Виды возражений:</h4>
                                            <ul>
                                                <li><strong>Общее возражение:</strong> Против обработки на основе законных интересов</li>
                                                <li><strong>Маркетинг:</strong> Против прямого маркетинга (абсолютное право)</li>
                                                <li><strong>Профилирование:</strong> Против автоматизированного принятия решений</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="right-detailed">
                                    <div class="right-icon">
                                        <img src="/img/icon-withdraw.svg" alt="Отзыв согласия">
                                    </div>
                                    <div class="right-content">
                                        <h3>Отзыв согласия</h3>
                                        <p>Если обработка основана на согласии, вы можете отозвать его в любое время.</p>
                                        <div class="right-details">
                                            <h4>Важно знать:</h4>
                                            <ul>
                                                <li>Отзыв не влияет на законность предыдущей обработки</li>
                                                <li>Отзыв должен быть таким же простым, как и предоставление согласия</li>
                                                <li>Мы прекратим обработку в течение 48 часов</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="legal-basis" class="legal-section">
                            <h2>3. Правовые основания обработки данных</h2>
                            <p>Мы обрабатываем персональные данные только при наличии правового основания согласно статье 6 GDPR:</p>

                            <div class="legal-bases">
                                <div class="legal-basis-item">
                                    <h3>Согласие (статья 6.1.a)</h3>
                                    <p>Когда вы даете явное согласие на обработку данных для определенных целей.</p>
                                    <div class="basis-examples">
                                        <h4>Примеры использования:</h4>
                                        <ul>
                                            <li>Подписка на рассылку о вакансиях</li>
                                            <li>Размещение cookies для аналитики</li>
                                            <li>Использование фотографий в портфолио</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="legal-basis-item">
                                    <h3>Исполнение договора (статья 6.1.b)</h3>
                                    <p>Для выполнения договора, стороной которого вы являетесь, или для принятия мер по вашему запросу.</p>
                                    <div class="basis-examples">
                                        <h4>Примеры использования:</h4>
                                        <ul>
                                            <li>Обработка заявок на вакансии</li>
                                            <li>Предоставление дизайн-услуг</li>
                                            <li>Выставление счетов и оплата</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="legal-basis-item">
                                    <h3>Правовое обязательство (статья 6.1.c)</h3>
                                    <p>Для соблюдения правовых обязательств, которые на нас возложены.</p>
                                    <div class="basis-examples">
                                        <h4>Примеры использования:</h4>
                                        <ul>
                                            <li>Ведение налоговой отчетности</li>
                                            <li>Соблюдение требований по противодействию отмыванию денег</li>
                                            <li>Архивирование документов согласно закону</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="legal-basis-item">
                                    <h3>Законные интересы (статья 6.1.f)</h3>
                                    <p>Для целей законных интересов, преследуемых нами или третьими лицами.</p>
                                    <div class="basis-examples">
                                        <h4>Примеры использования:</h4>
                                        <ul>
                                            <li>Предотвращение мошенничества</li>
                                            <li>Обеспечение сетевой безопасности</li>
                                            <li>Улучшение наших услуг</li>
                                            <li>Прямой маркетинг (с возможностью отказа)</li>
                                        </ul>
                                    </div>
                                    <div class="balance-test">
                                        <h4>Оценка баланса интересов:</h4>
                                        <p>Мы проводим тест на баланс интересов, чтобы убедиться, что наши законные интересы не нарушают ваши основные права и свободы.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="data-processing" class="legal-section">
                            <h2>4. Категории обрабатываемых данных</h2>
                            
                            <div class="data-categories">
                                <div class="data-category">
                                    <h3>Идентификационные данные</h3>
                                    <div class="category-details">
                                        <p><strong>Что включает:</strong> Имя, фамилия, email, номер телефона, адрес</p>
                                        <p><strong>Источники:</strong> Формы на сайте, резюме, переписка</p>
                                        <p><strong>Цели обработки:</strong> Связь с кандидатами и клиентами, предоставление услуг</p>
                                        <p><strong>Правовое основание:</strong> Согласие, исполнение договора</p>
                                    </div>
                                </div>

                                <div class="data-category">
                                    <h3>Профессиональные данные</h3>
                                    <div class="category-details">
                                        <p><strong>Что включает:</strong> Опыт работы, навыки, образование, сертификаты</p>
                                        <p><strong>Источники:</strong> Резюме, портфолио, собеседования</p>
                                        <p><strong>Цели обработки:</strong> Оценка квалификации, подбор подходящих вакансий</p>
                                        <p><strong>Правовое основание:</strong> Согласие, исполнение договора</p>
                                    </div>
                                </div>

                                <div class="data-category">
                                    <h3>Технические данные</h3>
                                    <div class="category-details">
                                        <p><strong>Что включает:</strong> IP-адрес, тип браузера, операционная система</p>
                                        <p><strong>Источники:</strong> Автоматический сбор при посещении сайта</p>
                                        <p><strong>Цели обработки:</strong> Безопасность, аналитика, улучшение сайта</p>
                                        <p><strong>Правовое основание:</strong> Законные интересы</p>
                                    </div>
                                </div>

                                <div class="data-category">
                                    <h3>Поведенческие данные</h3>
                                    <div class="category-details">
                                        <p><strong>Что включает:</strong> Страницы сайта, время посещения, клики</p>
                                        <p><strong>Источники:</strong> Cookies, аналитические системы</p>
                                        <p><strong>Цели обработки:</strong> Анализ эффективности сайта, персонализация</p>
                                        <p><strong>Правовое основание:</strong> Согласие (для необязательных cookies)</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="retention" class="legal-section">
                            <h2>5. Сроки хранения персональных данных</h2>
                            <p>Мы храним персональные данные только в течение необходимого времени:</p>

                            <div class="retention-table">
                                <div class="retention-item">
                                    <h3>Кандидаты на трудоустройство</h3>
                                    <div class="retention-details">
                                        <p><strong>Активные кандидаты:</strong> 2 года с последнего контакта</p>
                                        <p><strong>Неподходящие кандидаты:</strong> 1 год после отказа</p>
                                        <p><strong>Трудоустроенные:</strong> 3 года после окончания сотрудничества</p>
                                        <p><strong>Обоснование:</strong> Возможные будущие вакансии, справочные запросы</p>
                                    </div>
                                </div>

                                <div class="retention-item">
                                    <h3>Клиенты дизайн-услуг</h3>
                                    <div class="retention-details">
                                        <p><strong>Контактные данные:</strong> 7 лет (налоговое законодательство)</p>
                                        <p><strong>Проектные файлы:</strong> 3 года после завершения</p>
                                        <p><strong>Переписка:</strong> 2 года</p>
                                        <p><strong>Обоснование:</strong> Гарантийные обязательства, налоговая отчетность</p>
                                    </div>
                                </div>

                                <div class="retention-item">
                                    <h3>Маркетинговые данные</h3>
                                    <div class="retention-details">
                                        <p><strong>Email-рассылка:</strong> До отзыва согласия</p>
                                        <p><strong>Аналитические cookies:</strong> 2 года</p>
                                        <p><strong>Маркетинговые cookies:</strong> 13 месяцев</p>
                                        <p><strong>Обоснование:</strong> Эффективность маркетинга, аналитика</p>
                                    </div>
                                </div>

                                <div class="retention-item">
                                    <h3>Технические данные</h3>
                                    <div class="retention-details">
                                        <p><strong>Логи безопасности:</strong> 1 год</p>
                                        <p><strong>Логи ошибок:</strong> 6 месяцев</p>
                                        <p><strong>Резервные копии:</strong> 3 месяца</p>
                                        <p><strong>Обоснование:</strong> Безопасность, устранение технических проблем</p>
                                    </div>
                                </div>
                            </div>

                            <div class="deletion-process">
                                <h3>Процесс удаления данных</h3>
                                <p>По истечении сроков хранения данные удаляются следующим образом:</p>
                                <ul>
                                    <li><strong>Автоматическое удаление:</strong> Система автоматически удаляет данные по расписанию</li>
                                    <li><strong>Безвозвратное удаление:</strong> Данные удаляются без возможности восстановления</li>
                                    <li><strong>Резервные копии:</strong> Очистка также происходит в резервных копиях</li>
                                    <li><strong>Документирование:</strong> Ведется журнал удаленных данных</li>
                                </ul>
                            </div>
                        </section>

                        <section id="requests" class="legal-section">
                            <h2>6. Подача запросов о персональных данных</h2>
                            
                            <h3>6.1 Как подать запрос</h3>
                            <div class="request-methods">
                                <div class="request-method">
                                    <h4>📧 По электронной почте</h4>
                                    <p><strong>Адрес:</strong> dpo@frevonto.com</p>
                                    <p><strong>Тема:</strong> "GDPR Request - [тип запроса]"</p>
                                </div>

                                <div class="request-method">
                                    <h4>📮 Почтовым письмом</h4>
                                    <p><strong>Адрес:</strong> Frevonto, GDPR Requests<br>
                                    [ADDRESS_PLACEHOLDER], Tallinn, 101xx, Estonia</p>
                                </div>

                                <div class="request-method">
                                    <h4>📱 Через онлайн-форму</h4>
                                    <p>Используйте нашу защищенную форму для подачи запросов:</p>
                                    <a href="#gdpr-request-form" class="btn btn-secondary">Форма запроса GDPR</a>
                                </div>
                            </div>

                            <h3>6.2 Требования к запросам</h3>
                            <div class="request-requirements">
                                <h4>Обязательная информация:</h4>
                                <ul>
                                    <li>Полное имя (как указано в наших записях)</li>
                                    <li>Email-адрес для связи</li>
                                    <li>Тип запрашиваемого действия</li>
                                    <li>Подтверждение личности (копия документа)</li>
                                </ul>

                                <h4>Дополнительная информация (при необходимости):</h4>
                                <ul>
                                    <li>Даты взаимодействия с нами</li>
                                    <li>Контекст обработки данных</li>
                                    <li>Конкретные данные для исправления/удаления</li>
                                </ul>
                            </div>

                            <h3>6.3 Обработка запросов</h3>
                            <div class="request-processing">
                                <div class="processing-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h4>Получение и регистрация</h4>
                                        <p>Ваш запрос регистрируется в течение 2 рабочих дней</p>
                                    </div>
                                </div>

                                <div class="processing-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h4>Подтверждение личности</h4>
                                        <p>Проверяем вашу личность для защиты данных</p>
                                    </div>
                                </div>

                                <div class="processing-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h4>Обработка запроса</h4>
                                        <p>Анализируем запрос и собираем необходимую информацию</p>
                                    </div>
                                </div>

                                <div class="processing-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h4>Ответ</h4>
                                        <p>Предоставляем ответ в течение 1 месяца (в сложных случаях — до 3 месяцев)</p>
                                    </div>
                                </div>
                            </div>

                            <h3>6.4 Стоимость запросов</h3>
                            <div class="request-costs">
                                <p><strong>Бесплатно:</strong></p>
                                <ul>
                                    <li>Первый запрос на доступ к данным</li>
                                    <li>Исправление неточных данных</li>
                                    <li>Удаление данных (при наличии оснований)</li>
                                    <li>Отзыв согласия</li>
                                </ul>

                                <p><strong>Возможна плата:</strong></p>
                                <ul>
                                    <li>Повторные запросы на доступ (максимум €25)</li>
                                    <li>Явно необоснованные запросы</li>
                                    <li>Чрезмерные по объему запросы</li>
                                </ul>
                            </div>
                        </section>

                        <section id="complaints" class="legal-section">
                            <h2>7. Подача жалоб</h2>
                            
                            <h3>7.1 Жалоба нам</h3>
                            <p>Если вы не удовлетворены тем, как мы обработали ваш запрос или обрабатываем ваши данные, сначала свяжитесь с нами:</p>
                            
                            <div class="complaint-contact">
                                <p><strong>Email:</strong> complaints@frevonto.com<br>
                                <strong>Тема:</strong> "GDPR Complaint"<br>
                                <strong>Срок рассмотрения:</strong> 14 рабочих дней</p>
                            </div>

                            <h3>7.2 Жалоба в надзорный орган</h3>
                            <p>Вы имеете право подать жалобу в надзорный орган по защите данных:</p>

                            <div class="supervisory-authorities">
                                <div class="authority">
                                    <h4>🇪🇪 Эстонская инспекция по защите данных</h4>
                                    <p><strong>Веб-сайт:</strong> <a href="https://www.aki.ee" target="_blank">www.aki.ee</a><br>
                                    <strong>Email:</strong> info@aki.ee<br>
                                    <strong>Телефон:</strong> +372 627 4135<br>
                                    <strong>Адрес:</strong> Väike-Ameerika 19, 10129 Tallinn</p>
                                </div>

                                <div class="authority-note">
                                    <p><strong>Важно:</strong> Вы можете подать жалобу в любой надзорный орган ЕС, но рекомендуется обращаться в орган по месту вашего проживания или по месту нарушения.</p>
                                </div>
                            </div>

                            <h3>7.3 Судебная защита</h3>
                            <p>Вы также имеете право на судебную защиту против:</p>
                            <ul>
                                <li>Решений надзорного органа</li>
                                <li>Нашего бездействия по вашим запросам</li>
                                <li>Нарушений ваших прав в рамках GDPR</li>
                            </ul>
                        </section>

                        <section id="contact-dpo" class="legal-section">
                            <h2>8. Контакт с ответственным за защиту данных</h2>
                            
                            <div class="dpo-contact">
                                <div class="dpo-card">
                                    <h3>Ответственный за защиту персональных данных (DPO)</h3>
                                    <div class="dpo-details">
                                        <!-- TODO: Replace with actual DPO information -->
                                        <p><strong>Имя:</strong> [DPO_NAME]<br>
                                        <strong>Должность:</strong> Data Protection Officer<br>
                                        <strong>Email:</strong> dpo@frevonto.com<br>
                                        <strong>Прямой телефон:</strong> +372 6xx xxxx<br>
                                        <strong>Часы работы:</strong> Пн-Пт: 9:00-17:00 EET</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Когда обращаться к DPO</h3>
                            <div class="dpo-responsibilities">
                                <ul>
                                    <li>Вопросы о ваших правах на защиту данных</li>
                                    <li>Запросы на доступ, исправление или удаление данных</li>
                                    <li>Отзыв согласия на обработку данных</li>
                                    <li>Жалобы на обработку персональных данных</li>
                                    <li>Вопросы о том, как мы используем ваши данные</li>
                                    <li>Консультации по вопросам защиты данных</li>
                                </ul>
                            </div>

                            <h3>Время ответа</h3>
                            <p>Мы стремимся отвечать на все запросы к DPO в следующие сроки:</p>
                            <ul>
                                <li><strong>Простые вопросы:</strong> 3 рабочих дня</li>
                                <li><strong>Запросы на доступ к данным:</strong> 1 месяц</li>
                                <li><strong>Сложные случаи:</strong> до 3 месяцев (с уведомлением)</li>
                                <li><strong>Экстренные ситуации:</strong> В течение 24 часов</li>
                            </ul>
                        </section>

                        <!-- GDPR Request Form -->
                        <section id="gdpr-request-form" class="legal-section">
                            <h2>9. Форма запроса GDPR</h2>
                            
                            <div class="gdpr-form-wrapper">
                                <form class="gdpr-request-form" id="gdpr-form">
                                    <div class="form-section">
                                        <h3>Личная информация</h3>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="gdpr-first-name">Имя *</label>
                                                <input type="text" id="gdpr-first-name" name="first_name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gdpr-last-name">Фамилия *</label>
                                                <input type="text" id="gdpr-last-name" name="last_name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="gdpr-email">Email *</label>
                                            <input type="email" id="gdpr-email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gdpr-phone">Телефон</label>
                                            <input type="tel" id="gdpr-phone" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3>Тип запроса</h3>
                                        <div class="form-group">
                                            <label for="gdpr-request-type">Выберите тип запроса *</label>
                                            <select id="gdpr-request-type" name="request_type" required>
                                                <option value="">Выберите тип запроса</option>
                                                <option value="access">Доступ к данным (статья 15)</option>
                                                <option value="rectification">Исправление данных (статья 16)</option>
                                                <option value="erasure">Удаление данных (статья 17)</option>
                                                <option value="restriction">Ограничение обработки (статья 18)</option>
                                                <option value="portability">Переносимость данных (статья 20)</option>
                                                <option value="objection">Возражение против обработки (статья 21)</option>
                                                <option value="withdraw-consent">Отзыв согласия</option>
                                                <option value="complaint">Жалоба на обработку данных</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3>Детали запроса</h3>
                                        <div class="form-group">
                                            <label for="gdpr-details">Подробности запроса *</label>
                                            <textarea id="gdpr-details" name="details" rows="5" placeholder="Опишите ваш запрос подробно..." required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="gdpr-context">Контекст взаимодействия</label>
                                            <textarea id="gdpr-context" name="context" rows="3" placeholder="Когда и как вы взаимодействовали с нами (например: подавали заявку на вакансию в январе 2024)"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <h3>Подтверждение личности</h3>
                                        <div class="form-group">
                                            <label for="gdpr-id-document">Документ, удостоверяющий личность</label>
                                            <input type="file" id="gdpr-id-document" name="id_document" accept=".pdf,.jpg,.png">
                                            <small>Загрузите копию паспорта или ID-карты (первая страница достаточно)</small>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <div class="form-group checkbox-group">
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="identity_confirmation" required>
                                                <span class="checkmark"></span>
                                                Подтверждаю, что являюсь лицом, данные которого запрашиваю, и предоставленная информация является достоверной *
                                            </label>
                                        </div>
                                        <div class="form-group checkbox-group">
                                            <label class="checkbox-label">
                                                <input type="checkbox" name="privacy_consent" required>
                                                <span class="checkmark"></span>
                                                Согласен с <a href="privacy.php" target="_blank">политикой конфиденциальности</a> в части обработки данных для рассмотрения данного запроса *
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary btn-large">Отправить запрос GDPR</button>
                                        <button type="reset" class="btn btn-secondary">Очистить форму</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>

                    <div class="legal-footer">
                        <p>Дата вступления в силу: <?php echo date('d.m.Y'); ?></p>
                        <div class="legal-actions">
                            <a href="#gdpr-request-form" class="btn btn-primary">Подать запрос GDPR</a>
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
                                <a href="cookies.php">Cookies</a>
                                <a href="terms.php">Условия использования</a>
                                <a href="gdpr.php" class="active">GDPR</a>
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
                                <strong>dpo@frevonto.com</strong><br>
                                Вопросы по защите данных
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