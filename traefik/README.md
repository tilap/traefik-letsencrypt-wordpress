# Traefik

## Setup

### traefik.yml:

Replace `jlavinh+letsencrypt@gmail.com` by your own email

Replace the `traefik.http.middlewares.traefik-auth.basicauth.users` value by your own user/password hash for basic auth. 
To get it, you can run `echo $(htpasswd -nb USER PASSWORD) | sed -e s/\\$/\\$\\$/g` (replace USER/PASSWORD)

### acme/*.json

- make sure it is empty on first load
- make sure it is chmod 600 or `chmod 600 acme.json`

## RUN

```
TRAEFIK_HOST=traefiksubdomain.domain.tld docker-compose up
```

Env vars

| name               | default                        |
|--------------------|--------------------------------|
| TRAEFIK_HOST       | api.youpi.com                  |
| TRAEFIK_BASICAUTH  | username:$$some/password$hash  |
