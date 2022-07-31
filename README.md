# Back-End
## Bem vindo a <font size="8">📚BookStore!</font>
Ola, projeto criado a partir de um desafio, onde foi proposto criar um crud de uma 
biblioteca

Tabela de conteúdos 
================
<!--ts--> 
[Feature](#feature)
[Instalação](#instalação) 
[Pre Requisitos](#pre-requisitos) 
[Passa a Passo](#passo-a-passo)  <!--te-->



# Feature

### Features

 - [x] Criação, edição e exclusão de livro
 - [x] Criação, edição e exclusão de Autor
 - [x] Criação, edição e exclusão de Gênero
 - [x] Criação, edição e exclusão de Editora

# Instalação
Para realizar a instalação segue os requitos e o passo a passo

# Pre-requisitos

Para rodar esse projeto voce ira precisar ter:

1.  PHP - v8.1.6
2.  Laravel - v9.21.6
3.  Xampp - v9.21.6
4.  Composer - v2.3.10
4.  Node - v16.13.1

## Passo a Passo
Antes de começar, você vai precisar ter instalado em sua máquina também a ferramenta: [Git](https://git-scm.com). Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

```bash
# Clone este repositório
$ git clone https://github.com/RyanHenriqueBelfort/bookstore.git

# Acesse a pasta do projeto no terminal/cmd
$ cd bookstore

# Instale as dependências
$ composer install
# E depois
$ npm install

# Execute o Xampp 

# Cria uma banco de dados no MySql acessando No Browser
$ localhost/phpMyAdmin/

# Entre no projeto com seu editor de preferencia e renomeie a .env.example para .env
# E coloque na linha DB_DATABASE o nome do seu banco Ex: DB_DATABASE 

# Rode as migrations
$ php artisan migrate

# Rode os seed
$ php artisan db:seed

# Execute a aplicação
$ php artisan serve

# O servidor inciará na porta:8000
# Obs: se trocar a porta 8000 para alguma outra lembre-se de ir no Front-End em src/service/axios.js
# E alterar 8000 para a porta escolhida
```

# 🛠 Tecnologias
As seguintes ferramentas foram usadas na construção do projeto:
 - [Node.js](https://nodejs.org/en/) 
 - [PHP](https://www.php.net) 
 - [Laravel](https://laravel.com) 
 - [Composer](https://getcomposer.org)
 - [MySql](https://www.mysql.com) 
