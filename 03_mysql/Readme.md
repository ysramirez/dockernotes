``` bash
docker build -t php-app:01 .
docker run --name mysql-app -e MYSQL_ROOT_PASSWORD=1234 -d mysql:latest
docker run --name final-app --link mysql-app -d php-app:01
 ```
- --link=[] Add link to another container