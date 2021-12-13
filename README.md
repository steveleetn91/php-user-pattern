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
    print_r('<br/>-------- First build ------- <br/>');
    require_once dirname(__FILE__) . '/UserBuilder.php';
    $admin = $user = new UserBuilder;
    $admin->setName('Hoang Lee')
    ->setAge(29)
    ->setLocation('HCM, Viet Nam')
    ->setLevel('Technical Leader')
    ->setTodo('admin');
    print_r($admin->build());
    print_r('<br/>-------- Next build ------- <br/>');
    $user->setName('Hoang Lee 2')
    ->setAge(30)
    ->setLocation('HCM, Viet Nam')
    ->setLevel('Technical Leader 2')
    ->setTodo('member');
    print_r($admin->build());
    
</code>