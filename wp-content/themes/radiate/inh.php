<?php
/* Template Name: Inheritence Example Template */
get_header();
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
		function methodA()
		{
			echo 'Class A methodA';
		}
	}

	class B extends A
	{
		function methodB()
		{
			echo 'Class B methodB';
		}
	}

	class C extends A
	{
		function methodC()
		{
			echo 'Class C methodC';
		}
	}

	$obj = new C();
	$obj->methodA();
	echo '<br>';
        $obj->methodC();
	/*now initialize one more Object for class B*/
	echo '<br>';
	$newObj = new B();
	$newObj->methodA();
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

?>

<?php get_footer(); ?>
