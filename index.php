<?php 
try {
    require_once dirname(__FILE__) . '/UserBuilder.php';
    $builder = new UserBuilder;
    $builder->setName('Hoang Lee');
    $builder->setAge(29);
    $builder->setLocation('HCM, Viet Nam');
    $builder->setTodo('admin');
    $builder->build();
    print_r($builder->data);
}catch(Exception $e) {
    print_r($e);
}
