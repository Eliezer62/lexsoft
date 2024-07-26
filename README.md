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
Criando as tabelas do banco de dados
```bash
php artisan migrate
```
Populacionando as tabelas
```bash
php artisan db:seed
```

