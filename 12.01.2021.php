<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>12.01.2020 Отправка формы на почту (email) через PHP </title>
</head>
<body>
<h2>Заказать</h2>
	<form action="12.01.2021.php" method="post" target="_blank" name="f1">
	  <input  type="text" placeholder="Ваше имя" name="name1" required>
	  <br>
	  <br>
	  <input  type="email" placeholder="Ваш email" name="email1" required="required">
	  <br>
	  <br>
	  
	  <select name="calor1" >
		<option> Красный </option>
		<option selected> Желтый </option>
		<option> Зеленый </option>
	  </select>
	  
	  <br>
	  <br>
	  
	  Частное лицо <input type="radio" name="a1" value="Частное лицо">&nbsp;&nbsp;&nbsp;
	  Юридическое <input type="radio" name="a1" value="Юридическое">
	  
	  <br>
	  <br>
	  
	  <textarea   placeholder="Ваш текст" name="text" required="required"></textarea>
	  <br>
	  <br>
	  <input  type="submit" value="ЗАКАЗАТЬ" name="sab">
	</form>
	
	<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name1']))			{$name1			= $_POST['name1'];		if ($name1 == '')	{unset($name1);}}
if (isset($_POST['email1']))		{$email1		= $_POST['email1'];		if ($email1 == '')	{unset($email1);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="martinmdva@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nИмя : $name1 \r\n Email : $email1 \r\n Дополнительная информация : $text";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:red;'> $email1</b>.</p>";
}

?>
	

</body>
</html>