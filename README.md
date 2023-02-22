![pipeline](//git.flexis.sk/php/php-cs-fixer-config/badges/main/pipeline.svg?key_text=main)
![coverage](//git.flexis.sk/php/php-cs-fixer-config/badges/main/coverage.svg?job=coverage)

# Introduction

This repository was created to unify PHP coding standards across multiple projects.

### Pre-commit hook
You can add a `pre-commit` hook
```
$ touch .git/pre-commit
$ touch .git/pre-commit-remote
```

Paste this into `.git/pre-commit`:
```bash
#!/bin/sh

ssh -T dev-php "bash /project_path/.git/hooks/pre-commit-remote"
```

Paste this into `.git/pre-commit-remote`:
```bash
#!/bin/bash

echo "pre commit hook start"

CURRENT_DIRECTORY=`pwd`
GIT_HOOKS_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

PROJECT_DIRECTORY="$GIT_HOOKS_DIR/../.."

cd $PROJECT_DIRECTORY;
PHP_CS_FIXER="vendor/bin/php-cs-fixer"

HAS_PHP_CS_FIXER=false

if [ -x "$PHP_CS_FIXER" ]; then
    HAS_PHP_CS_FIXER=true
fi

if $HAS_PHP_CS_FIXER; then
    git status --porcelain | grep -e '^[AM]\(.*\).php$' | cut -c 3- | while read line; do
        ${PHP_CS_FIXER} fix --verbose ${line};
        git add "$line";
    done
else
    echo ""
    echo "Please install php-cs-fixer, e.g.:"
    echo ""
    echo "  composer require --dev friendsofphp/php-cs-fixer:^2.2.0"
    echo ""
    exit 1
fi

cd $CURRENT_DIRECTORY;
echo "pre commit hook finish"
```

## License

This package is licensed using the MIT License.