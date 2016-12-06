# RTFM - Rapid Team Formation Method

## Summary

### Git & working with a team

* [x] Git
* [x] Keep your history clean
* [x] Work with the history : merge and rebase
* [x] Git flow & workflow
* [x] Pull Requests aand code review
* [x] Useful commands

### Docker

* [x] Virtualization : OS vs application
* [x] How Docker works
* [x] How to use Docker
* [x] docker-compose

### Php / Symfony

* [ ] PHP-FIG & PSR
* [ ] Coding style & PHP-CS-Fixer
* [ ] PhpStorm
* [ ] Composer
* [ ] Insight
* [ ] Blackfire

### Tests

* [ ] Behat and functionnal testing
* [ ] PhpUnit and unit testing
* [ ] How to mock an API

## Contributing

### Write slides

https://github.com/gnab/remark/wiki/Markdown

### Generate slides

https://github.com/partageit/markdown-to-slides

#### In a docker container

```bash
docker-compose run --rm node npm install

# Generate slides from .md to .html once
docker-compose run --rm node npm run-script slides
```

#### On host

```bash
npm install
npm run-script slides
```

### Watch files changes and automaticaly build slides

```bash
docker-compose run --rm node npm run-script slides-watch-git
docker-compose run --rm node npm run-script slides-watch-docker

# There is no watcher on images, for the moment
docker-compose run --rm node npm run-script images

# Or :

npm run-script slides-watch-git
npm run-script slides-watch-docker
```

### Use slides

#### In a docker container

Boot the web container 

```bash
docker-compose up -d web
```

Access the `web` docker container on the 80 port : http://web.rtfmrapidteamformationmethod.docker, or access http://localhost:8765 .

#### On host

Open the HTML file in your browser.

**Generated files :**

* `./web/git.html`
* `./web/docker.html`

You can turn on presentator mode using the following shortcut keys :

```
c : open a synced version in a new tab
p : switch to presentator mode
```

### Scripts

**Print clean git network**

```bash
git log --graph --format=format:'%C(bold blue)%h%C(reset) - %C(bold white)%s%C(reset) %C(bold yellow)%d%C(reset)' --abbrev-commit --all
```
