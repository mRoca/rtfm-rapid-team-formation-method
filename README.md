# RTFM - Rapid Team Formation Method

## Summary

### Git & travail en équipe

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

```bash
npm install

# Generate slides from .md to .html once
npm run-script slides

# Permanent files watch
npm run-script slides-watch
```

### Use slides

Open the HTML file in your browser.

**Generated files :**

* `./git/git.html`

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
