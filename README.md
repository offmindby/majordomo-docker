# majordomo-docker
Majordomo smartliving.ru image base on https://hub.docker.com/r/collin24/ubuntu-lamp-phpmyadmin/
Tested on Mac Os X El Capitan
To build with custom DB password (which is similar for phpmyadmin root password) try
docker build --force-rm --build-arg DBPW=<password> -t majordomo .
To run image try
docker run --net=bridge -p 8081:80 -p 4443:443 -p 3306:3306 -tdi majordomo
On Mac Os you can only connect by localhost(127.0.0.1)
