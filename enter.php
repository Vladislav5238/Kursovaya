<?php
$login=trim($_POST["login"]);
$password=trim($_POST["password"]);
/* Проверка заполнения всех полей формы авторизации */
if(empty($login) or empty($password))
{
 ?>
   <html>
         <head><title>Error</title></head>
		  <body>
		     <div align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>Одно из полей не заполнено</p>
				<a href="/log.html" align='center'>Назад к заполнению</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}

/* Подключение к базе в случае успеха предыдущих проверок */
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='bd_med';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());

/* Проверяем наличие пользователя с таким логином в БД */
$query_login = mysql_query("SELECT * FROM `admin` WHERE `login` = '$login' LIMIT 0 , 30") or die(mysql_error());
$answer=mysql_num_rows($query_login);
if ($answer==0)
{
  ?><html>
         <head><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>Пользователь с таким логином в БД не найден. Предлагаем пройти регистрацию.</p>
				<a href="/log.html" align='center'>Перейти к регистрации</a>
			 </div>
		  </body>
   </html>
  <?php
  mysql_close($connect);
  exit;
}
/* Проверяем корректность пары логин-пароль */
$answer_pass=mysql_fetch_array($query_login);
if($answer_pass['password']!=$password)
  {
   ?><html>
         <head><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>Пароль введен не верно.</p>
				<a href="/log.html" align='center'>Вернуться на главную страницу</a>
			 </div>
		  </body>
   </html>
  <?php
    mysql_close($connect);
    exit; 
  }
?><html>
         <head><title>Личный кабинет пользователя</title></head>
		  <body>
		  
		  
		  
		  
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>Личный кабинет пользователя <font color="red"><?php echo $answer_pass['login'];?></font></p>
                <br>				
			 </div>
			 
			 
			 
			 
			 
			 <h3 style="margin: 20px">Записать пользователя</h3>
<div align="center" valign="center" style="background: white width: 40%; height: 66%; ">
	<form align="center" action="test.php" method="post">
		<p style="font-size:110%">
			<br>Введите данные пациента:<br><br>
			Фамилия<br>
			<input type="text" name="q1" ><br><br>
			Имя<br>
			<input type="text" name="q2" ><br><br>
			Отчество<br>
			<input type="text" name="q3" ><br><br>
			Паспортные данные (вводится без пробелов)<br>
			<input type="number" name="q4" ><br><br>
			Номер телефона<br>
			<input type="tel" name="q5" ><br><br>
			
			
			<br><h3>Ниже введите значения результатов анализов пациента</h3><br><br>
			Гемоглобин [HB]<br>
			<input type="number" name="q6" ><br><br>
			Эритроциты [RBC]<br>
			<input type="number" name="q7" ><br><br>
			Цветной показатель [MCHC%]<br>
			<input type="number" name="q8" ><br><br>
			Ретикулоциты [RLT]<br>
			<input type="number" name="q9" ><br><br>
			Тромбоциты [PLT]<br>
			<input type="number" name="q10" ><br><br>
			СОЭ [ESR]<br>
			<input type="number" name="q11" ><br><br>
			Лейкоциты [WBC]<br>
			<input type="number" name="q12" ><br><br>
			Палочкоядерные [%]<br>
			<input type="number" name="q13" ><br><br>
			Сегментоядерные [%]<br>
			<input type="number" name="q14" ><br><br>
			Эзинофилы [EOS] <br>
			<input type="number" name="q15" ><br><br>
			Базофилы [BAS]<br>
			<input type="number" name="q16" ><br><br>
			Лимфоциты [LUM]<br>
			<input type="number" name="q17" ><br><br>
			Моноциты [MON]<br>
			<input type="number" name="q18" ><br><br>
			
			

			<input type="submit" style="margin-bottom:10px; font-size:110%" value="Записать"></p>
	</form>
		  </body>
</html>

