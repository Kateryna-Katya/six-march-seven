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
        <?= $domainTitle ?> — Инновационная IT-школа
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Crect width='32' height='32' rx='8' fill='%23FF6B00'/%3E%3Cpath d='M10 12L14 16L10 20' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M18 20H22' stroke='white' stroke-width='2.5' stroke-linecap='round'/%3E%3Ccircle cx='24' cy='10' r='3' fill='%23FF9E5E' /%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#courses" class="nav__link">Программы</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--header">Связаться</a>
                <button class="burger" id="burger">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-down">Политика использования файлов cookie</h1>

            <p data-aos="fade-up">
                Добро пожаловать в инновационную IT-школу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей платформой, обеспечить корректную работу личного кабинета и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика объясняет, как мы применяем эти инструменты 
                для вашего эффективного обучения.
            </p>

            <h2 data-aos="fade-up">Что такое файлы cookie?</h2>
            <p data-aos="fade-up">
                Файл cookie — это небольшой фрагмент данных, который наш сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, язык интерфейса, прогресс в обучении, настройки региона Франция и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их повторно при каждом визите.
            </p>

            <h2 data-aos="fade-up">Какие типы файлов cookie мы используем?</h2>
            <p data-aos="fade-up">
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Критически важны для функционирования платформы. Они позволяют вам
                    безопасно авторизоваться в системе обучения <strong><?= $domainTitle ?></strong> и использовать доступ к учебным материалам. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Собранная анонимная информация помогает нам понимать, какие уроки наиболее востребованы, и улучшать структуру наших курсов.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Позволяют сайту запоминать ваши индивидуальные настройки для предоставления более
                    персонализированного опыта в рамках наших образовательных программ.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Используются для информирования о новых курсах, вебинарах и специальных предложениях, соответствующих вашим интересам.
                </li>
            </ul>

            <h2 data-aos="fade-up">Зачем мы используем файлы cookie?</h2>
            <p data-aos="fade-up">Основные цели на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul data-aos="fade-up">
                <li>Обеспечение стабильной и безопасной работы учебной среды.</li>
                <li>Анализ пользовательского поведения для оптимизации процесса подачи материала.</li>
                <li>Персонализация контента для студентов в Европе.</li>
                <li>Оценка эффективности наших AI-инструментов для обучения.</li>
            </ul>

            <h2 data-aos="fade-up">Ваш выбор и управление файлами cookie</h2>
            <p data-aos="fade-up">
                Вы имеете полный контроль над файлами cookie и можете в любой момент изменить настройки в своем браузере. 
                Однако обратите внимание: отключение строго необходимых файлов может сделать невозможным доступ к защищенным разделам обучения или корректную работу плеера лекций.
            </p>

            <h2 data-aos="fade-up">Файлы cookie третьих сторон</h2>
            <p data-aos="fade-up">
                На страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы Google Analytics для анализа трафика или библиотеки визуализации (например, Anime.js) для интерактивных элементов. Мы рекомендуем ознакомиться с их политиками конфиденциальности.
            </p>

            <h2 data-aos="fade-up">Контактная информация</h2>
            <p data-aos="fade-up">
                Если у вас возникли вопросы касательно нашей политики использования файлов cookie в <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нашей службой поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480604">+33 1 89 48 06 04</a><br>
                Адрес: 15 Rue de la Paix, 75002 Paris, France
            </p>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo logo--footer">
                    <?= $domainTitle ?>
                </a>
                <p class="footer__tagline">Технологии, которые работают на вас. Постройте карьеру, которая меняет
                    правила игры.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Меню</h4>
                <ul class="footer__links">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#courses">Программы</a></li>
                    <li><a href="./#about">О нас</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
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
                <div class="footer__info">
                    <p><a href="tel:+33189480604">+33 1 89 48 06 04</a></p>
                    <p><a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a></p>
                    <p>15 Rue de la Paix, 75002 Paris, France</p>
                </div>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.
            </p>
        </div>
    </footer>
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu__content">
                <nav class="mobile-nav">
                    <a href="./#home" class="mobile-nav__link">Главная</a>
                    <a href="./#courses" class="mobile-nav__link">Программы</a>
                    <a href="./#about" class="mobile-nav__link">О нас</a>
                    <a href="./#reviews" class="mobile-nav__link">Отзывы</a>
                    <a href="./#contact" class="mobile-nav__link">Связаться</a>
                </nav>
            </div>
        </div>
        
        <div class="cookie-popup" id="cookiePopup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button class="btn btn--primary" id="acceptCookies">Принять</button>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="script.js"></script>
</body>

</html>