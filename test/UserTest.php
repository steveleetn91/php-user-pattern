<?php 
/**
 * @author Le Minh Hoang 
 * Unit User Test
 */
declare(strict_types=1);
require_once dirname(__FILE__) . '/../UserBuilder.php';
use PHPUnit\Framework\TestCase;
final class UserTest extends TestCase {
      public function testBefore(){
        $builder = new UserBuilder;
        $builder->build();
        $this->assertIsArray($builder->data,"Data build is not array");
      }  
      public function testCanSetName(){
        $builder = new UserBuilder;
        $name = 'Hoang Lee';
        $builder->setName('Hoang Lee');
        $builder->build();
        $this->assertEquals($builder->data['name'], $name,'Name is not correct');
      }
      public function testCanSetAge(){
        $age = 29;
        $builder = new UserBuilder;
        $builder->setAge($age);
        $builder->build();
        $this->assertEquals($builder->data['age'], $age,"Age is not correct");
        $this->assertIsNumeric($builder->data['age'],"Age is not numberic");
      }
      public function testCanSetLevel(){
        $level = "Technical Leader";
        $builder = new UserBuilder;
        $builder->setLevel($level);
        $builder->build();
        $this->assertEquals($builder->data['level'],  $level,"Level is not correct");
      }
}