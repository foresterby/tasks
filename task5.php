<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    Введите фамилию, имя и отчество:
	<br>
	<br>
    <input type="text" name="user_input" placeholder="Иванов Иван Петрович" value="Иванов Иван Петрович"><br><br>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<br>
<?php
if (isset($_POST['user_input'])) {
	
	$full_name = $_POST['user_input'];
	$name_parts = explode(" ", $full_name);
	$name = $name_parts[1];
	$middle_name = $name_parts[2];
	$name_letter = substr($name, 0, 1);
	//echo '<br>'."$name_letter";
	$middle_name_letter = substr($middle_name, 0, 1);
	//echo '<br>'."$middle_name_letter";
	
   	echo '<br><br>Сокращенно фамилия и инициалы: '.'<br>';
	echo "$name_parts[0]".' '."$name_letter".'.'."$middle_name_letter".'.';
} 
?>	

</body>
</html>	
	
	