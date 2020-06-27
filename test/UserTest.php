<?php 
/**
 * @author Le Minh Hoang 
 * Unit User Test
 */
declare(strict_types=1);
require_once dirname(__FILE__) . '/../UserBuilder.php';
use PHPUnit\Framework\TestCase;
final class UserTest extends TestCase {
      public function __construct(){
        parent::__construct();
        $this->builder = new UserBuilder;
      }
      public function testBefore(){
        $this->builder->build();
        $this->assertIsArray($this->builder->data,"Data build is not array");
      }  
      public function testJsonRoleFileOfAdmin(){
        $this->assertFileExists(PHP_USER_PATTERN_JSON_PATH_ADMIN_ROLE);
      }
      public function testJsonRoleFileOfUser(){
        $this->assertFileExists(PHP_USER_PATTERN_JSON_PATH_USER_ROLE);
      }
      public function testCanSetName(){
        $name = 'Hoang Lee';
        $this->builder->setName($name);
        $this->builder->build();
        $this->assertEquals($this->builder->data['name'], $name,'Name is not correct');
      }
      public function testCanSetAge(){
        $age = 29;
        $this->builder->setAge($age);
        $this->builder->build();
        $this->assertEquals($this->builder->data['age'], $age,"Age is not correct");
        $this->assertIsNumeric($this->builder->data['age'],"Age is not numberic");
      }
      public function testCanSetLevel(){
        $level = "Technical Leader";
        $this->builder->setLevel($level);
        $this->builder->build();
        $this->assertEquals($this->builder->data['level'],  $level,"Level is not correct");
      }
      public function testCanSetTodoAdmin(){
        $this->builder->setTodo('admin');
        $this->builder->build();
        $this->assertNotEmpty($this->builder->data['todo']);
        //$this->assertJsonStringEqualsJsonFile(dirname(__FILE__) . '/../admin-todo.json',$this->builder->data['todo'],"Todo is not the same");
      }
      public function testRoleAdmin(){
        $this->builder->setTodo('admin');
        $this->builder->build();
        $this->assertJsonStringEqualsJsonFile(dirname(__FILE__) . '/../admin-todo.json',$this->builder->data['todo'],"Todo is not the same");
      }
      public function testCanSetTodoUser(){
        $this->builder->setTodo('user');
        $this->builder->build();
        $this->assertNotEmpty($this->builder->data['todo']);
      }
      public function testRoleUser(){
        $this->builder->setTodo('user');
        $this->builder->build();
        $this->assertJsonStringEqualsJsonFile(dirname(__FILE__) . '/../user-todo.json',$this->builder->data['todo'],"Todo is not the same");
      }
      public function testArrayResponse(){
        $this->assertEmpty($this->builder->data['name'],"Name is empty");
        $this->assertEmpty($this->builder->data['age'],"Age is empty");
        $this->assertEmpty($this->builder->data['level'],"Level is empty");
        $this->assertEmpty($this->builder->data['todo'],"Todo is empty");
        $this->assertEmpty($this->builder->data['level'],"Level is empty");
      }
      /**
       * Validate  Name
       */
      public function testValidateMaxLengthName(){
        try {
          $name = "adf adfa adf adfa df adfa df adfadf adf adf adf adf adf adf ad fad fadf adf ad fad f";
          $this->builder->setName($name);
          $this->builder->build();
          $this->assertTrue(false,"Can insert name with length more than 70 characters");
        }catch(Exception $e) {
          $this->assertTrue(true);
        }
      }  
      public function testValidateEmptyName(){
        try {
          $name = "";
          $this->builder->setName($name);
          $this->builder->build();
          $this->assertTrue(false,"Can insert name by empty data");
        }catch(Exception $e) {
          $this->assertTrue(true);
        }
      }    
      /**
       * Validate  Age
       */
      public function testValidateMaxLengthAge(){
        try {
          $age = 151;
          $this->builder->setAge($age);
          $this->builder->build();
          $this->assertTrue(false,"Can insert age value more than 150");
        }catch(Exception $e) {
          $this->assertTrue(true);
        }
      }  
}