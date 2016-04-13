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
        
         
         echo "<br><br> <a href='index.php'>Назад</a></form></div></body></html>";

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
    
    
    <p align='left'>Результат Ваших анализов <font color="red"><?php echo $answer_pass['id'];?></font></p>
    
    
    <table border="1">
               
    
    
    <?php
    
    
    
    $query = "SELECT * FROM `users` WHERE `Паспортные данные` = '".$pass."'";
    $users = mysql_query($query)or die(mysql_error());
    while($all_users=mysql_fetch_array($users))
    {
     echo "<tr><td>".$all_users['id']."</td><td>".$all_users['Фамилия']."</td><td>".$all_users['Имя']."</td><td>".$all_users['Отчество']."</td><td>".$all_users['Паспортные данные']."</td><td>".$all_users['Номер телефона']."</td><tr>";
     
    echo "<tr><td>Общий анализ крови: </td><td>Результат</td><td>Норма</td></tr>";
     echo "<tr><td>Гемоглобин Hb: </td><td>".$all_users['Гемоглобин Hb']."</td><td>130-160</td></tr>";
     echo "<tr><td>Эритроциты RBC: </td><td>".$all_users['Эритроциты RBC']."</td><td>3-5</td></tr>";
	echo "<tr><td>Цветовой показатель: </td><td>".$all_users['Цветовой показатель MCHC, %']."</td><td>0-2</td></tr>";

echo "<tr><td>Ретикулоциты RTC: </td><td>".$all_users['Ретикулоциты RTC']."</td><td>0-1</td></tr>";
echo "<tr><td>Тромбоциты PLT: </td><td>".$all_users['Тромбоциты PLT']."</td><td>180-360</td></tr>";
echo "<tr><td>СОЭ ESR: </td><td>".$all_users['СОЭ ESR']."</td><td>1-10</td></tr>";
echo "<tr><td>Лейкоциты WBC, %: </td><td>".$all_users['Лейкоциты WBC, %']."</td><td>4-9</td></tr>";

echo "<tr><td>Палочкоядерные, %: </td><td>".$all_users['Палочкоядерные, %']."</td><td>1-4</td></tr>";
echo "<tr><td>Сегментоядерные, %: </td><td>".$all_users['Сегментоядерные, %']."</td><td>47-72</td></tr>";

echo "<tr><td>Эозинофилы EOS, %: </td><td>".$all_users['Эозинофилы EOS, %']."</td><td>0-5</td></tr>";
echo "<tr><td>Базофилы BAS, %: </td><td>".$all_users['Базофилы BAS, %']."</td><td>0-1</td></tr>";
echo "<tr><td>Лимфоциты LYM, %: </td><td>".$all_users['Лимфоциты LYM, %']."</td><td>18-40</td></tr>";
echo "<tr><td>Моноциты MON, %: </td><td>".$all_users['Моноциты MON, %']."</td><td>2-9</td></tr>";

    }


}
}

?>
