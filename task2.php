<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите последовательность цифр без пробелов:
	<br>
	<br>
    <input type="text" name="user_input"><br><br>
	<br>
	Введите цифру, количество вхождений которой нужно определить:
	<br>
	<input type="text" name="wanted_number"><br><br>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php
if (isset($_POST['user_input']) && isset($_POST['wanted_number']) && is_numeric($_POST['user_input']) && is_numeric($_POST['wanted_number'])) {
	
	$number = $_POST['user_input'];
	$wanted = $_POST['wanted_number'];
	$arr = str_split($number);
	$result = 0;
	
	foreach ($arr as $i) 
		if ($i == $wanted) $result++;
    
   	echo '<br><br>Количество вхождений цифры '."$wanted".' в данной последовательности равна: '."$result";
} 
?>	
</body>
</html> 
