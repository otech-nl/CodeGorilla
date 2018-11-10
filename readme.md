# CodeGorilla PHP Bootcamp: deployment

In deze voorbeelden bekijken we de deployment van een Laravel-app via Heroku of een VPS.

## Heroku

Heroku is een cloud _Platform as a Service_ (PaaS) dat werkt als Github, waarbij je app na elke push wordt bijgewerkt (afhankelijkheden) en opgestart.

Voer [Getting Started with Laravel](https://devcenter.heroku.com/articles/getting-started-with-laravel) uit:

1. [Signup](https://signup.heroku.com/)
2. Install [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli).
3. `heroku create` in je projectdirectory:
    - dit voegt remote `heroku` toe aan je git repository en
    - [registreert](https://dashboard.heroku.com/apps) je app
4. Edit `Procfile`:
    - `web: vendor/bin/heroku-php-apache2 web/`
5. `git push heroku master`
    - Heroku gebruikt alleen de master branch. Als je toch een andere branch wilt deployen, gebruik dan `git push heroku deployment:master` (waarbij `deployment` je andere branch is)
6. `php artisan key:generate --show` en `heroku config:set APP_KEY=`
7. `heroku ps:scale web=1`
8. `heroku open`

### Tips

1. `heroku logs --tail`
