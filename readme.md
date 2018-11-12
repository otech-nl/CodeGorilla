# CodeGorilla PHP Bootcamp: deployment

In deze voorbeelden bekijken we de [https://laravel.com/docs/5.7/deployment](deployment) van een Laravel-app via Heroku of een VPS.

## Heroku

Heroku is een cloud _Platform as a Service_ (PaaS) dat werkt als Github, waarbij je app na elke push wordt bijgewerkt (afhankelijkheden) en opgestart.

N.B. Je `.env` sla je *nooit*  op in versiebeheer. Gebruik `heroku config:set <VARIABLE>=<VALUE>` en `heroku config`. 

Voer [Getting Started with Laravel](https://devcenter.heroku.com/articles/getting-started-with-laravel) uit:

1. [Signup](https://signup.heroku.com/)
2. Install [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli).
3. `heroku create` in je projectdirectory:
    - dit voegt remote `heroku` toe aan je git repository en
    - [registreert](https://dashboard.heroku.com/apps) je app
4. Edit `Procfile`:
    - `web: vendor/bin/heroku-php-apache2 public/`
5. `git push heroku master`
    - Heroku gebruikt alleen de master branch. Als je toch een andere branch wilt deployen, gebruik dan `git push heroku deployment:master` (waarbij `deployment` je andere branch is)
6. `php artisan key:generate --show` en `heroku config:set APP_KEY=`
7. `heroku ps:scale web=1`
8. `heroku open`

### Heroku Database

1. Voeg de `Heroku Postgres` database add-on toe onder de _Resources_ tab van je Heroku dashboard (de `ClearDB MySQL` add-on vereist een credit card).
2. `heroku config:set DB_CONNECTION=pgsql`
3. Haal je instellingen uit`DATABASE_URL` volgens deze struktuur `postgres://DB_USERNAME:DB_PASSWORD@DB_HOST?DB_DATABASE` en stel deze in met `heroku config:set`.
4. `heroku run php artisan migrate`

### Heroku Tips

1. [Custom Domain Name](https://devcenter.heroku.com/articles/custom-domains): `heroku domains:add www.example.com`
2. `heroku logs --tail` (evt. met `heroku config:set APP_LOG=errorlog`)
3. `heroku run <command>`

## VPS

VPS staat voor _Virtual Private Server_. Dit is een virtuele machine op een server bij een hosting provider. Een VPS is betaalbaar (enkele Euro's per maand) en schaalbaar. Je kunt/moet je VPS helemaal zelf beheren (meestal Linux).

Je kunt op je VPS inloggen met `ssh`. Met het commando `sudo` kan je commando's als `root` uitvoeren (met beheerrechten). Dit lijkt heel erg op hoe je met Homestead werkt (of andere virtual machines).

Voer de volgende stappen uit om je website te deployen op een VPS gebruiken we weer git:

1. Bestel een VPS. Hierbij kan je vaak al aangeven waar je je VPS voor wilt gebruiken (bijvoorbeeld LAMP). Het kan even duren voor je VPS geïnstalleerd is.
2. `ssh <hostname>`
3. Installeer de benodigde packages:
    - `add-apt-repository ppa:ondrej/nginx` (voor de nieuwste versies)
    - `sudo apt update`
    - `sudo apt upgrade`
    - `sudo apt install nginx php php-fpm composer php-gd php-mbstring php-xml php-opcache php-xmlrpc php-soap`
    - `sudo apt remove apache2 apache2-data apache2-utils`
4. Installeer je website:
    - `git clone git@github.com:otech-nl/CodeGorilla.git`
    - `cd CodeGorilla`
    - `composer install`
    - Controlleer of je site werkt met `php artisan serve --host=0.0.0.0`
5. Maak je bestanden toegankelijk voor de webserver:
    - `sudo chgrp -R www-data CodeGorilla`
    - `sudo chmod -R 775 CodeGorilla/storage`
6. Zet de NGINX configuratie klaar:
    - `sudo rm /etc/nginx/sites-enabled/default`
    - `sudo cp /home/vagrant/CodeGorilla/nginx.conf /etc/nginx/sites-enabled/default`
7. `sudo service nginx restart`

### VPS Tips

1. Als `nginx` niet start: `sudo cat /var/log/nginx/error.log`
2. Voeg je Vagrant host toe aan `C:\Windows\System32\drivers\etc`
