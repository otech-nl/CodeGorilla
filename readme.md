# CodeGorilla PHP Bootcamp: REST API

Deze REST API komt voort uit de volgende stappen:

    php artisan make:model Ad -m
    <edit migration>
    php artisan migrate
    
    php make:seeder AdSeeder
    <edit seeder>
    composer dumpautoload 
    php db:seed

    php artisan make:resource AdResource
    php artisan make:resource AdCollection
    php artisan make:controller API/AdController --api --model=Ad
    <edit>

In `routes/web.php`:

    Route::apiResource('api/ad', 'API\AdController');

Na deze stap kan je de api testen met `http://localhost:8000/api/ad`

Als je API werkt, kan je via `http://localhost:8000/` bekijken wat je er mee kunt (gebruik `welcome.blade.php`)