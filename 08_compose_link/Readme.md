``` bash
docker run -d -p 9000:9000 --privileged -v /var/run/docker.sock:/var/run/docker.sock uifd/ui-for-docker
docker build -t php-ext-mysql:01 .
docker-compose up
 ```
