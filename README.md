Project Euler in PHP
====================

Solutions for [Project Euler](https://projecteuler.net) problems  

Installation from source :
- Prerequisite : PHP >= 5.5 and git  must be installed,
```
# Clone repository
git clone https://github.com/jfx/project-euler.git
cd project-euler
# Install composer
php -r "readfile('https://getcomposer.org/installer');" | php
# Install libraries
php composer.phar install --prefer-dist
```

Usage:
```
./bin/pe resolve <num problem>
```

![Project Euler resolution command line](/web/images/project-euler-php-resolve.png?raw=true "Resolution of Project Euler problem #1")

To run unit tests :
```
./vendor/bin/phpunit -c phpunit.xml
```

![Project Euler unit tests](/web/images/project-euler-php-test.png?raw=true "Run Unit tests suite")