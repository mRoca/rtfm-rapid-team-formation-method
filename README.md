# RTFM - Rapid Team Formation Method

## Write slides

https://github.com/gnab/remark/wiki/Markdown

## Generate slides

https://github.com/partageit/markdown-to-slides

```bash
# Once
npm run-script slides

# Permanent files watch
npm run-script slides-watch
```

## Use slides

Open the HTML file in your browser.

You can turn on presentator mode :

```
c: open a synced version in a new tab
p : switch to presentator mode
```

## Scripts

**Print clean git network**

```bash
git log --graph --format=format:'%C(bold blue)%h%C(reset) - %C(bold white)%s%C(reset) %C(bold yellow)%d%C(reset)' --abbrev-commit --all
```
