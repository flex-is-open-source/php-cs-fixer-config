PHP_COVERAGE = php -d zend_extension=xdebug.so -d xdebug.mode=coverage

it: cs analyse test

cs:
	vendor/bin/php-cs-fixer fix

cs-check:
	vendor/bin/php-cs-fixer fix --dry-run

analyse:
	vendor/bin/phpstan analyse

test:
	vendor/bin/phpunit

coverage:
	${PHP_COVERAGE} vendor/bin/phpunit --coverage-html var/tmp/coverage

coverage-cicd:
	${PHP_COVERAGE} vendor/bin/phpunit --coverage-text --colors=never

install:
	mkdir -p var/tmp

clean:
	rm -rf var/tmp/*