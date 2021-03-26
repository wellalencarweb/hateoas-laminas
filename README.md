# hateoas-laminas
Projeto Nível 3 de Maturidade HTTTP

https://api-tools.getlaminas.org/download

composer create-project laminas-api-tools/api-tools-skeleton

cd api-tools-skeleton

sudo su

apt-get update  
apt-get install sqlite3

exit (sudo)

touch test.sqlite

sqlite3 test.sqlite

.tables

create table users(id INTEGER PRIMARY KEY NOT NULL, name varchar(255) NOT NULL, email varchar(255) NOT NULL UNIQUE);


apt-get -y install postgresql postgresql-contrib
CREATE TABLE public.users (
	id int4 NOT NULL,
	"name" varchar(150) NOT NULL,
	email varchar(150) NULL,
	CONSTRAINT users_pk PRIMARY KEY (id)
);  

ctrl+z (sair do sqlite)

exit sair do root

php -S 0.0.0.0:8080 -t public public/index.php


'cloudPostgres' => [
	'database' => 'ryevwvyt',
	'driver' => 'PDO_Pgsql',
	'hostname' => 'queenie.db.elephantsql.com',
	'username' => 'ryevwvyt',
	'password' => '5k_uT_qnmgHrT6tBi3nc1V8Z9D18Dt8p',
	'port' => '5432',
],
