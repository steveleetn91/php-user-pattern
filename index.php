<?php
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
