# symfony-docker
## Build
#### nginx:1.21-alpine
#### php:8.2-fpm
#### postgres:14-alpine

## Steps
1. Create new directory for project
2. Pull docker files
3. Edit .env and specify PROJECT_NAME=symfony6_proj
4. Start containers
```bash
sudo docker-compose up -d
```
5. Enter php container to create symfony project
```bash
sudo docker exec -it docker_symfony_php_1 bash
```
6. Create symfony project, name same as specified in .env
```bash
symfony new symfony6_proj --version="6.2.*" --webapp
```
7. Configure git email, username
8. For local development change root directory permission
```bash
sudo chmod -R 777 .
```
