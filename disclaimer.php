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
            <h1 data-aos="fade-down">Отказ от ответственности (Дисклеймер)</h1>

            <p data-aos="fade-up">
                <strong>Общая информация:</strong> Все учебные материалы, технические статьи и сведения,
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный и образовательный характер. Они не являются и не должны
                рассматриваться как прямая гарантия трудоустройства, персональная финансовая рекомендация
                или юридический совет.
            </p>

            <p data-aos="fade-up">
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> стремится к максимальной точности данных, но не дает абсолютных гарантий
                относительно полноты или актуальности всех представленных в обучающих блоках
                материалов. Любые упоминания потенциального карьерного роста, программ пассивного дохода или успехов
                наших выпускников в Европе являются иллюстративными и не гарантируют аналогичных результатов в будущем. 
                Ваши индивидуальные итоги зависят от ваших усилий, опыта и текущих рыночных условий во Франции и странах ЕС.
            </p>

            <p data-aos="fade-up">
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                его владельцы и аффилированные лица не несут ответственности за
                любые прямые или косвенные убытки, решения или действия,
                предпринятые вами на основе информации с этого ресурса. Вся
                ответственность за применение изученных методологий программирования и дизайна
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> формируется на базе передовых практик, актуальных на момент публикации.
            </p>

            <p data-aos="fade-up">
                <strong>Предупреждение о рисках:</strong> Любая деятельность, связанная с освоением новых технологий или изменением карьерного пути, сопряжена с
                временными и интеллектуальными вложениями. Перед принятием
                важных стратегических решений, касающихся вашего профессионального развития, мы рекомендуем провести
                собственное исследование и при необходимости проконсультироваться с профильными специалистами в области HR и права в ЕС.
            </p>

            <p data-aos="fade-up">
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                платформу <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете по собственной воле и полностью принимаете условия данного отказа от ответственности.
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);" data-aos="fade-in">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Март 2026</p>
            </div>
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