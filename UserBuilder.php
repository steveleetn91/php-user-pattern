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
        public function __construct($model = null){
            if($model === null) {
                $this->model = new UserModel;
            } else{
                $this->model = $model;
            }
        }
        public function setName($name) : Builder {
            $this->model->set('name',UserName::main($name));
            return new UserBuilder($this->model);
        }
        public function setAge($age) : Builder{
            $this->model->set('age',UserAge::main($age));
            return new UserBuilder($this->model);
        }
        public function setLevel($level) : Builder{
            $this->model->set('level',UserLevel::main($level));
            return new UserBuilder($this->model);
        }
        public function setLocation($location) : Builder{
            $this->model->set('location',UserLocation::main($location));
            return new UserBuilder($this->model);
        }
        public function setTodo($role = 'member') : Builder{
            $this->model->set('todo',UserTodo::main($role));
            return new UserBuilder($this->model);
        }
        public function build() : array{
            return $this->model->data;
        }
}