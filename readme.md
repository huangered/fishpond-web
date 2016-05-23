# Fishpond web site
## Aim
The toy site to learn php and laravel5.2
## Feature
* write and list document
* upload and list photo
* user role, permission management

## Prerequiste

1. nodejs
2. gulp
3. postgresql
4. php
5. laravel5

## Run in the dev mode
### 1. parse the css & js
`gulp`

### 2. create the db schema
`php artisan migrate`
### 3. seed the db
`composer auto-dumper`

`php artisan db:seed`
### 4. run the website
`php artisan serve`
## Run in the product mode
### 1. Install Apache
### 2. Deploy to apache
## License

The Fishpond is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
