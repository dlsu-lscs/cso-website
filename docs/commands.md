
commands:
Running Server:
```bash
php artisan serve
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

Checking Route List:
```bash
php artisan route:list
```

Running Tinker:
```bash
php artisan tinker
App\\Blog::count()
$blog = new App\\Blog();
$blog->title = 'First Blog';
$blog->body = 'my body';
$blog->save();
```