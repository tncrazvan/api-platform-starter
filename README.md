# Entities 

You can create entities by running 
```php
php bin/console make:entity
```

then run 

```php
php bin/console make:migration
```

to create a migration for your changes.

and finally run 
```php
php bin/console doctrine:migrations:migrate
```

to persist changes to your database.