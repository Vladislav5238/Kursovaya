<?php
$login=trim($_POST["login"]);
$password=trim($_POST["password"]);
/* �������� ���������� ���� ����� ����� ����������� */
if(empty($login) or empty($password))
{
 ?>
   <html>
         <head><title>Error</title></head>
		  <body>
		     <div align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>���� �� ����� �� ���������</p>
				<a href="/log.html" align='center'>����� � ����������</a>
			 </div>
		  </body>
   </html>
<?php
exit;
}

/* ����������� � ���� � ������ ������ ���������� �������� */
$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='bd_med';
$connect=mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("�� ���� ������������ � �� MySQL: " . mysql_error());
$select=mysql_select_db($mysql_db) or die("�� � ����� ������ �� �������: " . mysql_error());

/* ��������� ������� ������������ � ����� ������� � �� */
$query_login = mysql_query("SELECT * FROM `admin` WHERE `login` = '$login' LIMIT 0 , 30") or die(mysql_error());
$answer=mysql_num_rows($query_login);
if ($answer==0)
{
  ?><html>
         <head><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>������������ � ����� ������� � �� �� ������. ���������� ������ �����������.</p>
				<a href="/log.html" align='center'>������� � �����������</a>
			 </div>
		  </body>
   </html>
  <?php
  mysql_close($connect);
  exit;
}
/* ��������� ������������ ���� �����-������ */
$answer_pass=mysql_fetch_array($query_login);
if($answer_pass['password']!=$password)
  {
   ?><html>
         <head><title>Error</title></head>
		  <body>
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>������ ������ �� �����.</p>
				<a href="/log.html" align='center'>��������� �� ������� ��������</a>
			 </div>
		  </body>
   </html>
  <?php
    mysql_close($connect);
    exit; 
  }
?><html>
         <head><title>������ ������� ������������</title></head>
		  <body>
		  
		  
		  
		  
		     <div  align='center' style='background:white; width:600px; height:30 px;'>
		        <p align='center'>������ ������� ������������ <font color="red"><?php echo $answer_pass['login'];?></font></p>
                <br>				
			 </div>
			 
			 
			 
			 
			 
			 <h3 style="margin: 20px">�������� ������������</h3>
<div align="center" valign="center" style="background: white width: 40%; height: 66%; ">
	<form align="center" action="test.php" method="post">
		<p style="font-size:110%">
			<br>������� ������ ��������:<br><br>
			�������<br>
			<input type="text" name="q1" ><br><br>
			���<br>
			<input type="text" name="q2" ><br><br>
			��������<br>
			<input type="text" name="q3" ><br><br>
			���������� ������ (�������� ��� ��������)<br>
			<input type="number" name="q4" ><br><br>
			����� ��������<br>
			<input type="tel" name="q5" ><br><br>
			
			
			<br><h3>���� ������� �������� ����������� �������� ��������</h3><br><br>
			���������� [HB]<br>
			<input type="number" name="q6" ><br><br>
			���������� [RBC]<br>
			<input type="number" name="q7" ><br><br>
			������� ���������� [MCHC%]<br>
			<input type="number" name="q8" ><br><br>
			������������ [RLT]<br>
			<input type="number" name="q9" ><br><br>
			���������� [PLT]<br>
			<input type="number" name="q10" ><br><br>
			��� [ESR]<br>
			<input type="number" name="q11" ><br><br>
			��������� [WBC]<br>
			<input type="number" name="q12" ><br><br>
			�������������� [%]<br>
			<input type="number" name="q13" ><br><br>
			��������������� [%]<br>
			<input type="number" name="q14" ><br><br>
			��������� [EOS] <br>
			<input type="number" name="q15" ><br><br>
			�������� [BAS]<br>
			<input type="number" name="q16" ><br><br>
			��������� [LUM]<br>
			<input type="number" name="q17" ><br><br>
			�������� [MON]<br>
			<input type="number" name="q18" ><br><br>
			
			

			<input type="submit" style="margin-bottom:10px; font-size:110%" value="��������"></p>
	</form>
		  </body>
</html>

