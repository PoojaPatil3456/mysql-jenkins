Assignment 1: To connect MySQL and php containers and link them 
***********************************************************************************************
To containerize php: 
***********************************************************************************************

Create DockerFile 

Build docker file with command to create image 

 docker build –t imagename:imagetag . 

Check if image created properly 

 docker images 

Run image 

 docker run –d –p 80:80 –name containername –link mysqlcontainer:mysqlcontainertag imageID  

Check if container running or not 

 docker ps 

On localhost:80 check if application is running. 
 
***********************************************************************************************
To containerize mysql: 
***********************************************************************************************
Create DockerFile 

Build docker file with command to create image 

 docker build –t imagename:imagetag . 

Check if image created properly 

 docker images 

Run image 

 docker run -e MYSQL_ROOT_PASSWORD=${mysql password} --name=${imagename} -d imageID   

Check if container running or not 

 docker ps 

To check  

 docker exec –it containerid sh 