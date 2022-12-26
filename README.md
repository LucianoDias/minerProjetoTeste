<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Instalção do projeto
- requisitos laravel 9  php 8 > 
- mysql
- node e npm  
_______________________________________________________________________________________________
Neste projeto adicionei os seguintes módulos:
Gerenciamento de usuários
- Criação de gerenciamento de usuários simples usando o Laravel 9 para que seja mais fácil solicitar a permissão do Laravel.
Gerenciamento de Funções
- Um gerenciamento de funções simples que nos ajudará a adicionar funções para uma conta de usuário e determinar ao usuário qual permissão Laravel foi atribuída.
Gerenciamento de Permissões
- Um gerenciamento para permissão Laravel que listará todos os nomes de rotas usando um comando do console Laravel.

Gestão de produtos
- Um gerenciamento de produto simples e solicite as permissões do Laravel com cada função como usuário.

- Gestão de Categorias
- Um gerenciamento de produto simples e solicite as permissões do Laravel com cada função como usuário.
- 
-Gestão de Marcas
- Um gerenciamento de produto simples e solicite as permissões do Laravel com cada função como usuário.
- #####################################################################################################



## Como rodar o projeto local.
-  Roda o  comando composer update
-  Roda o comando npm install && npm run dev  para instar dependencia .
-  Configurar o banco no .env
-  php artisan migrate

## Em seguida, vamos executar o comando  para criar as permissões :
php artisan permission:create-permission-routes
## rodar  seeder de administrador de usuário
php artisan db:seed --class=CreateAdminUserSeeder
php artisan serve


Não esqueça que sua credencial é:
e-mail: admin@gmail.com
senha: admin123
