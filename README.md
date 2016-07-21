Docker Notes
============

Install Docker - Ubuntu
-----------------------

``` bash
$ sudo apt-get update
$ sudo apt-get install docker-engine
$ sudo service docker start
$ sudo docker run hello-world
```
https://docs.docker.com/engine/installation/linux/ubuntulinux/

Search containers
-----------------
``` bash
$ docker search [container]
```
Visual search https://hub.docker.com/explore/

Download containers
-------------------
``` bash
$ docker pull [container]
```

IP container
-------------------
``` bash
$  docker inspect --format '{{ .NetworkSettings.IPAddress }}' [id container]
```

Install Docker Compose - Ubuntu
-------------------------------

``` bash
$  curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > docker-compose
$  sudo mv docker-compose /usr/local/bin/docker-compose
$  chmod +x /usr/local/bin/docker-compose  
```

