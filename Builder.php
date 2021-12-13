<?php 
interface Builder {
    public function setName(string $name) : Builder ;
    public function setAge(int $age) : Builder;
    public function setLevel(string $level) : Builder;
    public function setLocation(string $location) : Builder;
    public function setTodo(string $role) : Builder;
    public function build() : array;
}