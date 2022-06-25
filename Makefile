init: up
up: docker-up
down: docker-down

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

composer-install:
	docker-compose run --rm php-fpm composer install
composer-update:
	docker-compose run --rm php-fpm composer update


#tests:
#    docker-compose run --rm php-fpm vendor/bin/phpunit test -v