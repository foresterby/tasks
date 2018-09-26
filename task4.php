<?php
$random_arr = [];
for ($i = 1; $i <= 10; $i++)
	$random_arr[] = rand(50, 100);

echo '<br>'.'Начальный массив:'.'<br>';
print_r($random_arr);

		
$max_value = $random_arr[0];
$min_value = $random_arr[0];


for($i = 0; $i < count($random_arr); $i++) 
	{
	
	if($random_arr[$i] > $max_value)
		{
		$max_value = $random_arr[$i];
		$key_max = $i;
		}
	
	
	if($random_arr[$i] < $min_value)
		{
		$min_value = $random_arr[$i];
		$key_min = $i;
		}
	}
	
//echo '<br>'."$max_value";
$random_arr[(int)$key_min] = $max_value;
$random_arr[(int)$key_max] = $min_value;

echo '<br>';
echo '<br>'.'Измененный массив:'.'<br>';
print_r($random_arr);
?>
