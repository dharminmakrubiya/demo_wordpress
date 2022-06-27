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

	class C extends B
	{
		function methodC()
		{
			echo 'Class C methodC';
		}
	}

	$obj = new C();
	$obj->methodA();
	echo '<br>'; 
	$obj->methodB();
	echo '<br>'; 
	$obj->methodC();
?>