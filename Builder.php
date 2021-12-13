<?php 
interface Builder {
    public function setName($name) : Builder;
    public function setAge($age) : Builder;
    public function setLevel($level) : Builder;
    public function setLocation($location) : Builder;
    public function setTodo($role) : Builder;
    public function build() : array;
}