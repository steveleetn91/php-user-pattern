<a href="https://travis-ci.org/github/steveleetn91/php-user-pattern">
<img src="https://travis-ci.org/steveleetn91/php-user-pattern.svg?branch=master">
</a>

# Description
 This module will support create user with : name, age, location, level, todo. This module is Builder Pattern of PHP
 <code>
     Array ( [name] => Hoang Lee [age] => 29 [location] => HCM, Viet Nam [level] => Technical Leader [todo] => { "post": { "update": true, "delete": true, "create": true, "view_all": true }, "page": { "update": true, "delete": true, "create": true, "view_all": true }, "setting": { "update": true, "create": true } } )
 </code>

# install composer 
<code>php composer.phar install</code>

# Unit Test 

<code>./vendor/bin/phpunit test/UserTest.php</code>

# How to use ? 

<code> 
 
    require_once dirname(__FILE__) . '/UserBuilder.php';
    $builder = new UserBuilder;
    $builder->setName('Hoang Lee');
    $builder->setAge(29);
    $builder->setLocation('HCM, Viet Nam');
    $builder->setLevel('Technical Leader');
    $builder->setTodo('admin');
    $builder->build();

</code>