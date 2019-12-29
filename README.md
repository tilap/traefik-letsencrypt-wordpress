# Traefik example

Everything to understand and start using traefik to host multiple dockerized websites with https certificates.

This sample comes with a wordpress and traefik admin panel

Works as local env. Vars have explicit unique names so you it's easy to search&replace ;)

## Setup

Create a docker network

```bash
# For local development
docker network create traefik_network

# For production (Swarm mode)
docker network create --driver overlay traefik_network
```

Read each app README (in ./traefik &nd ./wordpress)

## Next

Think about adding swarm deployment maybe.

## Related articles

- https://dev.to/nflamel/how-to-have-https-on-development-with-docker-traefik-v2-and-mkcert-2jh3
- https://github.com/davidrv87/traefik-wordpress-letsencrypt

## LICENCE

Do what you want :)