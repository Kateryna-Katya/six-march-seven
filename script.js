/**
 * <?= $domainTitle ?> - Main Script
 * Libraries: AOS.js, Anime.js, SimpleParallax.js
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ БИБЛИОТЕК ---

    // AOS: Анимация появления элементов при скролле
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        disable: 'mobile' // по желанию можно отключить на мобилках для плавности
    });

    // SimpleParallax: Параллакс-эффект для изображений
    const parallaxImages = document.querySelectorAll('.parallax-hero, .parallax-about, .parallax-faq');
    if (parallaxImages.length > 0) {
        new simpleParallax(parallaxImages, {
            delay: 0.6,
            transition: 'cubic-bezier(0,0,0,1)',
            scale: 1.3,
            breakpoint: 768
        });
    }


    // --- 2. HEADER & НАВИГАЦИЯ ---

    const header = document.querySelector('.header');
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    // Изменение хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(255, 255, 255, 0.98)';
            header.style.boxShadow = '0 10px 30px rgba(0,0,0,0.05)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(255, 255, 255, 0.8)';
            header.style.boxShadow = 'none';
        }
    });

    // Мобильное меню (Toggle)
    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);

    // Закрытие меню при клике на ссылку
    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // Плавный скролл для всех якорных ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });


    // --- 3. ANIME.JS АНИМАЦИИ ---

    // Левитация карточек в Hero-секции
    anime({
        targets: '.card-1',
        translateY: [0, -20],
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 3000
    });

    anime({
        targets: '.card-2',
        translateY: [0, 15],
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        duration: 2500,
        delay: 500
    });

    // Ховер-эффект для иконок курсов
    const courseCards = document.querySelectorAll('.course-card');
    courseCards.forEach(card => {
        const icon = card.querySelector('.course-card__icon');
        card.addEventListener('mouseenter', () => {
            anime({
                targets: icon,
                scale: [1, 1.2],
                rotate: '10deg',
                duration: 400,
                easing: 'easeOutQuad'
            });
        });
        card.addEventListener('mouseleave', () => {
            anime({
                targets: icon,
                scale: 1,
                rotate: '0deg',
                duration: 400,
                easing: 'easeOutQuad'
            });
        });
    });


    // --- 4. АККОРДЕОН (FAQ) ---

    const faqTriggers = document.querySelectorAll('.faq-item__trigger');
    
    faqTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const parent = trigger.parentElement;
            const content = parent.querySelector('.faq-item__content');
            const isActive = parent.classList.contains('active');

            // Закрываем другие активные вкладки
            document.querySelectorAll('.faq-item.active').forEach(item => {
                if (item !== parent) {
                    item.classList.remove('active');
                    anime({
                        targets: item.querySelector('.faq-item__content'),
                        height: 0,
                        duration: 400,
                        easing: 'easeOutQuart'
                    });
                }
            });

            // Тоггл текущей вкладки
            parent.classList.toggle('active');
            anime({
                targets: content,
                height: isActive ? 0 : content.scrollHeight,
                duration: 500,
                easing: 'easeOutQuart'
            });
        });
    });


    // --- 5. ФОРМА КОНТАКТОВ & КАПЧА ---

    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaLabel = document.getElementById('captchaLabel');
    const captchaInput = document.getElementById('captchaInput');
    const formStatus = document.getElementById('formStatus');

    // Генерация капчи
    const n1 = Math.floor(Math.random() * 10) + 1;
    const n2 = Math.floor(Math.random() * 10) + 1;
    const correctAnswer = n1 + n2;
    if(captchaLabel) captchaLabel.textContent = `Сколько будет ${n1} + ${n2}?`;

    // Валидация телефона (только цифры и +)
    if(phoneInput) {
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });
    }

    // Обработка отправки
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            if (parseInt(captchaInput.value) !== correctAnswer) {
                showStatus('Ошибка: Неверный ответ на капчу!', 'error');
                return;
            }

            showStatus('Отправка...', '');

            // Имитация AJAX
            setTimeout(() => {
                showStatus('Успешно! Мы свяжемся с вами в ближайшее время.', 'success');
                contactForm.reset();
                
                anime({
                    targets: '.form',
                    scale: [1, 1.02, 1],
                    duration: 600,
                    easing: 'easeInOutQuad'
                });
            }, 1500);
        });
    }

    function showStatus(text, type) {
        formStatus.textContent = text;
        formStatus.className = 'form__status ' + type;
        
        anime({
            targets: formStatus,
            opacity: [0, 1],
            translateY: [10, 0],
            duration: 400,
            easing: 'easeOutSine'
        });
    }


    // --- 6. COOKIE POPUP ---

    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('cookies_accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 3000);
    }

    if(acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }
});