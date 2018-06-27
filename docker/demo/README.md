# Rapid Team Formation Method - Docker demo

## Install

```bash
bin/tools front composer install

docker-compose up -d
```

## Magic command

```bash
docker-compose kill && docker-compose rm -fv && docker-compose build && docker-compose up -d
```

### Access

The project is using a Traefik proxy in order to allow access to all the HTTP services of the project. This service is listening on the 8080 port of the host.
The `*.vcap.me` domain names are binded on localhost. In order to use them offline, you just have to add a `127.0.0.1 traefik.rtfm.vcap.me api.vcap.me front.rtfm.vcap.me` line on your `/etc/hosts` file.

- [http://traefik.rtfm.vcap.me:8080](http://traefik.rtfm.vcap.me:8080)
- [http://api.rtfm.vcap.me:8080](http://api.rtfm.vcap.me:8080)
- [http://front.rtfm.vcap.me:8080](http://front.rtfm.vcap.me:8080)
