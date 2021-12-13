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
        public function setName(string $name) : Builder{
            $this->model->set('name',UserName::main($name));
            return $this;
        }
        public function setAge(int $age) : Builder{
            $this->model->set('age',UserAge::main($age));
            return $this;
        }
        public function setLevel(string $level) : Builder{
            $this->model->set('level',UserLevel::main($level));
            return $this;
        }
        public function setLocation(string $location) : Builder{
            $this->model->set('location',UserLocation::main($location));
            return $this;
        }
        public function setTodo(string $role = 'member') : Builder{
            $this->model->set('todo',UserTodo::main($role));
            return $this;
        }
        public function build() : array{
            $this->model->data['todo'] = json_decode($this->model->data['todo'],true);
            return $this->model->data;
        }
}