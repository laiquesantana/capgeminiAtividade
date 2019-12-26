## Sobre
Api usando o framework Laravel que retorne os funcionários que trabalham
no Brasil.

Proposta pela Empresa Capgemini

## Requisitos

PHP> = 7.2.0
Extensão PHP BCMath
Extensão PHP de tipo
Extensão PHP JSON
Extensão PHP Mbstring
Extensão PHP OpenSSL
Extensão PHP DOP
Extensão PHP do tokenizador
Extensão XML PHP

Composer
Node
Npm


## instalação
1º fazer o clone do projeto ou download do zip

2º instalar a dependências do laravel utilizando o composer : composer install

3º rodar o comando npm install && npm run dev

## como rodar

1º verificar que o servidor apache esta online, se tiver utilizando windows com xampp verifique se esta no ar, caso esteja utilizando o linux verifique utilizando os comandos necessários via terminal.

2º subir a aplicação utlizando o comando: php artisan server

3º se tudo ocorrer bem acessar via navegador o endereço http://localhost:8000.

## utilização

1º as rotas da api estão definidos no arquivo routes/api.php

2º um arquivo json "funcionarios.json" foi criado na pasta public com dados fakes para teste

2º Acessar http://localhost:8000/api/funcionarios, deverá retornar a lista de funcionários que trabalham no Brasil

## testes 
1º rodar o seguinte comando ./vendor/bin/phpunit
