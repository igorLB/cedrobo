# CEDROBÔ 1.0

Cedrobô é um chatbot sem o uso de NLP (Natural Language Processing) que tem como objetivo salvar o nome e o e-mail do usuário no banco de dados e responder perguntas sobre uma empresa fictícia, tais como: "Vocês têm site?", "Qual o whatsapp de vocês?", "O que vocês fazem?".

## Instalação

-   `git clone https://github.com/igorLB/cedrobo.git`
-   `cd cedrobo`
-   `composer install`
-   `php artisan key:generate`
-   Crie um banco de dados e um arquivo `.env` baseado no `.env.example`
-   Configure as variáveis do seu banco de dados no `.env`
-   Create a database and inform .env
-   `php artisan migrate`
-   `php artisan serve` para iniciar o chat em: http://localhost:8000/

## Dependências

-   PHP Version >= 7 < 7.4
-   Botman ~2.0

## Notas

-   Projeto contruído usando botman studio `botman new *nomedoprojeto*` que é baseado no Laravel 5
-   Botman guarda as conversas em cache por N minutos, este recurso, até a data atual, **não está compatível** com o PHP 7.4

## Como funciona

As mensagens são enviadas por requisição GET para o arquivo `botman.php` onde cada _escuta_ seria uma rota e temos a possibilidade de chamar um controller e iniciar uma conversa ou apenas responder usando o método `reply()`
