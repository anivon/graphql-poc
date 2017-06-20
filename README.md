GraphQL-poc
===============

A GraphQL backend Proof of Concept with Symfony 3
# Installation

```
composer install (and use default values for parameters.yml)
bin/console d:d:c
bin/console d:s:c
bin/console h:d:f:l -b FixtureBundle -n
```

# Docker fast start
Following command will run `mysql` server :
```
docker-compose up --build
```

# Play
Go to `http://graphql-poc.loc/app_dev.php/graphiql` (adapt to your vhost)

Play !

![](doc/image/graphiql.png)
![](doc/image/graphiql2.png)
