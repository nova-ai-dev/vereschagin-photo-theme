<?php
/**
 * Front page template.
 *
 * @package VereschaginPhotoPremium
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section id="hero" class="section hero">
    <div class="container hero__grid">
        <div class="hero__content">
            <p class="eyebrow">Премиальная фотография в Москве</p>
            <h1>Создаю визуальные истории, которые остаются с вами навсегда</h1>
            <p class="hero__lead">Свадьбы, персональные съёмки и бренд-контент с авторской режиссурой света, эмоций и деталей.</p>
            <div class="hero__actions">
                <a href="#portfolio" class="btn btn--primary">Смотреть портфолио</a>
                <a href="#contacts" class="btn btn--ghost">Обсудить съёмку</a>
            </div>
            <ul class="hero__facts">
                <li>10+ лет опыта</li>
                <li>350+ реализованных съёмок</li>
                <li>Срок отдачи фото — от 7 дней</li>
            </ul>
        </div>
        <div class="hero__visual img-placeholder" role="img" aria-label="Здесь будет ваше главное hero-изображение">
            <p>Здесь будет hero-изображение</p>
            <!-- ЗАМЕНИТЕ этот блок на <img src="..."> или WordPress block image -->
        </div>
    </div>
</section>

<section id="services" class="section section--muted">
    <div class="container">
        <h2>Услуги</h2>
        <div class="cards cards--three">
            <article class="card">
                <h3>Свадебная съёмка</h3>
                <p>Полное сопровождение вашего дня: от утренних сборов до вечернего праздника.</p>
            </article>
            <article class="card">
                <h3>Портретные истории</h3>
                <p>Индивидуальные и семейные съёмки с мягкой режиссурой и живыми эмоциями.</p>
            </article>
            <article class="card">
                <h3>Контент для бренда</h3>
                <p>Визуал для экспертов и компаний: сайт, соцсети, рекламные материалы.</p>
            </article>
        </div>
    </div>
</section>

<section id="portfolio" class="section">
    <div class="container">
        <h2>Портфолио</h2>
        <p class="section-intro">Современная галерея с акцентом на атмосферу, стиль и настоящие эмоции.</p>
        <div class="gallery-grid">
            <!-- ЗАМЕНИТЕ карточки ниже на реальные <img> или WordPress галерею -->
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 1"><p>Фото 1</p></div>
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 2"><p>Фото 2</p></div>
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 3"><p>Фото 3</p></div>
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 4"><p>Фото 4</p></div>
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 5"><p>Фото 5</p></div>
            <div class="img-placeholder" role="img" aria-label="Плейсхолдер портфолио 6"><p>Фото 6</p></div>
        </div>
    </div>
</section>

<section id="why" class="section section--muted">
    <div class="container">
        <h2>Почему выбирают меня</h2>
        <div class="cards cards--three">
            <article class="card"><h3>Премиальный подход</h3><p>Сценарий, мудборд и консультация перед каждой съёмкой.</p></article>
            <article class="card"><h3>Комфорт в кадре</h3><p>Помогаю с позированием и поддерживаю лёгкую атмосферу.</p></article>
            <article class="card"><h3>Кинематографичный цвет</h3><p>Фирменная обработка без потери естественности.</p></article>
        </div>
    </div>
</section>

<section id="process" class="section">
    <div class="container">
        <h2>Как проходит работа</h2>
        <ol class="process-list">
            <li><strong>Заявка:</strong> обсуждаем задачу, стиль и референсы.</li>
            <li><strong>Подготовка:</strong> планируем локацию, образ, тайминг.</li>
            <li><strong>Съёмка:</strong> создаём сильный визуал в комфортном ритме.</li>
            <li><strong>Результат:</strong> вы получаете готовую серию в онлайн-галерее.</li>
        </ol>
    </div>
</section>

<section id="pricing" class="section section--muted">
    <div class="container">
        <h2>Стоимость</h2>
        <div class="cards cards--three">
            <article class="card pricing-card">
                <h3>Start</h3>
                <p class="price">от 15 000 ₽</p>
                <p>1 час съёмки, 30 фото в авторской обработке.</p>
            </article>
            <article class="card pricing-card pricing-card--featured">
                <h3>Signature</h3>
                <p class="price">от 35 000 ₽</p>
                <p>3 часа съёмки, 90 фото, консультация по образу и локации.</p>
            </article>
            <article class="card pricing-card">
                <h3>Editorial</h3>
                <p class="price">от 70 000 ₽</p>
                <p>Полный продакшн для бренда: концепция, команда, ретушь.</p>
            </article>
        </div>
        <!-- ЗАМЕНИТЕ цены и пакеты на ваши актуальные условия -->
    </div>
</section>

<section id="testimonials" class="section">
    <div class="container">
        <h2>Отзывы</h2>
        <div class="cards cards--three">
            <blockquote class="card">«Очень чуткий подход и невероятный результат. Фотографии выше ожиданий!»<cite>— Анна</cite></blockquote>
            <blockquote class="card">«Съёмка прошла легко, а кадры получились как из журнала.»<cite>— Игорь</cite></blockquote>
            <blockquote class="card">«Сильный визуал для бренда, который сразу повысил доверие клиентов.»<cite>— Мария, основатель студии</cite></blockquote>
        </div>
        <!-- ЗАМЕНИТЕ отзывы на реальные отзывы ваших клиентов -->
    </div>
</section>

<section id="faq" class="section section--muted">
    <div class="container">
        <h2>FAQ</h2>
        <div class="faq-list">
            <details>
                <summary>Сколько ждать готовые фотографии?</summary>
                <p>Обычно от 7 до 14 дней в зависимости от объёма съёмки.</p>
            </details>
            <details>
                <summary>Помогаете ли с выбором образа?</summary>
                <p>Да, я отправляю рекомендации по стилю, цветам и аксессуарам.</p>
            </details>
            <details>
                <summary>Можно ли заказать съёмку в другом городе?</summary>
                <p>Да, выездные съёмки доступны при предварительном согласовании.</p>
            </details>
        </div>
    </div>
</section>

<section id="cta" class="section cta">
    <div class="container cta__inner">
        <h2>Готовы создать ваши лучшие кадры?</h2>
        <p>Напишите мне, и я предложу концепцию съёмки под ваш запрос.</p>
        <a href="#contacts" class="btn btn--primary">Забронировать дату</a>
    </div>
</section>

<section id="contacts" class="section">
    <div class="container contacts">
        <div>
            <h2>Контакты</h2>
            <p>Москва и выезд по России</p>
            <p><a href="tel:+79990000000">+7 (999) 000-00-00</a></p>
            <p><a href="mailto:hello@example.com">hello@example.com</a></p>
            <p><a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a></p>
            <!-- ЗАМЕНИТЕ контакты и ссылки на ваши реальные -->
        </div>
        <form class="contact-form" action="#" method="post">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" placeholder="Ваше имя">

            <label for="contact">Телефон или email</label>
            <input type="text" id="contact" name="contact" placeholder="Как с вами связаться">

            <label for="message">Комментарий</label>
            <textarea id="message" name="message" rows="4" placeholder="Дата, формат съёмки, пожелания"></textarea>

            <button type="submit" class="btn btn--primary">Отправить запрос</button>
        </form>
    </div>
</section>

<?php
get_footer();
