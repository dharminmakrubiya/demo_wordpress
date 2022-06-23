<?php
/* Template Name: Loops Template */
get_header();
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