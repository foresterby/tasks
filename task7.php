<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите год для проверки:
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
	
	/* 
	* Будем действовать исходя из информации на Википедии: 
	*
	* "год, номер которого кратен 400, — високосный;
    * остальные годы, номер которых кратен 100, — невисокосные;
    * остальные годы, номер которых кратен 4, — високосные."
	*
	*/
	
	if($x == 0 || $x > 9999):
		echo 'Введите корректное значение';
	elseif($x % 100 == 0 && $x % 400 == 0): 
		echo "$x".' - високосный год';
	elseif($x % 100 == 0 && $x % 400 !== 0): 
		echo "$x".' - НЕ високосный год';
	elseif($x % 4 == 0): 
		echo "$x".' - високосный год';
	else:
		echo "$x".' - НЕ високосный год';
	endif;

		
	}	
	
	
?>



</body>
</html>	