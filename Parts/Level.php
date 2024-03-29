<?php 
class UserLevel {
    public static function main(string $level = '') : string | \Exception{
        if(strlen($level) > PHP_USER_PATTERN_MAX_LENGTH_LEVEL) {
            throw new Exception(PATTERN_NAME . " : Level :  maximum " . PHP_USER_PATTERN_MAX_LENGTH_LEVEL . " characters ");
        }
        return $level;
    }
}