# ethereal-auth
Test package

## Service provider

```php
Ethereal\Auth\Providers\AuthServiceProvider::class,
```

## Middleware

This should be added to Kernel.php.

```php
'auth' => \Ethereal\Auth\Middleware\AuthMiddleware::class,
'guest' => \Ethereal\Auth\Middleware\GuestMiddleware::class,
'role' => \Ethereal\Auth\Middleware\RoleMiddleware::class,
```
