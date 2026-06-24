# Como rodar o projeto com Docker

## Pré-requisitos

- Docker instalado: https://docs.docker.com/get-docker/
- Docker Compose (já vem junto com o Docker Desktop)

## Passo a passo

### 1. Clone o repositório

git clone https://github.com/ClariceOliveira07/ProjectPOO5crud.git
cd ProjectPOO5crud/barbearia

### 2. Configure o .env para Docker

cp .env.docker .env

### 3. Suba os containers

docker compose up -d --build

Aguarde o build terminar (pode levar alguns minutos na primeira vez).

### 4. Gere a chave da aplicação

docker compose exec php php artisan key:generate
### 5. Rode as migrations

docker compose exec php php artisan migrate

### 6. Acesse a aplicação

Abra no navegador: http://localhost:8080

---

## Comandos úteis

| Ação | Comando |
|---|---|
| Subir containers | `docker compose up -d` |
| Parar containers | `docker compose down` |
| Ver logs | `docker compose logs -f` |
| Acessar container PHP | `docker compose exec php bash` |
| Rodar artisan | `docker compose exec php php artisan <comando>` |
| Rodar migrations | `docker compose exec php php artisan migrate` |
| Limpar cache | `docker compose exec php php artisan cache:clear` |
| Rebuild após mudança no Dockerfile | `docker compose up -d --build` |

---

## Containers

| Container | Função | Porta |
|---|---|---|
| barbearia_web | Servidor web | 8080 |
| barbearia_php | Laravel (PHP 8.3) | interno |
| barbearia_mysql | Banco de dados | 3306 |