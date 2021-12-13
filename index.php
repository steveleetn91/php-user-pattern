<?php 
try {
    require_once dirname(__FILE__) . '/UserBuilder.php';
    $admin = $user = new UserBuilder;
    $admin->setName('Hoang Lee')
    ->setAge(11)
    ->setLocation('HCM, Viet Nam')
    ->setLevel('Technical Leader')
    ->setTodo('admin');
    print_r($admin->build());
    print_r('<br/>-------- first build ------- <br/>');
    $user->setName('Hoang Lee 2')
    ->setAge(30)
    ->setLocation('HCM, Viet Nam')
    ->setLevel('Technical Leader 2')
    ->setTodo('member');
    print_r($admin->build());
}catch(\Exception $e) {
    echo "Debug<br/>";
    print_r($e);
}
