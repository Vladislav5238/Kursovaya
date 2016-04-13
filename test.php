<?php

$fam=$_POST["q1"];
$im=$_POST["q2"];
$ot=$_POST["q3"];
$pass=$_POST["q4"];
$ntel=$_POST["q5"];
$hb=$_POST["q6"];
$rbc=$_POST["q7"];
$mchc=$_POST["q8"];
$rtc=$_POST["q9"];
$plt=$_POST["q10"];
$esr=$_POST["q11"];
$wbc=$_POST["q12"];
$pal=$_POST["q13"];
$seg=$_POST["q14"];
$eos=$_POST["q15"];
$bas=$_POST["q16"];
$lym=$_POST["q17"];
$mon=$_POST["q18"];



if ($fam=='' or $im=='' or $ot=='' or $pass=='' or $ntel=='')
        {
        echo "<html><head><title>Error</title></head><body><div align='center' valign='center'><form  align='center' style='width:200px; height:50 px;'";
         echo ">"."<p align='center'>Заполните поля ";
         if ($fam=='') echo "Фамилия, ";
         if ($im=='') echo "Имя, ";
         if ($ot=='') echo "Отчество, ";
         if ($pass=='') echo "Паспортные данные, ";
         if ($ntel=='') echo "Номер телефона, ";
		 if ($hb=='') echo "Гемоглобин Hb, ";
		 if ($rbc=='') echo "Эритроциты RBC, ";
		 if ($mchc=='') echo "Цветовой показатель MCHC,%, ";
		 if ($rtc=='') echo "Ретикулоциты RTC, ";
		 if ($plt=='') echo "Тромбоциты PLT, ";
		 if ($esr=='') echo "СОЭ ESR, ";
		 if ($wbc=='') echo "Лейкоциты WBC, %, ";
		 if ($pal=='') echo "Палочкоядерные, %, ";
		 if ($seg=='') echo "Сегментоядерные, %, ";
		 if ($eos=='') echo "Эозинофилы EOS, %, ";
		 if ($bas=='') echo "Базофилы BAS, %, ";
		 if ($lym=='') echo "Лимфоциты LYM, %, ";
		 if ($mon=='') echo "Моноциты MON, %, ";
		 
         echo "<br><br> <a href='enter.php'>Вернуться назад</a></form></div></body></html>";

         echo "<script>alert(\"Вы заполнили не все поля!\");</script>";

}
else{



$mysql_login='root';
$mysql_host='localhost';
$mysql_pass='';
$mysql_db='bd_med';
$connect= mysql_connect($mysql_host,$mysql_login,$mysql_pass) or die("Не могу подключиться к БД MySQL: " . mysql_error());
$select= mysql_select_db($mysql_db) or die("БД с таким именем не найдена: " . mysql_error());

$query_pass = mysql_query("SELECT * FROM `users` WHERE `Паспортные данные` = '$pass' LIMIT 0 , 30") or die(mysql_error());
$answer=mysql_num_rows($query_pass);
if ($answer>0)
{
    ?><html>
<head><title>Error</title></head>
<body>
<div  align='center' style='background:white; width:600px; height:30 px;'>
    <p align='center'>Пользователь с такими паспортными данными уже зарегистрирован</p>
    <a href="index.html" align='center'>Назад к заполнению</a>
</div>
</body>
</html>
    <?php
    mysql_close($connect);
    exit;
}

$add_user="INSERT INTO `bd_med`.`users` (`id`, `Фамилия`, `Имя`, `Отчество`, `Паспортные данные`, `Номер телефона`, `Гемоглобин Hb`, `Эритроциты RBC`, `Цветовой показатель MCHC, %`, `Ретикулоциты RTC`, `Тромбоциты PLT`, `СОЭ ESR`, `Лейкоциты WBC, %`, `Палочкоядерные, %`, `Сегментоядерные, %`, `Эозинофилы EOS, %`, `Базофилы BAS, %`, `Лимфоциты LYM, %`, `Моноциты MON, %`) VALUES ('', '$fam', '$im', '$ot', '$pass', '$ntel', '$hb','$rbc','$mchc','$rtc','$plt','$esr','$wbc','$pal','$seg','$eos','$bas','$lym','$mon')";
$insert = mysql_query($add_user) or die(mysql_error());


if (!$insert)
{
    ?><html>
<head><title>Error</title></head>
<body>
<div  align='center' style='background:white; width:600px; height:30 px;'>
    <p align='center'>Пользователя не добавить, запрос не сработал</p>
    <a href="index.html" align='center'>Назад к заполнению</a>
</div>
</body>
</html>
    <?php
    mysql_close($connect);
    exit;
}
else
{
    ?><html>
<head><title>Успешная регистрация</title></head>
<body>
<div  align='center' style='background:white; width:600px; height:30 px;'>
    <p align='center'>Поздравляем с успешной регистрацией</p>
</div>
</body>
</html>
    <?php
    mysql_close($connect);
    exit;
}

}
?>
