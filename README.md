# Laravel-crud
O projeto é um CRUD, um gerenciador de conteúdo. Neste projeto estou usando o framework Laravel 5.6

## Criar o arquivo .env
Para conectar com o banco de dados é preciso o arquivo .env. Então vamos lá!

- No diretório raiz do projeto crie um novo arquivo chamado .env e salve.
- Ainda na raiz do projeto você verá um arquivo .env.example. Copie tudo o que tem nele e cole no arquivo .env

## Conectando com o DB
No meu caso estou usando o MySQL Workbench, e também estou usando as configurações default.
*** lembrando que em seu DB, você terá criar um banco com o mesmo nome passado no .env.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seubanco
DB_USERNAME=user
DB_PASSWORD=
```

## Key Generate
Logo após criar o arquivo .env, é necessário gerar uma chave. Para isso, execute o comando:

```
php artisan key:generate
```

## Criando SuperUser
Para logar no painel é precisar criar  um super usuário. Você pode editar este usuário em
database/seeds/UsuarioSeeder.php
```
php artisan db:seed
```

## Criando as tabelas

```
php artisan migrate
```

## Home Page

![GitHub Logo](/screen/print1.PNG)

## Painel

![GitHub Logo](/screen/print2.PNG)

## Painel Crud

![GitHub Logo](/screen/print3.PNG)
