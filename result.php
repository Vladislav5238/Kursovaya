<?php

$fam=$_POST["q1"];
$im=$_POST["q2"];
$ot=$_POST["q3"];
$pass=$_POST["q4"];
$ntel=$_POST["q5"];


if ($fam=='' or $im=='' or $ot=='' or $pass=='' or $ntel=='')
        {
        echo "<html><head><title>Error</title></head><body><div align='center' valign='center'><form  align='center' style='width:200px; height:50 px;'";
         echo ">"."<p align='center'>Заполните поля ";
         if ($fam=='') echo "Фамилия, ";
         if ($im=='') echo "Имя, ";
         if ($ot=='') echo "Отчество, ";
         if ($pass=='') echo "Паспортные данные, ";
         if ($ntel=='') echo "Номер телефона, ";
		
		 
         echo "<br><br> <a href='index.html'>Вернуться назад</a></form></div></body></html>";

         echo "<script>alert(\"Вы заполнили не все поля!\");</script>";

}
else{

$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='bd_med';
$connect= mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select= mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());

{
    ?>
	
	
	<p align='left'>Данные анализа пациента <font color="red"><?php echo $answer_pass['id'];?></font></p>
	
	
	<table border="1">
				  <tr>
        <td></td>
        <td>результат</td>
        <td>норма</td>
    </tr>
    <tr>
        <td>гемоглобин</td>
        <td></td>
        <td>130-160</td>
    </tr>
    <tr>
        <td>эритроциты</td>
        <td></td>
        <td>3,8-5,0</td>
    </tr>
    <tr>
        <td>цветовой показатель</td>
        <td></td>
        <td>0,85-1,15</td>
    </tr>
    <tr>
        <td>ретикулоциты</td>
        <td></td>
        <td>0,2-1,2</td>
    </tr>
    <tr>
        <td>тромбоциты</td>
        <td></td>
        <td>180-360</td>
    </tr>
    <tr>
        <td>соэ</td>
        <td></td>
        <td>1-10</td>
    </tr>
    <tr>
        <td>лейкоциты</td>
        <td></td>
        <td>4-9</td>
    </tr>
    <tr>
        <td>палочкоядерные</td>
        <td></td>
        <td>1-4</td>
    </tr>
    <tr>
        <td>сегментоядерные</td>
        <td></td>
        <td>47-72</td>
    </tr>
    <tr>
        <td>эозинофилы</td>
        <td></td>
        <td>0-5</td>
    </tr>
    <tr>
        <td>базофилы</td>
        <td></td>
        <td>0-1</td>
    </tr>
    <tr>
        <td>лимфоциты</td>
        <td></td>
        <td>18-40</td>
    </tr>
    <tr>
        <td>моноциты</td>
        <td></td>
        <td>2-9</td>
    </tr>
	
	
	<?php
	
	
	
	$query = "SELECT * FROM `users`";
$users = mysql_query($query)or die(mysql_error());
while($all_users=mysql_fetch_array($users))
{
 echo "<tr><td>".$all_users['id']."</td><td>".$all_users['Фамилия']."</td><td>".$all_users['Имя']."</td><td>".$all_users['Отчество']."</td><td>".$all_users['Паспортные данные']."</td><td>".$all_users['Номер телефона']."</td><tr>";
}


}
}
?>
