Фильтрация домашних заданий
=====================
Для запуска требуется docker

Клонируйте проект и выполните команду:
```
composer install
```

переименуйте .env.example в .env.:
```bash
cp .env.example .env
```

Установите ключ шифрования командой
```bash
php artisan key:generate
```

Запустите приложение:
```bash
./vendor/bin/sail up -d
```

Выполните миграцию
```bash
./vendor/bin/sail artisan migrate
```

Заполните базу
```bash
./vendor/bin/sail artisan db:seed
```
Перейдите по ссылке:
http://localhost:8000/

Для остановки приложения:
```bash
    ./vendor/bin/sail stop
```
