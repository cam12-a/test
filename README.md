# test
Описание выпоненных задания
В процессе реализации задания были использованы следующие инструменты и технологии : HTML, CSS, bootstrap, JQUERY, JS, JSON, CodeIgniter, Ajax, MySQL.
В папке application/config было настроено базовые конфигурации сайта,подключение к СУБД MySQLб насроено в appplication/database ее автогрузка насроена application/autoload, в папке application/config настроена базовая ссылка сайта.
Были созданы два контролера(controller), два модель(model) и одно представление(view).
Контролер Welcome- является главным а контролер PostComment вызывает модель SaveComment который в свою очередь делает запрос в БД для сохранения комментарии. также в контролере PostComment есть модель для получения всех комментарии.
Модель SaveComment и GetComment позволяют созранение и получение комментарии.
Представление welcome_message.php - это свертка HTML.
в папке application/js в файле myCmnt.js описано политика клиент-сервер именно в этом файле клиент отправляет запрос на севрер и север в свою очередь возвращает ответ в 
JSON формат, при отправке запрос использована JQUERY+JS+JSON+Ajax.
Для получение доступа к файлам сайта в папке application и system в файле .htaccess была переработана конфигурации.

Запуск сайта после того как сайт перемещен на сервер необходимо выбить следующую ссылку: http://ip/CI(папка в которой находится приложение)/index.php/welcome в моем случае http://127.0.0.1/CI/index.php/welcome.
для тестирования сайта было использовано brawser Mozila firefox можно еще использовать и другие чтобы узнать как поведет себя сайт. было использовано моудльное тестирование т.е сайт был тестирован по функционалу. Проект был выполнен на ОС Linux
Добавлен скриншот сайта (сайт и сайт2)
