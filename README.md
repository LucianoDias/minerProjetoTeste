<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalção do projeto
- requisitos laravel 9  php 8.1
- mysql
- node e npm  
_______________________________________________________________________________________________
Neste projeto adicionei os seguintes módulos:
Gerenciamento de usuários
- Criação de gerenciamento de usuários simples  para que seja mais fácil solicitar a permissão do Laravel.
Gerenciamento de Funções
- Um gerenciamento de funções simples para  adicionar funções para uma conta de usuário e determinar ao usuário qual permissão.
Gerenciamento de Permissões
- Um gerenciamento para permissão Laravel que listará todos os nomes de rotas usando um comando do console Laravel.

Gestão de produtos , Categorias, Marcas 
- Um gerenciamento de produto simples e solicite as permissões do Laravel com cada função como usuário.

## Observações
O usuario  com a função de admim sera criado com a seeder , Porem a função de usuario Comum tem quer criar manualmente.
- passo 1 criar função de usuário Comum e dar as permissçoes para os modulos de produtos , categorias , marcas .
- passo 2 criar um Usuario a senha esta padrao 123456  e  dar permissão para ele vai em editar usuário e colocar a função para ele.. 

 #####################################################################################################



## Como rodar o projeto local.
-  Roda o  comando composer update
-  Roda o comando npm install && npm run dev  para instar dependencia .
-  Configurar o banco no .env
-  php artisan migrate

## Em seguida, vamos executar o comando  para criar as permissões :
php artisan permission:create-permission-routes
## rodar  seeder de administrador de usuário
 php artisan db:seed --class=CreateAdminUserSeeder
## Agora você tem um administrador que pode usar para fazer login e testar suas funções e permissões de usuário Laravel 9 ACL.
php artisan serve


Não esqueça que sua credencial é:
e-mail: admin@gmail.com
senha: 123456
