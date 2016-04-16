# CakePHP Blog Tutorial


This project is the result of the tutorial step-by-step Official CakePHP website. It is a way to practice and study the new version of CakePHP 3.x.

Basically `CTRL+C` `CTR+V` of site, with some minor changes, such as adding the [Migration](http://book.cakephp.org/3.0/en/migrations.html).


## Installation


`composer create-project maiconpinto/cakephp-blog-tutorial`


OR


`composer create-project --prefer-dist maiconpinto/cakephp-blog-tutorial [app_name]`


> Learn to use the composer, it is an essential tool. [Official website](http://getcomposer.org) and if you want I have a friend who provided free course [composer in practice](https://www.webdevbr.com.br/composer-na-prática), the Erik Figueiredo of website [webdevbr.com.br]((https://www.webdevbr.com.br/))

## Configuration

`mv config/app.default.php config/app.php`

Edit file.

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

After installing and configuring the database, let's run the migration to create the tables.

`bin/cake migrations migrate`


## Useful links


[Tutorials & Examples](http://book.cakephp.org/3.0/en/tutorials-and-examples.html)

[Blog tutorial](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/blog.html)

[Blog tutorial - Part 2](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/part-two.html)

[Blog tutorial - Part 3](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog/part-three.html)

[Blog Tutorial - Authentication and Authorization](http://book.cakephp.org/3.0/en/tutorials-and-examples/blog-auth-example/auth.html)

