
<?php
$random_arr = [];
for ($i = 1; $i <= 10; $i++)
	$random_arr[]=rand(50, 100);



$myArrayObject = new ArrayObject($random_arr);

print_r($random_arr);
$max_value = max($random_arr);
$min_value = min($random_arr);
echo '<br>'."$max_value";
echo '<br>'."$min_value".'<br>';



$key_max_value = array_search( (max($random_arr)), $random_arr);
$key_min_value = array_search( (min($random_arr)), $random_arr);
echo '<br>'."$key_max_value";
echo '<br>'."$key_min_value".'<br>';


$random_arr[$key_max_value] = "$min_value";
$random_arr[$key_min_value] = "$max_value";

print_r($random_arr);






?>	

	
	