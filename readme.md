# SummerPHP
SummerPHP - это современный фреймворк для веб-приложений. SummerPHP выделяется на фоне других фреймворков своей компактностью, простотой установки, а так же тем, что сделан в России.
## Требования
- PHP >= 7
- Подключенные зависимости из [php.ini](ini/php.ini)
## Установка
1) Скачать или склонировать репозиторий в удобное место
2) Написать код
3) Запустить файл ```start.bat``` или ```start.sh```, зависимо от системы
4) Наслаждаться результатом
## Документация
- [PHPRouter](docs/PHPRouter.md)
- [PHPExceptionHandler](docs/PHPExceptionHandler.md)
- [PHPOrm](docs/PHPOrm.md)
- [PHPSystem](docs/PHPSystem.md)
- [PHPTemplater](docs/PHPTemplater.md)
- [PHPView](docs/PHPView.md)
- [PHPMailer](docs/PHPMailer.md)
- [PHPHash](docs/PHPHash.md)
- [PHPRequester](docs/PHPRequester.md)
## Структура
```
app/                  Системные библиотеки   
controllers/          Контроллеры
docs/                 Документация
models/               Модели
pages/                Страницы
routes/               Маршруты
ini/                  Файл php.ini
```
## Использование helper
**ПРЕДУПРЕЖДЕНИЕ:** На данный момент доступна лишь версия для Windows, в дальнейших обновлениях будет добавлена так же и версия для Linux

**1. Создание контроллера**
```sh
helper.exe create-controller TestController
```

**Описание:** Создает контроллер TestController в директории controllers. Если директория controllers отсутствует, то создает ее

**2. Создание модели**
```sh
helper.exe create-model User
```

**Описание:** Создает модель User в директории models. Если директория models отсутствует, то создает ее