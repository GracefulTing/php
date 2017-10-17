<?php 
	# 创建一个类
	// class Person{
	// 	public $name;
	// 	public $email;
	// }

	// $person1 = new Person;
	// $person1->name = "dede";
	// echo $person1->name;


	class Person{
		protected $name;
		private $email;

		//public static $age = 40;   //静态变量
		private static $age = 40;

		public static function getAge(){
			return Person::$age;
		}

		public function set($sbqname,$sbqemail){
			$this->name = $sbqname;
			$this->email = $sbqemail;
		}

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		# 构造函数
		//报错可以在参数后面直接加值 eg:$sbqname='henry'
		public function __construct($sbqname,$sbqemail){
			$this->name = $sbqname;
			$this->email = $sbqemail;
			//echo 'Person对象已被创建';
			echo  __CLASS__."对象已被创建";
			echo '<br>';
		}

		# 析构函数
		// public function __destruct(){
		// 	echo __CLASS__."对象已被销毁";
		// }
	}

	//$person1 = new Person;
	// $person1->set("dede","123@qq.com");
	// echo $person1->getName();
	// echo '<br>';
	// echo $person1->getEmail();

	// $person1 = new Person("dede","123@qq.com");
	// echo $person1->getName();
	// echo '<br>';
	// echo $person1->getEmail();
	// echo '<br>';

	# 继承
	class Customers extends Person{
		private $salary;

		public function setName($name){
			$this->name = $name;
		}

		public function setSalary($salary){
			$this->salary = $salary;
		}

		public function getSalary(){
			return $this->salary;
		}

		public function __construct($name,$email,$salary){
			parent::__construct($name,$email);   //调用父级__construct,重写构造函数
			$this->salary = $salary;
		}	
	}

	$customer = new Customers("Bucky","bucky@qq.com",3000);
	// $customer->setSalary(3000);
	// echo $customer->getName();echo '<br>';
	// echo $customer->getEmail();echo '<br>';
	// echo $customer->getSalary();echo '<br>';
	//-----------------------------------------
	# protected 测试
	// $customer->setName('tt');
	// echo $customer->getName();
	// echo '<br>';
	// echo $customer->name;   //报错

	# 调用静态变量
	// echo Person::$age;
	echo Person::getAge();
	//Person::  -  调用静态变量;调用父级;
?>