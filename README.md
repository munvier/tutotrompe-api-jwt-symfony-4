# tutotrompe-sf4-api-jwt

## Stack technique requis 

- PHP 7.2 min.
- MySQL 5.8 min.

## Informations de connexion

Utilisateurs créés via les fixtures :
- admin@attineos.com / admin
- user@attineos.com / user

## Installation 

- Modifier la DATABASE_URL dans le .env

- ```composer install```

- ```php bin/console doctrine:migrations:migrate```

- ```php bin/console doctrine:fixtures:load```
