
## instalar
sudo apt update
sudo apt install php mysql-server php-mysql -y

## root pw
ALTER USER 'root'@'localhost'
IDENTIFIED WITH caching_sha2_password
BY 'Sistemas';

## simplificado
ALTER USER 'root'@'localhost'
IDENTIFIED BY 'Sistemas';

FLUSH PRIVILEGES;
## entrar mysql
mysql -u root -p
