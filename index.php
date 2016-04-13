<?

/*$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='bd_med';
$connect= mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Íå ìîãó ïîäêëþ÷èòüñÿ ê ÁÄ MySQL: " . mysql_error());
$select= mysql_select_db($mysql_db) or die("ÁÄ ñ òàêèì èìåíåì íå íàéäåíà: " . mysql_error());

if(isset($_POST['submit'])) {
	echo 'hello';
}*/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>	
	<meta charset="utf-8">
	<title>Сайт сбора данных городских больниц</title>
</head>
<body>
<h3 style="margin: 20px">Ниже Вы сможете узнать результаты своих анализов</h3>
<div align="center" valign="center" style="background: white width: 40%; height: 66%; ">
	<form align="center" action="result.php" method="post">
		<p style="font-size:110%">
			<br>Введите свои данные:<br><br>
			Фамилия<br>
			<input type="text" name="q1" ><br><br>
			Имя<br>
			<input type="text" name="q2" ><br><br>
			Отчество<br>
			<input type="text" name="q3" ><br><br>
			Паспортные данные (вводится без пробелов)<br>
			<input type="text" name="q4" ><br><br>
			Номер телефона (без скобок, пробелов)<br>
			<input type="text" name="q5" ><br><br>

			<input type="submit" name='submit' style="margin-bottom:10px; font-size:110%" value="Показать информацию об анализе"></p>
	</form>
	<br> <a href='/log.html'>Нажмите тут, если вы администратор</a>
</div>
</body>
</html>