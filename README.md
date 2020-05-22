# CID-api-php
A Classificação Internacional de Doenças e Problemas Relacionados à Saúde (também conhecida como Classificação Internacional de Doenças – CID) é publicada pela Organização Mundial de Saúde (OMS) e visa padronizar a codificação de doenças e outros problemas relacionados à saúde. 
O CID fornece códigos relativos à classificação de doenças e de uma grande variedade de sinais, sintomas, aspectos anormais, queixas, circunstâncias sociais e causas externas para ferimentos ou doenças. 
A cada estado de saúde é atribuída uma categoria única à qual corresponde um código CID

Cada doença pode ser dada a uma categoria e receber um código de até seis caracteres de longitude (em formato de X00.000). 
Cada uma das tais categorias pode incluir um grupo de doenças similares.

[![Build Status](https://img.shields.io/travis/atiladanvi/cid10-api-php/master.svg?style=flat-square)](https://travis-ci.org/atiladanvi/cid10-api-php)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

## Requerimentos 

* PHP >= 7.2.0
* Composer PHP >= 1.9.0

Extensões do php:

* OpenSSL
* PDO
* Mbstring
* Tokenizer
* XML
* Ctype
* JSON

Bancos suportados

 * MySQL 5.6+
 * PostgreSQL 9.4+
 * SQLite 3.8.8+
 * SQL Server 2017+

## Instalação

Clone o repositório
  
    git clone https://github.com/Atiladanvi/cid10-api-php.git
    
Adentre à pasta do projeto

    cd /cid10-api-php

Instale as dependências do projeto

    composer install            

Crie um arquivo de configuração de ambiente

    cp env.example .env
    
Configure as variáveis

    APP_ENV=<local|production>
    
    DB_CONNECTION=<mysql|pgsql|sqlite|sqlsrv>
    DB_HOST=<host>
    DB_PORT=<port>
    DB_DATABASE=<databse name>
    DB_USERNAME=<database user>
    DB_PASSWORD=<database password>
    
Migre e popule o banco de dados

    php artisan migrate --seed    
    
Execute o serviço
    
    php -S localhost:8080 public/index.php
    
Veja    
 
http://localhost:8080   

## API
##### CID-10

|Nome|Descrição|Rota|Demo|
|---|---|---|---|
|Index|Lista todas|cid10/|https://cid10-api.herokuapp.com/cid10/|
|Show|Obtêm pelo código|cid10/{codigo-cid}/|http://cid10-api.herokuapp.com/cid10/A01|


### Log de mudanças

Por favor leia [LOG DE MUDANÇAS](CHANGELOG.md) para mais informações do que mudou recentemente.

## Contribuindo

Por favor leia [CONTRIBUINDO](CONTRIBUTING.md) para detalhes.

### Segurança

Se você descobrir algum problema relacionado à segurança, envie um email para `atila.danvi@outlook.com` em vez de usar o rastreador de problemas.

## Créditos

- [Atila Silva](https://github.com/atiladanvi)
- [Todos os contribuidores](../../contributors)

## Licença

Licença MIT. Por favor leia o [documento de licença](LICENSE) para mais informações.
