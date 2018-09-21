<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите любой год, начиная с 1924:
	<br>
	<br>
    <input type="text" name="user_input"><br><br>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php

/*
* Для сверки
* http://znaki-zodiaca.ru/god-zodiaca/vse-znaki-zodiaka-po-godam.html
*
*
*/


$chinayears = array('0' => 'год Крысы',
					'1' => 'год Быка',
					'2' => 'год Тигра',
					'3' => 'год Кролика',
					'4' => 'год Дракона',
					'5' => 'год Змеи',
					'6' => 'год Лошади',
					'7' => 'год Овцы (Козы)',
					'8' => 'год Обезьяны',
					'9' => 'год Петуха',
					'10' => 'год Собаки',
					'11' => 'год Свиньи'
               );


if (isset($_POST['user_input']) && is_numeric($_POST['user_input']) && ($_POST['user_input'] >1923) ) {
	
	$year = $_POST['user_input'];
	$year = (int)$year;
	$index = ($year - 1924) % 12;
		
	$result = $chinayears[$index];
   	echo '<br><br>'."$year".' году соответствует по китайскому календарю '.'<b>'."$result".'</b>';
} 
?>	

</body>
</html>	
	
	
