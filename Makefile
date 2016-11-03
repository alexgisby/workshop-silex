install:
	composer install

test:
	./vendor/bin/phpunit

server:
	./script/server
