# MVCraftPHP

**MVCraftPHP** — это лёгкий PHP-фреймворк на архитектуре MVC, разработанный для чистоты кода, скорости и удобства.

## 🚀 Возможности
- Простая структура MVC
- Лёгкое подключение контроллеров и моделей
- Минимальные зависимости
- Совместимость с PHP 8+

## 🧱 Структура

MVCraftPHP/
├── app/
│   ├── Controllers/          → Контроллеры приложения
│   │   └── HomeController.php
│   ├── Core/                 → Ядро фреймворка (MVC, Router, View, Container)
│   │   ├── Router.php
│   │   ├── Controller.php
│   │   ├── View.php
│   │   ├── Model.php
│   │   └── Container.php
│   ├── Models/               → Модели данных
│   │   └── Post.php
│   └── Views/                → Представления (HTML, шаблоны)
│       ├── layout.php
│       └── home/
│           └── index.php
│
├── bootstrap.php              → Инициализация приложения
├── composer.json              → Настройки Composer и автозагрузка
│
├── config/                    → Конфигурационные файлы
│   ├── app.php
│   └── database.php
│
├── public/                    → Корневая папка для веб-доступа
│   ├── .htaccess
│   └── index.php
│
├── routes/                    → Файлы маршрутов
│   └── web.php
│
├── storage/                   → Временные файлы, кеш, логи
│   └── cache/
│
└── vendor/                    → Пакеты Composer

## ⚙️ Установка
git clone https://github.com/yourusername/MVCraftPHP.git

cd MVCraftPHP
php -S localhost:8000 -t public

## 🧠 Автор
**Hrach Khalafyan** — разработчик и создатель фреймворка MVCraftPHP.
