<?php
$result = 0;
for ($i = 20; $i <= 45; $i++)
	if (fmod($i, '5') == 0)
		$result = $result + $i;
	
echo $result;
?>
