# TeploKram

## Description
Opencart based e-commerce shop.

## Development
Used Docker. In result we have site with SSL, opened on [local.teplokram.com.ua](http://local.teplokram.com.ua/).

### Tech details
- OpenCart 3.0.5.0 - already installed. REQUIRED DB dump.
- PHP 8.2
- MySQL 8.0 - also available on [port 3306](local.teplokram.com.ua:3306)
- Nginx - web-server - reverse proxy, SSL, serve static files

### Startup
1. Install Docker Compose/Docker Desktop on your host.
2. 
3. 
4. 
5. 
6. 
7. Open project on [local.teplokram.com.ua](http://local.teplokram.com.ua/)

### Makefile commands

| Command         | Description                                                 |
|-----------------|-------------------------------------------------------------|
| `make install`  | Build, start containers, `composer install                  |
| `make up`       | Start containers                                            |
| `make down`     | Stop containers                                             |
| `make build`    | Build Docker images                                         |
| `make pull`     | Git pull, update submodules (if any), `composer install`    |
| `make composer` | Run `composer install` in app container                     |
| `make sh`       | Open bash shell in app container                            |
| `make logs`     | Stream app container logs                                   |
| `make restart`  | Restart all containers                                   |
| `make ps`       | Show status of all containers                                   |
| `make dump`     | Create dump current DB, move to `./docker-compose/mysql/dump` |


### Credentials

#### Database
- name: `teplokram`
- user: `admin`
- pass: `admin`
- prefix: `tk_`

#### Admin page
- url: `http://local.teplokram.com.ua/admin/`
- user: `admin`
- pass: `admin`
