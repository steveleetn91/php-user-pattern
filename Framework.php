<?php
abstract class Framework {
    public $data = [];
    public function set($key = '',$data = ''){
        if($key === '') {
            return new Exception(PATTERN_NAME . " not found key data");
        }
        $this->data[$key] = $data;
    }
    public function get(){
        return $this->data;
    }
}