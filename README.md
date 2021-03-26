# Level 3 Maturity Rest: HATEOAS
1. Context: https://martinfowler.com/articles/richardsonMaturityModel.html

## Install API Laminas
1. Reference: https://api-tools.getlaminas.org/download
1. `composer create-project laminas-api-tools/api-tools-skeleton`

## Install BD SQLite3
1. `cd api-tools-skeleton`
1. `sudo su`
1. `apt-get update`  
1. `apt-get install sqlite3`
1. `exit` (sudo)

## Create BD SQLite3 Test (into folder api-tools-skeleton)
1. `touch test.sqlite`
1. `sqlite3 test.sqlite`
1. `create table users(id INTEGER PRIMARY KEY NOT NULL, name varchar(255) NOT NULL, email varchar(255) NOT NULL UNIQUE);`  
1. `.tables` (show tables)
1. `ctrl+z`  (exit sqlite)

## Run API (into folder api-tools-skeleton)
1. `php -S 0.0.0.0:8080 -t public public/index.php`

