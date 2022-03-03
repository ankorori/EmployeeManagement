# docker-laravel 🐳

![License](https://img.shields.io/github/license/ucan-lab/docker-laravel?color=f05340)
![Stars](https://img.shields.io/github/stars/ucan-lab/docker-laravel?color=f05340)
![Issues](https://img.shields.io/github/issues/ucan-lab/docker-laravel?color=f05340)
![Forks](https://img.shields.io/github/forks/ucan-lab/docker-laravel?color=f05340)

## Introduction

Build a simple laravel development environment with docker-compose.

## Usage

```bash
$ git clone git@github.com:ucan-lab/docker-laravel.git
$ cd docker-laravel
$ make create-project # Install the latest Laravel project
$ make install-recommend-packages # Optional
```

http://localhost

## Tips

- Read this [Makefile](https://github.com/ucan-lab/docker-laravel/blob/main/Makefile).
- Read this [Wiki](https://github.com/ucan-lab/docker-laravel/wiki).

## Container structures

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):8.0-fpm-bullseye
  - [composer](https://hub.docker.com/_/composer):2.1

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.20-alpine
  - [node](https://hub.docker.com/_/node):16-alpine

### db container

- Base image
  - [mysql/mysql-server](https://hub.docker.com/r/mysql/mysql-server):8.0

### Reference site
- [infyomdocs](https://infyom.com/open-source/laravelgenerator/docs/8.0/introduction)
- [laraveldocs](https://readouble.com/laravel/8.x/ja/installation.html)
- [PHP8+ Laravel8 + laravel-generatorで簡単CRUD作成からユニットテストまで書く](https://qiita.com/ayasamind/items/a5bfa65ab0b8effb26a8)
- [Laravel-generatorを使って爆速でtwitterを作るぞ！バックエンド編](https://zenn.dev/okdyy75/articles/c254f6f48f92f9)
- [Laravel 1対多のモデルを構築する](https://noumenon-th.net/programming/2020/02/25/laravel-belongsto/)
- [Laravel 多対多（Many to Many）アプリの構築](https://noumenon-th.net/programming/2020/11/05/many-to-many/)

### memo
- sudo chown -R hoge:hoge backend/
- sudo chmod 777 -R  backend/storage/framework/sessions/

#### vdebug
- [Docker環境にXdebug3を導入&VSCodeでデバッグ](https://yutaro-blog.net/2021/07/08/laravel-docker-xdebug-vscode/)

- [VSCode+Dockerコンテナ内のPHPをデバッグする際、host.docker.internalに接続できない問題の対処](https://qiita.com/tristar/items/6434acba715f7fe93694)
```
{
    "name": "Listen for Xdebug",
    "type": "php",
    "request": "launch",
    "hostname": "0.0.0.0",
    "port": 9003,
    "pathMappings": {
        "/work/backend": "${workspaceRoot}/backend"
    },
    "ignore": [
        "**/vendor/**/*.php"
    ]
},
```
