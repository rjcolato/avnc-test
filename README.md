# DEVELOPER MANUAL

## Useful commands
Generate your models, migrations, controllers and seeders
```bash
 php artisan make:model Branches -a
 php artisan make:model Employess -a
 php artisan make:model Genre -a
 php artisan make:model Turns -a
 php artisan make:model Shifts -a
```
Test yours models
```bash
php artisan migrate --pretend
```

Migrate your Database
```bash
php artisan migrate
```

Seed your db for testing
```bash
 php artisan db:seed
```

Add views
```bash
php artisan make:migration employees_entry_report
```

Refresh your data
```bash
php artisan migrate:fresh --seed
```
