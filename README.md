# CakePHP Blog Tutorial


Este projeto é o resultado do tutorial passo-a-passo do site oficial do CakePHP. É uma forma de praticar e estudar a nova versão do CakePHP 3.x.

Basicamente `CTRL+C` `CTRL+V` do site, com algumas pequenas mudanças, como adição do [Migration](http://book.cakephp.org/3.0/en/migrations.html).


## Instalação


`composer create-project maiconpinto/cakephp-blog-tutorial`


OU


`composer create-project --prefer-dist maiconpinto/cakephp-blog-tutorial [app_name]`


> Aprenda a utilizar o composer, é uma ferramenta essencial. [Site oficial](http://getcomposer.org), e se quiser tem um amigo que disponibilizou curso gratuito [composer na prática](https://www.webdevbr.com.br/composer-na-prática), o Erik Figueiredo do (https://www.webdevbr.com.br/).

## Configuração

`mv config/app.default.php config/app.php`

Edite o arquivo.

```php
//config/app.php

'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            /**
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'YOUR_USERNAME',
            'password' => 'YOUR_SECRET',
            'database' => 'YOUR_DATABASE',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
```

## Migrations

Após instalar e configurar o banco de dados, vamos rodar o Migration, para criar as tabelas. 

`bin/cake migrations migrate`


## Links Úteis


[Tutorials & Examples](http://book.cakephp.org/3.0/en/tutorials-and-examples.html)

[Blog tutorial](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/blog.html)

[Blog tutorial - Part 2](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/part-two.html)

[Blog tutorial - Part 3](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/part-three.html)

[Blog Tutorial - Authentication and Authorization](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog-auth-example/auth.html)

