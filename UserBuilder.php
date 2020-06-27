<?php 
require_once dirname(__FILE__) . '/Define.php';
require_once dirname(__FILE__) . '/Builder.php';
require_once dirname(__FILE__) . '/Parts/UserModel.php';
require_once dirname(__FILE__) . '/Parts/Age.php';
require_once dirname(__FILE__) . '/Parts/Level.php';
require_once dirname(__FILE__) . '/Parts/Location.php';
require_once dirname(__FILE__) . '/Parts/Name.php';
require_once dirname(__FILE__) . '/Parts/Todo.php';
class UserBuilder implements Builder {
        private $model;
        public $data;
        public function __construct(){
            $this->model = new UserModel;
        }
        public function setName($name){
            $this->model->set('name',UserName::main($name));
        }
        public function setAge($age){
            $this->model->set('age',UserAge::main($age));
        }
        public function setLevel($level){
            $this->model->set('level',UserLevel::main($level));
        }
        public function setLocation($location){
            $this->model->set('location',UserLocation::main($location));
        }
        public function setTodo($role = 'member'){
            $this->model->set('todo',UserTodo::main($role));
        }
        public function build(){
            $this->data = $this->model->data;
        }
}