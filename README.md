Prepare a custom docker images for the following and deploy the containers using the images.
    1. Apache2 container to host the custom php application created in the Assignment1. Validate that the apache2 is hosted with the custom application by exposting port 80.
    2. MySQL container and expose port 3306
    3. Make sure the apache2 container is able to connect to the mysql container port 3306


vi Dockerfile

docker pull mysql:8.0.16

vi index.php

docker build -t my-php-site2  .
docker run -d -p 80:80 my-php-site2


docker run -p 3306:3306 --name=mysql1 -v /mydata/mysql/log:/var/log/mysql -v /mydata/mysql/data/:/var/lib/mysql -v /mydata/mysql/conf:/etc/mysql/conf.d -e MYSQL_ROOT_PASSWORD=<MySQL_Root_Passsword"-d mysql:8.0.16

docker run -p 5000:80 -d --link <mysql_container_ID> my-php-site2
curl http://localhost:5000

