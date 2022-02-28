<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre

Este é um simples projeto de portfólio, consiste no CRUD de Users. Utilizando o Laravel v9.2.0, foi utilizado o ORM Eloquent para as operações do banco de dados.

## Iniciar o projeto

Execute os comandos padrões para o funcionamento do projeto.

1. Execute o comando **composer install** no terminal para instalar as dependências do PHP.
2. Edite o arquivo **.env** para configurar as informações de banco e etc.
3. O nome do banco de dados utilizado no projeto é: `users`
4. Execute os demais comandos:
    **php artisan cache:clear**
    **php artisan config:clear**
5. Agora execute o comando para gerar as tabelas do seu banco de dados:
    **php artisan migrate**
6. Por fim inicie o projeto:
    **php artisan serve**
