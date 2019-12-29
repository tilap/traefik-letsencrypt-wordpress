# Wordpress website

## SETUP

### docker-compose.yml

Uncomment the environment var for wordpress if you need some of them

## RUN

```
APP_PATH=../sites/wp SITE_URL=app.youpi.com docker-compose up
```

Environement variables:

| name               | default                                        |
|--------------------|------------------------------------------------|
| APP_PATH           | ../sites/wp                                    |
| SITE_URL           | app.youpi.com                                  |
