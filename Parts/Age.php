<?php 
class UserAge {
    public static function main($age = 0){
        if($age > PHP_USER_PATTERN_MAX_VALUE_AGE) {
            throw new Exception(PATTERN_NAME . " : Age :  maximum " . PHP_USER_PATTERN_MAX_VALUE_AGE . " characters ");
        }
        return intval($age);
    }
}