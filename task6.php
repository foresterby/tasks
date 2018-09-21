<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите количество минут, прошедших с начала часа:
	<br>
	<br>
    <input type="text" name="user_input"><br><br>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php

if (isset($_POST['user_input']) && is_numeric($_POST['user_input']))
	{
	
	$x = $_POST['user_input'];
	$x = (int)$x;
	
		
	
	
	
	switch ($x) {
		case ($x > 60):
			echo 'Введите корректное значение';
			break;
		case ($x > 0 && $x <= 3):
			echo 'Горит зелёный сигнал светофора';
			break;
		case ($x > 3 && $x <= 5):
			echo 'Горит красный';
			break;
		case ($x > 5 && ($x % 5 == 3)):
			echo 'Горит зелёный сигнал светофора';
			break;
		case ($x > 5 && ($x % 5 == 2)):
			echo 'Горит зелёный сигнал светофора';
			break;
		case ($x > 5 && ($x % 5 == 1)):
			echo 'Горит зелёный сигнал светофора';
			break;
		case ($x > 5 && ($x % 5 == 4)):
			echo 'Горит красный';
			break;
		case ($x > 5 && ($x % 5 == 0)):
			echo 'Горит красный';
			break;
		
				
	}
		
	}	
	
?>
</body>
</html>	
