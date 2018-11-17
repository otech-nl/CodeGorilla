apt-get update
apt-get upgrade
apt-get install -yq mysql-server unzip nginx npm
apt-get remove apache2 apache2-data apache2-utils
apt-get install -yq php php-fpm composer php-mbstring php-xml php-zip
apt-get autoremove
mysql_secure_installation
apt-get install phpmyadmin
