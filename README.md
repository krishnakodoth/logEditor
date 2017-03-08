# logEditor
Laravel Project Log editor
Laravel 5 log viewer
======================

TL;DR
-----
The best (IMO) LogEditor for Laravel 5 .**Install with composer, create a route to `LogViewController`**. No public assets, no vendor routes, works with and/or without log rotate. Inspired by rap2hpoutre (https://github.com/rap2hpoutre/laravel-log-viewer)

Install (Laravel)
-----------------
Install via composer
```
composer require krishnakodoth/log-editor
```

Add Service Provider to `config/app.php` in `providers` section
```php
KrishnaKodoth\LogEditor\LogEditorServiceProvider::class,
```

Add a route in your web routes file:
```php 
Route::get('/get/logs','KrishnaKodoth\LogEditor\LogEditorController@getLogEditor');
```

Go to `http://your-app/get/logs` or some other route
