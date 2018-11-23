# CodeGorilla PHP Bootcamp: IDE & Testing

## Visual Studio

Download en installeer [https://visualstudio.microsoft.com/](Visual Studio 2017 CE) (Community Edition is gratis).

Ga naar `Tools > Extensions and updates... > Online` en installeer _PHP Tools for Visual Studio 2017_.

## Testing

### Vooraf

De tests gaan er van uit dat een database is aangemaakt (e.g. via PhpMyAdmin) en daarna geïnitialiseerd:

    php artisan migrate
    php artisan db:seed

### Unit test

Voeg PHPUnit toe:

    compose require phpunit/phpunit

Voer de test uit:

    phpunit

De test is gemaakt met:

    php artisan make:test AnimalTest --unit

### Browser test

Voeg Dusk toe:

    composer require --dev laravel/dusk
    php artisan dusk:install

Voer de test uit:

    php artisan dusk


De test is gemaakt met:

    php artisan make:test AnimalTest
