PHP_COVERAGE = php -d zend_extension=xdebug.so -d xdebug.mode=coverage

it: cs analyse test

cs:
	vendor/bin/php-cs-fixer fix

cs-cicd:
	vendor/bin/php-cs-fixer fix --dry-run --no-interaction --show-progress=none --stop-on-violation

analyse:
	vendor/bin/phpstan analyse

analyse-cicd:
	vendor/bin/phpstan analyse --no-interaction --no-progress

test:
	vendor/bin/phpunit

test-cicd:
	vendor/bin/phpunit --no-progress

coverage:
	${PHP_COVERAGE} vendor/bin/phpunit --coverage-html var/tmp/coverage

coverage-cicd:
	${PHP_COVERAGE} vendor/bin/phpunit --coverage-text --colors=never

install:
	mkdir -p var/tmp

clean:
	rm -rf var/tmp/*
