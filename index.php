<?php

/*
class Counter {

	static $instance = NULL;
	protected $count = 0;
	
	static function get_instance() {
		if(self::$instance != NULL) {
			return self::$instance;
		}
		return self::$instance = new Counter();	
	}
	
	private function __construct() {
		echo 'CREATE OBJECT';
	}
	
	private function __clone() {
		
	}
	
	public function set() {
		$this->count++;
	}
	public function get() {
		return $this->count;
	}
	
	
}

*/
class Counter {

	static $instance = NULL;
	protected $count = 0;
	
	static function get_instance() {
		if(self::$instance instanceof self) {
			return self::$instance;
		}
		return self::$instance = new self;	
	}
	
	private function __construct() {
		echo 'CREATE OBJECT';
	}
	
	private function __clone() {
		
	}
	
	public function set() {
		$this->count++;
	}
	public function get() {
		return $this->count;
	}
	
	
}

//$counter = new Counter();
$ob = Counter::get_instance();
$ob->set();
$ob1 = Counter::get_instance();
$ob1->set();
$ob2 = Counter::get_instance();
$ob2->set();

echo $ob->get();
?>