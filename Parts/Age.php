<?php 
class UserAge {
    public static function main(int $age = 0) : int | \Exception{
        if($age > PHP_USER_PATTERN_MAX_VALUE_AGE) {
            throw new Exception(PATTERN_NAME . " : Age :  maximum " . PHP_USER_PATTERN_MAX_VALUE_AGE . " characters ");
        }
        return $age;
    }
}