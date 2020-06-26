<?php 
interface Builder {
    public function setName($name);
    public function setAge($age);
    public function setLevel($level);
    public function setLocation($location);
    public function build();
}