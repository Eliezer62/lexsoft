# LEXSOFT

## Instalação
Clonando o repositório
````bash
git clone git@github.com:Eliezer62/lexsoft.git
````
Instalando dependências PHP da API Laravel
```bash
composer install
```
Resolvendo dependências da aplicação FRONT-END
```bash
npm install
```
Construindo a aplicação web
```bash
npm run prod
```
Renomear o arquivo .env.example para .env<br><br>
Obter a key da aplicação
```bash
php artisan key:generate
```
Criar link simbólico para o storage
```bash
php artisan storage:link
```
Configurar o .env para o ambiente local

