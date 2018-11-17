# CodeGorilla PHP Bootcamp: Vagrant VM 

In deze branch vind je een [Vagrant](https://www.vagrantup.com/) _Virtual Machine_ voor ontwikkeling met Laravel (PHP, MySQL en PhpMyAdmin):

    vagrant up

Voor PhpMyAdmin moet nginx geconfigureerd en herstart:

    vagrant ssh
    sudo cp nginx.conf /etc/nginx/sites-enabled/default
    sudo service nginx restart
