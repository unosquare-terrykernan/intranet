@echo off

docker build -t extranet .

docker run --name extranet01 --link mariadb:mysql -p 8180:80 -v %cd%\wordpress:/var/www/html -d extranet
