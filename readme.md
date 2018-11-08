# CodeGorilla PHP Bootcamp voorbeeld-code

In deze repository vind je Laravel-voorbeelden die zijn gebruikt voor de PHP-bootcamp van [CodeGorilla](https://www.codegorilla.nl/). Om deze voorbeelden zelf uit te kunnen voeren moeten [PHP7](http://www.php.net/), [composer](https://getcomposer.org/) en [MySQL](https://dev.mysql.com/) op je computer zijn geïnstalleerd.

Elk voorbeeld-project begint in een aparte branch op basis van een kale Laravel-installatie, die is verkregen door de volgende stappen:

1. `composer global require laravel/installer`
2. `laravel new CodeGorilla`
3. `cd CodeGorilla`

Je kunt de code op je eigen computer zetten met:

1. `git clone git@github.com:otech-nl/CodeGorilla.git`
2. `cd CodeGorilla`
3. `composer install`

Om de voorbeelden te tonen in je browser dien je vanaf de command line (bijvoorbeeld `git bash`, `powershell` of `cmd`) in je projectdirectory het commando `php artisan serve` (continu) te laten draaien. Je kunt het voorbeeld dan bekijken in je browser via [http://localhost:8000]() (soms werk alleen [http://127.0.0.1:8000]()).

Ga naar één van de branches om de voorbeeld-projecten te bekijken. Per stap is een commit gemaakt.
