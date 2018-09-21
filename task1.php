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
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php
if (isset($_POST['user_input']) && is_numeric($_POST['user_input'])) {
	
	$number = $_POST['user_input'];
	$arr = str_split($number);
	$result = array_sum($arr);
   	echo '<br><br>Сумма введенной последовательности цифр: '."$result";
} 
?>	

</body>
</html>	
	
	