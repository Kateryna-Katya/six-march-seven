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
            <h1 data-aos="fade-down">Политика касаемо обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые образовательной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями GDPR (General Data Protection Regulation).
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну студентов IT-школы.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия, используемые в Политике</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных,
                    обеспечивающих их доступность в сети интернет по сетевому адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта <strong><?= $domainTitle ?></strong>.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному Пользователю платформы.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие, совершаемое с
                    использованием средств автоматизации или без них с персональными данными.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя (для идентификации в системе обучения);</li>
                        <li>Адрес электронной почты (для доступа к учебным материалам);</li>
                        <li>Номера телефонов (валидация по стандартам Франции).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Сбор и обработка обезличенных данных
                            о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            Google Аналитика и технологий отображения контента.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки персональных данных</h2>
            <ul data-aos="fade-up">
                <li>
                    Идентификация Пользователя для предоставления доступа к личному кабинету
                    образовательной платформы <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Установление обратной связи, включая направление
                    уведомлений о новых курсах, вебинарах и изменениях в программе обучения.
                </li>
                <li>
                    Заключение и исполнение договоров на образовательные услуги в странах ЕС.
                </li>
                <li>
                    Информирование Пользователя посредством отправки электронных писем. 
                    Пользователь всегда может отказаться от рассылок, направив письмо на адрес
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания обработки</h2>
            <p data-aos="fade-up">
                Оператор обрабатывает персональные данные только при наличии добровольного согласия Пользователя, выраженного 
                путем заполнения форм на сайте <strong><?= $domainTitle ?></strong> или при нажатии кнопки «Принять» в Cookie popup.
            </p>

            <h2 data-aos="fade-up">6. Порядок безопасности данных</h2>
            <ul data-aos="fade-up">
                <li>
                    Оператор принимает все технические меры для защиты данных от неправомерного доступа в соответствии с европейскими стандартами кибербезопасности.
                </li>
                <li>
                    Персональные данные Пользователя никогда не передаются третьим лицам без явного согласия, за исключением случаев исполнения закона.
                </li>
                <li>
                    Срок обработки данных неограничен. Пользователь может отозвать согласие в любой момент через email 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Заключительные положения</h2>
            <p data-aos="fade-up">
                Актуальная версия Политики <strong><?= $domainTitle ?></strong> находится в свободном 
                доступе на главной странице <strong><?= $fullDomain ?></strong>. По всем вопросам касательно данных обращайтесь к нам:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480604">+33 1 89 48 06 04</a><br>
                Локация Оператора: 15 Rue de la Paix, 75002 Paris, France
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