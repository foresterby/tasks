
<?php
$arr = [];
for ($i = 20; $i <= 45; $i++)
	$arr[] = $i;
	
$arr_result = [];	
foreach ($arr as $i) {
	if (fmod($i, '5') == 0)
		$arr_result[] = $i;
	}
	
$result = array_sum($arr_result);
echo $result;

?>	

	
	