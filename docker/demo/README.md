# Rapid Team Formation Method - Docker demo

## Install

```bash
docker-compose run --rm front-fpm composer install
docker-compose up -d
```

## Magic command

```bash
docker-compose kill && docker-compose rm -fv && docker-compose build && docker-compose up -d
```
