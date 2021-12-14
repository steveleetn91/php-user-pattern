<a href="https://travis-ci.org/github/steveleetn91/php-user-pattern">
<img src="https://travis-ci.org/steveleetn91/php-user-pattern.svg?branch=master">
</a>

# Description
 This module will support create user with : name, age, location, level, todo. This module is Builder Pattern of PHP

            -------- first build -------

            Array ( [name] => Steve Lee [age] => 11 [location] => HCM, Viet Nam [level] => Technical Leader [todo] => Array ( [post] => Array ( [update] => 1 [delete] => 1 [create] => 1 [view_all] => 1 ) [page] => Array ( [update] => 1 [delete] => 1 [create] => 1 [view_all] => 1 ) [setting] => Array ( [update] => 1 [create] => 1 ) ) )

            -------- next build -------

            Array ( [name] => Steve Job [age] => 11 [location] => Silicon valley, US [level] => Technical Leader [todo] => Array ( [post] => Array ( [update] => 1 [delete] => [create] => 1 [view_all] => ) [page] => Array ( [update] => 1 [delete] => [create] => 1 [view_all] => ) [setting] => Array ( [update] => [create] => ) ) )

            -------- next build -------

            Array ( [name] => Bill gates [age] => 11 [location] => Silicon valley, US [level] => Technical Leader [todo] => Array ( [post] => Array ( [update] => 1 [delete] => [create] => 1 [view_all] => ) [page] => Array ( [update] => 1 [delete] => [create] => 1 [view_all] => ) [setting] => Array ( [update] => [create] => ) ) )

# install composer 
<code>php composer.phar install</code>

# Unit Test 

<code>./vendor/bin/phpunit test/UserTest.php</code>

# How to use ? 

        try {
            require_once dirname(__FILE__) . '/UserBuilder.php';
            $admin = new UserBuilder;
            $admin->setName('Steve Lee')
                ->setAge(11)
                ->setLocation('HCM, Viet Nam')
                ->setLevel('Technical Leader')
                ->setTodo('admin');
            print_r('<br/>-------- first build ------- <br/>');
            print_r($admin->build());
            print_r('<br/>-------- next build ------- <br/>');
            $admin->setName('Steve Jobs')
                ->setLocation('Silicon valley, US')
                ->setTodo('member');
            print_r($admin->build());
            print_r('<br/>-------- next build ------- <br/>');
            $admin->setName('Bill Gates')
                ->setTodo('member');
            print_r($admin->build());
        } catch (\Exception $e) {
            echo "Debug<br/>";
            print_r($e);
        }

