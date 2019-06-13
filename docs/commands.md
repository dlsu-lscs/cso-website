
commands:
Running Server:
```bash
php artisan serve
```

Dwonload HTML and Forms for CSRF:
```bash
composer require "laravelcollective/html":"^5.4.0"
```

Download dependencies:
```bash
composer install
```

Creating Controller:
```bash
php artisan make:controller controllername
```
with resources:
```bash
php artisan make:controller controllername --resource
```

Creating Model:
```bash
php artisan make:model modelname -m
```

Migrating:
```bash
php artisan migrate
```

Checking Route List:
```bash
php artisan route:list
```

Running Tinker:
```bash
php artisan tinker
App\Blog::count()
$blog = new App\Blog();
$blog->title = 'First Blog';
$blog->body = 'my body';
$blog->save();
```

ckeditor:
```bash
composer require unisharp/laravel-ckeditor
php artisan vendor:publish --tag=ckeditor
```

filemanager:
```bash
composer require unisharp/laravel-filemanager:dev-master
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
php artisan route:clear
php artisan config:clear
php artisan storage:link
```


users:

```bash
php artisan make:auth

```


INSTALLATION COMMANDS
```bash
composer require unisharp/laravel-filemanager:dev-master
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public
php artisan route:clear
php artisan config:clear
php artisan storage:link
composer require "laravelcollective/html":"^5.4.0"
composer require unisharp/laravel-ckeditor
php artisan vendor:publish --tag=ckeditor

```