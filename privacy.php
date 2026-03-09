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
            <h1 data-aos="fade-down">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и клиентами <strong><?= $domainTitle ?></strong>, как для оказания 
                образовательных услуг и ИТ-обучения, так и для других взаимодействий в электронном
                формате, а также при участии пользователей в вебинарах, программах стажировок и акциях школы, 
                включая техническую поддержку и информационное сопровождение.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши ресурсы могут содержать ссылки на сторонние сервисы (например, GitHub, Figma или платформы для вебинаров), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных образовательных услуг: доступа к учебной платформе,
                участия в практических занятиях, получения сертификатов и внедрения инновационных методик обучения. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации (что может быть необходимо для подтверждения факта обучения и выдачи дубликатов сертификатов). В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель обучения была достигнута или по запросу студента.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем в рамках платформы;</li>
                <li>просмотры информационных и учебных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации в системе обучения и персонализации контента:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя / ФИО;</li>
                <li>e-mail и номер телефона для оперативной связи и отправки доступов;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>информация о договорах на обучение между студентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах на консультацию, отправленных через формы;</li>
                <li>сведения о пройденных курсах, тестах и полученных квалификациях;</li>
                <li>произведенные платежи за обучение и иная финансовая информация, предусмотренная законодательством ЕС и Франции.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки персональных данных клиентов:</h2>
            <ul data-aos="fade-up">
                <li>предоставление образовательных услуг и доступа к интерактивной платформе;</li>
                <li>учет пожеланий студентов при актуализации учебных планов;</li>
                <li>информирование о новых наборах, скидках на обучение и материалах в блоге через e-mail;</li>
                <li>обеспечение оперативной менторской и технической поддержки.</li>
            </ul>

            <h2 data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul data-aos="fade-up">
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Франции в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie и точечных маркеров</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция), 
                чтобы сделать использование личного кабинета <strong><?= $fullDomain ?></strong> максимально эффективным. Точечные маркеры 
                используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя в отношении персональных данных</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с командой поддержки <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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