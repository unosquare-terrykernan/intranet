FROM mariadb:10.1.31

COPY sql_files/*.sql /docker-entrypoint-initdb.d/

# docker build --rm -f C:\Users\leemkay\Development\Unosquare\intranet\docker\mariadb.Dockerfile -t unosquare/extranetdb:0.0.1 .
# docker run --rm -ti unosquare/extranetdb:0.0.1 bash