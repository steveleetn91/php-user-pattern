<a href="https://travis-ci.org/github/steveleetn91/php-user-pattern">
<img src="https://travis-ci.org/steveleetn91/php-user-pattern.svg?branch=master">
</a>

# Description
 This module will support create user with : name, age, location, level, todo. This module is Builder Pattern of PHP
 <code>
     ( [name] => Hoang Lee [age] => 29 [location] => HCM, Viet Nam [todo] => {"post":{"update":true,"delete":false,"create":true,"view_all":false},"page":{"update":true,"delete":false,"create":true,"view_all":false},"setting":{"update":false,"create":false}} )
 </code>
# install composer 
<code>php composer.phar install</code>

# Unit Test 

<code>./vendor/bin/phpunit test/UserTest.php</code>