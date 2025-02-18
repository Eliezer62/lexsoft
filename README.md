
# LEXSOFT
A proposta do software LexSoft visa oferecer uma solução completa para advogados, centralizando e otimizando a gestão de processos e documentos. O sistema permitirá o cadastro e a consulta de processos com campos detalhados, além da gestão eficiente de documentos relacionados, como boletins de ocorrência.

## Requisitos

 - PHP versão 8.3.2
 - PostgreSQL versão 16
 - Composer versão 2.8.2
 - Node versão 20.9.0
 - Servidor WEB (Apache ou Nginx)

## Instalação
Clonando o repositório
````bash
git clone git@github.com:Eliezer62/lexsoft.git
````
Instalando dependências PHP da API Laravel
```bash
composer install
```
Resolvendo dependências da aplicação React
```bash
npm install
```
Construindo a aplicação web
```bash
npm run build
```
Renomear o arquivo .env.example para .env<br><br>
Obter a key da aplicação
```bash
php artisan key:generate
```
Criando o link simbólico para o Storage
```bash
php artisan storage:link
```
Configurar o .env para o ambiente local<br>
Configurando o sistema de Login
```bash
php artisan jwt:secret
```
Criando as tabelas do banco de dados
```bash
php artisan migrate
```
Populacionando as tabelas
```bash
php artisan db:seed
```
