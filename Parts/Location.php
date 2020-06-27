<?php 
class UserLocation {
    public static function main($location = ''){
        if(strlen($location) > PHP_USER_PATTERN_MAX_LENGTH_LOCATION) {
            throw new Exception(PATTERN_NAME . " : localtion : maximum " . PHP_USER_PATTERN_MAX_LENGTH_LOCATION . " characters ");
        }
        return $location;
    }
}