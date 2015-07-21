# ethereal-auth
Ethereal CMS authentication package based on Laravel 5 Auth.

## Service provider

```php
Ethereal\Auth\Providers\AuthServiceProvider::class,
```

## Middleware

This should be added to Kernel.php.

```php
'auth' => \Ethereal\Auth\Middleware\AuthMiddleware::class,
'guest' => \Ethereal\Auth\Middleware\GuestMiddleware::class,
```

## Roles



- user [-1,0,1]
- admin [-1,0,1]
- blog [-1,0,1]
