#### PHP IS FINE

![](./fine.png)

This is probably all kinds of wrong, but I need

 - php7.0
 - symfony1 that works on php 7.0
 - a testable environment i don't care about

```
sudo docker build -f ./Dockerfile -t php_is_fine:1 ./
sudo docker run -it php_is_fine:1 bash

# inside the container

sudo service mysql start
sudo service apache2 start

# now hit docker-container-ip:8080 in your browser
```


