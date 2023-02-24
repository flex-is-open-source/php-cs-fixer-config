PHP_COVERAGE = php -d zend_extension=xdebug.so -d xdebug.mode=coverage

it: cs analyse test

cs:
	vendor/bin/php-cs-fixer fix

cs-cicd:
	vendor/bin/php-cs-fixer fix --dry-run --no-interaction --show-progress=none --stop-on-violation

analyse:
	php vendor/bin/phpstan analyse

analyse-cicd:
	php vendor/bin/phpstan analyse --no-interaction --no-progress

test:
	php vendor/bin/phpunit --colors --testdox

test-cicd:
	php vendor/bin/phpunit --no-progress

coverage-html:
	${PHP_COVERAGE} vendor/bin/phpunit --coverage-html=.phpunit/coverage-html --colors --testdox --display-incomplete --display-skipped --display-deprecations --display-errors --display-notices --display-warnings

coverage-cicd:
	${PHP_COVERAGE} vendor/bin/phpunit --do-not-cache-result --log-junit=.phpunit/coverage-junit.xml --coverage-cobertura=.phpunit/coverage-cobertura.xml --coverage-text --colors=never

install:
	mkdir -p var/tmp

clean:
	rm -rf var/tmp/*
