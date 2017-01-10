# PUSHER-EXAMPLE

Ejemplo sencillo de pusher para ver como funciona
https://pusher.com/

# Instalacion y Configuracion
Primero necesitaremos tener una cuenta de pusher, puedes crear una cuenta o asociar tu cuenta de github.

Una vez realizado lo de la cuenta, instalamos pusher via composer ejecutando el siguiente comando --> $ composer require pusher/pusher-php-server

IMPORTANTE : Cuando ejecutemos el comando anteriormente citado y nos muestra el mensaje COMMAND NOT FOUND, debemos instalar composer. Para ello, iremos a esta pagina "https://getcomposer.org/download/" y copiaremos todo el codigo que esta debajo de COMMAND-LINE Installation.
    Esto es lo que tenemos que copiar:
    
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    
    Despues de instalar composer instalamos pusher con el comando citado en la segunda linea.
    
    Una vez creamos dos archivos, por ejemplo pusher.html y pusher.php y en cada archivo añadiremos el codigo que nos ofrece en nuestra cuenta de pusher

