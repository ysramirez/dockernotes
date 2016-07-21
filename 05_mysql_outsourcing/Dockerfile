FROM php:7.0.8-apache
RUN docker-php-ext-install mysqli

#docker run --name mysql-app -v /home/aprendephp/docker_training/notes/05_mysql_outsourcing/data_dir:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=1234 -d mysql:latest
#docker build -t php-app:03 .
#docker run --name final-app -v /home/aprendephp/docker_training/notes/05_mysql_outsourcing/localfiles/:/var/www/html/ --link mysql-app -d php-app:03