SHELL := /bin/bash
ALL: up

install:
	@docker compose build
	@make up
	@make composer

build:
	@docker compose build

pull:
	@git pull
	@git pull --recurse-submodules && git submodule update --recursive --remote
	@make composer

up:
	@docker compose up -d

down:
	@docker compose down

restart:
	@docker compose restart

ps:
	@docker compose ps

sh:
	@docker compose exec app bash

composer:
	@docker compose exec app composer install --no-interaction

logs:
	@docker compose logs -f app

dump:
	@docker compose exec -T mysql mysqldump -u admin -p --no-tablespaces --single-transaction --routines --triggers --events teplokram > db_init.sql
	@mv db_init.sql ./docker-compose/mysql/dump/



