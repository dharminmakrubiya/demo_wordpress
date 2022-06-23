<?php
/* Template Name: Loops Template */
get_header();
?>


<!-- for loop : For loop implemented over variables and at the end of the given condition-->
<?php
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
print_r($def);

foreach($def as $val){
	echo($val."<br>");
}
?>







<?php
get_footer();
?>