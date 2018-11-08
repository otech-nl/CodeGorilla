# CodeGorilla PHP Bootcamp: Dierentuin

We gaan de kale Laravel-installatie aanpassen voor een dierentuin die een overzicht wil tonen van de dieren die ze hebben.

## De frontend

1. dierenoverzicht toevoegen (in `resources/views/`)
   - kopieer `welcome.blade.php` naar `base.blade.php`
   - edit `base.blade.php`
   - edit `welcome.blade.php`
   - edit `animals.blade.php`
2. `php artisan make:controller ZooController`
   - edit `app/Http/Controllers/ZooController.php`
   - edit `routes/web.php`
   - `php artisan route:list`

## De backend

1. voorbereiding
   - maak database "zoo" (in `mysql`, MySQL Workbench of PhpMyAdmin)
   - edit `.env` (en herstart `php artisan serve` om de wijzigingen te activeren)
2. `php artisan make:model Animal`
   - edit `app/Animal.php`
3. `php artisan make:migration CreateAnimal`
   - edit `database/migrations/2018_11_07_090946_create_animal.php`
4. `php artisan migrate`
5. voeg dieren toe (in de database)

### De frontend

1. pas animals.blade.php aan

## Wijziging: soort toevoegen

Na een demo bij de opdrachtgever, blijken we ze verkeerd begrepen te hebben: de namen hadden soortnamen moeten zijn (naast de individuele namen) en de databasekolommen hadden in het Nederlands gemoeten:

1. `php artisan make:migration AddBreedToAnimal`
   - om te voorkomen dat we alle soortnamen moeten kopiëren, veranderen de de kolom `name` in `soort` en voegen we een kolom `naam` toe.
2. `php artisan migrate`
   - voeg eerst `"doctrine/dbal": "~2.3"` toe aan `composer.json` en run `composer update` (dit is nodig voor de `renameColumn`)
3. pas dieren aan (database)
4. pas `animals.blade.php` aan
