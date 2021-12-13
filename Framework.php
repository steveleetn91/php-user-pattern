<?php
abstract class Framework {
    public $data = array();
    public function set($key = '',$data = '') : void{
        if($key === '') {
            throw new Exception(PATTERN_NAME . " not found key data");
        }
        $this->data[$key] = $data;
    }
    public function get() : string | array | int{
        return $this->data;
    }
}