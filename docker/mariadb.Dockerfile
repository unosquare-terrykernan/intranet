FROM mariadb:5.5

COPY extranet.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD root-pwd
ENV MYSQL_DATABASE defaultdb
ENV MYSQL_USER defaultuser
ENV MYSQL_PASSWORD defaultpwd

# NOTE : possible needed for changing the domain in the DB
# ENV SQL_DOMAIN_CHANGE ec2-34-242-58-115.eu-west-1.compute.amazonaws.com
# RUN sed -i "s/localhost:8081/${SQL_DOMAIN_CHANGE}/g" /docker-entrypoint-initdb.d/extranet.sql


# docker build --rm -f C:\Users\leemkay\Development\Unosquare\intranet\docker\mariadb.Dockerfile -t unosquare/extranetdb:0.0.1 .
# docker run --rm -ti unosquare/extranetdb:0.0.1 bash