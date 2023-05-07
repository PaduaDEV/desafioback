# Desafioback

API laravel com banco de dados com níveis de acessos

## Pré-requisitos

- PHP versão 8.2
- MySQL versão 8.0.3
- Composer instalado

## Instalação

1. Faça um clone deste repositório: `git clone https://github.com/PaduaDEV/desafioback.git`
2. Configure o arquivo .env

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=apirest
- DB_USERNAME=root
- DB_PASSWORD=


5. Instale as dependências do projeto: `composer install`
6. Rode as migrations para criar as tabelas do banco de dados: `php artisan migrate`
7. Inicie o servidor local: `php artisan serve`
8. Acesse a aplicação no navegador: `http://localhost:8000`

