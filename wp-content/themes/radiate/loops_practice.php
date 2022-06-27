<?php
/* Template Name: Loops Template */
get_header();
?>








<!-- Multilevel inheritence -->
<?php

class a {
	public $the_name;
	public $the_age;

	public function __construct($the_name,$the_age);
	{
		$this->name = $the_name;
		$this->age = $the_age;
	}
	public function second()
	{
		echo " Name is {$this->name} and the Age is {$this->age}.";
	}
}

class b extends a 
{
	public function msg()
	{
		echo "Hello How Are You!";
	}
}

$s = new b("Dharmin",21);
$s -> msg();
$s -> second();

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





<!-- Class Example $this keyword refers to the current object, and is only available inside methods-->
<?php
class Company 
{
  public $name;
  function set_name_company($name) 
  {
    $this->name = $name;
  }
}
$abc = new Company();
$abc->set_name_company("MirrorTech");
print_r($abc);
echo $abc->name;
?>











<!-- for loop : For loop implemented over variables and at the end of the given condition-->
<?php
echo "for loop example";

$abc = array(
	1,
	2,
	3,
	4,
	5,
	6,
	7,
	8,
	9,
	10
);
echo "<pre>";
print_r($abc);
for($i = 0; $i <= 10; $i++) 
{
	echo($abc[$i] . "<br>");
}
?>



<!-- Foreach loop : Foreach loop implemented over Numerical and associative arrays at the end of the array counting in this loop-->
<?php
echo "for-each example";
$def = array(
	1,
	2,
	3,
	4,
	5,
	6,
	7,
	8,
	9,
	10
);
echo "<pre>";
// print_r($def);

foreach($def as $value){
	echo($value."<br>");
}
?>



<!-- While Loop : is entry controlled loop Condition add start of the loop condition check first then statement executes-->
<?php
echo "While loop example";

$xyz = 1;

while ($xyz <= 10) {
	echo "<br>$xyz";
	$xyz++;
}
?>



<!-- Do While Loop : Exit Controlled Loop body of the loop at least once statements executes first and then condition checks-->

<?php

echo "Do While Loop Example";

$pqr = 1;  
    do {  
        echo "</br>$pqr";  
        $pqr++;  
    } while ($pqr <= 10);  


?>


<?php
get_footer();
?>