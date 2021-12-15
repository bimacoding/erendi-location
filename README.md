# erendi-location
Location packages for province, citites, district, and subdistrict indonesian support laravel 8
### Installation

1. Install dengan composer

```php
composer require erendi/menu
```
2. Tambahkan kelas berikut, ke array "providers" di file config/app.php

```php
Erendi\Location\LocationServiceProvider::class,
```

3. Tambahkan facades di file config/app.php "aliase"

```php
'Menu' => Erendi\Location\Facades\Location::class,
```

4. Publish packages

```php
php artisan vendor:publish --provider="Erendi\Location\LocationServiceProvider"
```
