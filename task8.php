<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите число от 6 до 14 включительно:
	<br>
	<br>
    <input type="text" name="user_input"><br><br>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php

$cards = array('шестёрка'  => '6',
               'семёрка'   => '7',
               'восьмёрка' => '8',
               'девятка'   => '9',
               'десятка'   => '10',
               'валет'     => '11',
               'дама'      => '12',
               'король '   => '13',
               'туз'       => '14',
               );


if (isset($_POST['user_input']) && is_numeric($_POST['user_input']) && ($_POST['user_input'] >5) && ($_POST['user_input'] <15)) {
	
	$number = $_POST['user_input'];
		
	$result = array_search($number, $cards);
   	echo '<br><br>'.'Этому числу соответствует карта достоинством: '.'<b>'."$result".'</b>';
} 
?>	

</body>
</html>	
	
	