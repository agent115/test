<?php
class MyFactory {
	
	static function factory($name) {
		if(include $name.'.php') {
			return new $name;
		}
		else {
			throw new Exception('Wrong File');
		}
	}
}
try {
	//$object = MyFactory::factory('Mysql');
}
catch(Exception $e) {
	exit($e->getMessage());
}


abstract class User {
	
	public $name;
	
	public function __construct($name) {
		$this->name = $name;
	}
	
	public function get_name () {
		return $this->name;
	}
}

class Moderator extends User {
	
	public function get_name() {
		$str = parent::get_name();
		return $str.__CLASS__;
	}
}
class Admin extends User {
	
	public function get_name() {
		$str = parent::get_name();
		return $str.__CLASS__;
	}
}
class Guest extends User {
	
	public function get_name() {
		$str = parent::get_name();
		return $str.__CLASS__;
	}
}

class UserFactory {
	static function create($name,$userName) {
		switch($name) {
			case 'Moderator':
			return new Moderator($userName);
			case 'Admin':
			return new Admin($userName);
			case 'Guest':
			return new Guest($userName);
			
			default:
			
			exit('Wrong');
		}
	}
}
$admin = UserFactory::create('Moderator1','Vasya');
echo $admin->get_name();

?>