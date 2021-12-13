<?php 
class UserTodo {
    public static function main($role = 'admin') : string | \Exception{
        $json = $role === 'admin' 
        ? file_get_contents(PHP_USER_PATTERN_JSON_PATH_ADMIN_ROLE) 
        : file_get_contents(PHP_USER_PATTERN_JSON_PATH_USER_ROLE);
        return $json;
    }
}