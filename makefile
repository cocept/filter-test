all:
	composer install
	php app/console doctrine:schema:update --force
	php app/console doctrine:fixtures:load
	php app/console server:run

