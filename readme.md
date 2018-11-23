# CodeGorilla PHP Bootcamp: IDE & Testing

## Visual Studio

Download en installeer [https://visualstudio.microsoft.com/](Visual Studio 2017 CE) (Community Edition is gratis).

Ga naar `Tools > Extensions and updates... > Online` en installeer _PHP Tools for Visual Studio 2017_.

## Testing

### Unit tests

Maak en vul de database:

    php artisan migrate
    php artisan db:seed

Voeg PHPUnit toe:

    compose require phpunit/phpunit

Voer de test uit:

    phpunit

De test is gemaakt met:

    php artisan make:test UserTest --unit
