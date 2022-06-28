<?php
/* Template Name: Inheritence Example Template */
get_header();
?>


<!-- Method Overriding Method overriding allows a child class to provide a specific implementation of a method already provided by its parent class.-->
<?php 

class A {
	public function dharmin(){
		return "Hello How Are You!";
	}
}
class B extends A {
	public function dharmin(){
		return "Hiiiiii";
	}
}


echo "<pre>";
$a = new A();
echo $a->dharmin();


$b = new B();
echo $b->dharmin();
echo "<pre>";


?>




<!-- Method Overloading Overloading means declaring a function multiple times with a different set of parameters -->
<?php 

class AB {
	private function dharmin_abc($a){
		return $a;
	}
}
class CD extends AB {
	private function dharmin_abc($a,$b){
		return $a + $b;
	}
}

echo dharmin_abc(10);
echo dharmin_abc(10,30);

?>



<!-- Static Method -->

<?php

class s_m {
  public static function my_example() {
    echo "Hello This is Static Method Example";
  }
  public function __construct() {
    self::my_example();
  }
}

new s_m();
echo "<pre>";
?>



<!-- iterable -->

<?php

function getIterable():iterable {
  return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
echo "<pre>";

?>



<!-- Inheritence Example -->

<!-- Single Inheritence -->
<?php

class First {
  public $the_name;
  public $age;
  public function __construct($the_name, $age) {
    $this->name = $the_name;
    $this->age = $age;
  }
  public function introduction() {
    echo "My  Name is {$this->name} and my age is {$this->age}.";
  }
}
class Second extends First {
  public function message() {
    echo "Hello How Are You!";
  }
}

echo "<pre>";

$abc = new Second("Dharmin", 21);

$abc->message();

$abc->introduction();

?>





<!-- Multilevel Inheritence -->
<?php

class One
{
	function a()
	{
		echo 'Hello a';
	}
}

class Two extends One
{
	function b()
	{
		echo 'Hello b';
	}
}

class Three extends Two
{
	function c()
	{
		echo 'Hello c';
	}
}

$obj = new Three();
$obj->a();
echo '<br>'; 
$obj->b();
echo '<br>';
$obj->c();
?>






<!-- Hirarchical Inheritence -->
<?php
   	class A
	{
		function ab()
		{
			echo 'Class A ab';
		}
	}

	class B extends A
	{
		function cd()
		{
			echo 'Class B cd';
		}
	}

	class C extends A
	{
		function ef()
		{
			echo 'Class C ef';
		}
	}

	class D extends A 
	{
		function gh()
		{
			echo "Class D gh";
		}
	}

	$obj = new C();
	$obj->ab();
	echo '<br>';
    $obj->ef();
	// initialize one or more Object for class B
	echo '<br>';
	$newObj = new B();
	$newObj->ab();
	echo "<br>";
	// $new_obj_camp = new D();
	// $new_obj_camp->gh();
?>




<!-- Constructor  -->
<?php
class dharmin
{	
	function __construct()
	{
		echo "My Constructor is Run.";
	}
}
$abcd = new dharmin();
?>







<!-- Destructor -->
<?php
class UserNames {
  public $name;
  public $age;

  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
  function __destruct() {
    echo "The Username is {$this->name} and the Age is {$this->age}.";
  }
}

$abcd = new UserNames("Dharmin", 21); 
echo "<pre>";
print_r($abcd);
print_r($this);

?>





<?php get_footer(); ?>
