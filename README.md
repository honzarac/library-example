# Knihovna
testovací úkol pro A-WebSys

### Stack
 - Laravel
 - MySQL
 - Laravel Sail
 - Inertia
 - docker


### Jak projekt rozjet
 - naklonovat projekt
 - nainstalovat composer
```
composer install
```
 - rozjet sail stack (vyžaduje docker)
```
vendor/bin/sail up
```
 - dostat se do aplikačního kontejneru
```
docker-compose exec laravel.test bash
```
 - fixnout práva k aplikačním logům (většinou na windows potřeba)
```
chown -R sail storage bootstrap
```
 - provést databázové migrace
```
php artisan migrate
```
 - naseedovat testovací data
```
php asrtisan db:seed
```

hotovo, aplikace je přístupná pod http://localhost/
