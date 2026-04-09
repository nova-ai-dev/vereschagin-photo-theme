# Vereschagin Photo Premium (WordPress Theme)

Премиальная мобильная WordPress-тема для лендинга фотографа.

## Структура

- `style.css` (валидный header темы WordPress)
- `functions.php`
- `front-page.php`
- `index.php`
- `page.php`
- `header.php`
- `footer.php`
- `assets/css/style.css`
- `assets/js/main.js`
- `assets/img/README.txt` (подсказки по вашим будущим изображениям)

## Что реализовано

- Русскоязычный контент
- Mobile-first верстка
- Премиальный чистый дизайн
- Сильный hero-блок
- Семантическая разметка
- Секции: hero, services, portfolio, why choose me, process, pricing, testimonials, FAQ, CTA, contacts
- Sticky mobile contact button
- Smooth scroll
- Современная gallery-сетка
- Текстовые плейсхолдеры вместо бинарных изображений
- Комментарии в шаблоне, где заменить изображения и текст

## Как установить

1. Скопируйте папку темы в `wp-content/themes/vereschagin-photo-theme`.
2. В админке WordPress: **Внешний вид → Темы**.
3. Активируйте тему **Vereschagin Photo Premium**.
4. (Опционально) Назначьте статическую главную страницу для использования `front-page.php`.

## Подготовка ZIP для установки

Из корня репозитория выполните:

```bash
cd ..
zip -r vereschagin-photo-theme.zip vereschagin-photo-theme
```

После этого загрузите архив `vereschagin-photo-theme.zip` в WordPress через
**Внешний вид → Темы → Добавить новую → Загрузить тему**.

## Важно заменить

- Плейсхолдеры в `front-page.php` на реальные изображения (через `<img>` или блоки WP)
- Тексты в секциях (цены, отзывы, контакты)
- Ссылки на соцсети и контакты
