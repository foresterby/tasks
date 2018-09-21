<?php
$random_arr = [];
for ($i = 1; $i <= 10; $i++)
	$random_arr[]=rand(50, 100);




echo '<br>'.'Начальный массив:'.'<br>';
print_r($random_arr);
$max_value = max($random_arr);
$min_value = min($random_arr);
echo '<br><br>'.'Максимальное значение: '."$max_value";
echo '<br>'.'Минимальное значение: '."$min_value".'<br>';



$key_max_value = array_search( (max($random_arr)), $random_arr);
$key_min_value = array_search( (min($random_arr)), $random_arr);
echo '<br>'.'Ключ максимального значения: '."$key_max_value";
echo '<br>'.'Ключ минимального значения: '."$key_min_value".'<br>';


$random_arr[$key_max_value] = "$min_value";
$random_arr[$key_min_value] = "$max_value";
echo '<br>'.'Итоговый массив:'.'<br>';
print_r($random_arr);

?>	

	
	
