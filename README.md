# blog-editoriale

![Application screenshot](screenshot/home.png)

Multi-page editorial blog built through a classic server-side request/response flow: defined routes with dedicated controllers and content rendered through reusable templates with a shared layout. The archive section lists every published article and each article has its own detail page. Publishing is reserved to registered authors: registration and login let them create, edit and delete articles, while the writing area is protected and visitors can only read. Articles live on a dedicated database and keep title, author, category, content and an optional image uploaded directly from the editor. A contact section collects messages through a validated form that builds a notification email delivered to the local log during development. The main flow of the routes is covered by an automated test suite.

## Screenshots

![Homepage](screenshot/home.png)
![Articles list](screenshot/articles.png)
![Contact page](screenshot/contact.png)
![Secret](screenshot/tree.png)

## Installation and setup

```bash
composer setup
npm run dev
```

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
npm install
npm run build
php artisan serve
```