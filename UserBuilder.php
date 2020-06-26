<?php 
require_once dirname(__FILE__) . '/Define.php';
require_once dirname(__FILE__) . '/Builder.php';
require_once dirname(__FILE__) . '/Parts/UserModel.php';
require_once dirname(__FILE__) . '/Parts/Age.php';
require_once dirname(__FILE__) . '/Parts/Level.php';
require_once dirname(__FILE__) . '/Parts/Location.php';
require_once dirname(__FILE__) . '/Parts/Name.php';
class UserBuilder implements Builder {
        private $model;
        public $data;
        public function __construct(){
            $this->model = new UserModel;
        }
        public function setName($name){
            $this->model->set('name',UserName::render($name));
        }
        public function setAge($age){
            $this->model->set('age',UserAge::render($age));
        }
        public function setLevel($level){
            $this->model->set('level',Level::render($level));
        }
        public function setLocation($location){
            $this->model->set('location',UserLocation::render($location));
        }
        public function build(){
            $this->data = $this->model->data;
        }
}