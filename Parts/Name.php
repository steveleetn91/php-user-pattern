<?php 
class UserName {
    public static function main($name = ''){
        /**
         * Name empty 
         */
        if($name === '') {
            throw new Exception(PATTERN_NAME . " : name : empty data ");
        }
        /**
         * String Length 
         */
        if(strlen($name) > PHP_USER_PATTERN_MAX_LENGTH_NAME) {
            throw new Exception(PATTERN_NAME . " : name : maximum " . PHP_USER_PATTERN_MAX_LENGTH_NAME . " characters ");
        }
        return $name;
    }
}