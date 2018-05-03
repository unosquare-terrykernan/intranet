* Be careful with the connected container and running/stopping of containers. 
You won't want to stop the running live aws01 docker-machine containers by while testing.

### creating a docker-machine on aws
[AWS Docker machine >](https://docs.docker.com/machine/drivers/aws/#environment-variables)
```bash
$ docker-machine create -d amazonec2 --amazonec2-access-key [AWS_ACCESS_KEY] --amazonec2-secret-key [AWS_SECRET_KEY] --amazonec2-region eu-west-1 --amazonec2-instance-type t2.medium  [MACHINE_NAME]
```

### ssh connection to the created docker machine
```bash
$ docker-machine ssh [MACHINE_NAME]
$ sudo docker images
$ sudo docker volume ls
$ sudo docker pull php:7.2-apache
$ sudo docker run --rm -ti -p 8085:80 php:7.2-apache
```
- Note : AWS firewall/Security group might be blocking port access. This can be changed via AWS cli and/or the AWS ec2 ui

### Connecting to the create docker-machine
- Note : this treats the docker commands asif they're local. File context/content is uploaded/scp onto the aws docker-machine.
```bash
$ docker-machine env [MACHINE_NAME]
```
- You can copy the SET env vars output from the above command or run the script which will set the vars for you
```bash
$ & "C:\Program Files\Docker\Docker\Resources\bin\docker-machine.exe" env [MACHINE_NAME] | Invoke-Expression
```

### Creating the containers using (namek|make)
- Note : view Makefile
```bash
$ nmake/make build_wp
$ nmake/make build_mariadb
```
- without namke/make
```bash
$ docker build -f docker/wordpress.Dockerfile -t unosquare/intranet_wp:0.0.0 .
$ docker tag unosquare/intranet_wp:0.0.0 unosquare/intranet_wp:latest

$ docker build -f docker/mariadb.Dockerfile -t unosquare/intranet_db:0.0.0 .
$ docker tag unosquare/intranet_db:0.0.0 unosquare/intranet_db:latest
```
- The containers are now created and available in your local docker repo
```bash
$ docker images
```
### Run using a docker-composer file
[Docker compose docs](https://docs.docker.com/compose/compose-file/)
```bash
$ docker-composer -f PATH\TO\aws01.docker-composer.yaml up
$ docker-composer -f PATH\TO\aws01.docker-composer.yaml up -d # In deamon/background mode
```
- Note : Running the docker-compose is the same as running it through the docker cli. Behind the scenes docker-composer will do the cli stuff i.e:
``` bash
$ docker run -p PORT:PORT -v VOLUME:VOLUME unosquare/intranet_wp:latest # etc
```