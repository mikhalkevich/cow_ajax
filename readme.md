# Шаблонный проект html, css, JavaScript и jQuery, PHP, MySQL
После установки вы получите html, css, jQuery шаблон сайта.
Папка media\pages с примерами API JavaScript. Рассматриваются такие API, как
- animation
- canvas
- dragAndDrop
- и другие.

# Информация по установке
- клонировать проект в папку domains сервера https://github.com/mikhalkevich/cow_php_mysql.git
- в PHPMyAdmin создать базу с именем cow
- перейти в базу cow
- импорт файла cow.sql
 
 
# Система контроля версий (подсказки)
- перейти в папку с проектом
- git init (инициализация пустого репозитория)
- git add * (добавить файлы проекта в область видимости git)
- git config --global user.name "John Doe" (один раз для того, чтобы представиться git-у)
- git config --global user.email johndoe@example.com (один раз для того, чтобы представиться git-у)
- git commit -m "first commit" (фиксация изменений)
- git remote add origin https://github.com/mikhalkevich/cow.git (создание переменной)
- git branch -M main (переключение в ветку main)
- git push -u origin main (заливаем проект на удаленный репозиторий)
- git clone https://github.com/mikhalkevich/cow.git (клонирование)
- git pull https://github.com/mikhalkevich/cow.git ( забрать в существующий репозиторий)

# Команды git для постоянного пользования
- git add *
- git commit -m "any commit"
- git push

# Статические страницы
- создать базу данных utf8-general-ci
- таблица: маленькими буквами, без проблелов, без тире, с буквой "s" в конце имени, id(AI)
- типы таблиц: CSV, archive, memory, MyISAM, InnoDB
- подключение к базе, файл config.php
- запрос: строка запроса, выполнение запроса