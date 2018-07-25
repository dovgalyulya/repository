<?php
//задача1
$name='Yuliya';
$age=31;
echo "Меня зовут:$name<br>";
echo "Мне $age год<br>";

//задача2
define("pi",3.14,true);
if (defined("PI")==true) echo "значение константы =3,14!<br>";

//задача3
$age=60;
if ($age >= 18 and $age <= 59) {
echo "Вам ещё работать и работать<br>";

}
elseif ($age >= 1 and $age < 18) {
echo "Вам ещё рано работать<br>";
}
elseif ($age >= 59) {
    echo "Вам пора на пенсию<br>";
}

// задача4
$day=8;
    switch ($day) {
        case $day>=1 and $day<=5:
            echo "Это рабочий день<br>";
            break;
        case 6 and 7:
            echo "Это выходной день<br>";
            break;
        case $day >=8:
            echo "неизвестный день<br>";
            break;
    }



//задача5
for($i = 0;$i < 10000; $i++){
    if(strpos($i , 3) and $a % 5 !== 0 ){
        echo $i . "<br>";
    }
}


//задача6

$num=(isset($_COOKIE["num"]))? $_COOKIE["num"]:0;
$num++;
//setcookie("num",$num,time()+3600*24);
echo $num;

$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : '0';
setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31);
echo $last;

//задача7
session_start();
if($_POST['name']){
    $_SESSION['name']=$_POST['name'];
}
var_dump($_SESSION);
if($_SESSION['name']){
    echo "привет".$_SESSION[name];
}

//задача8
$filename='test.txt';
$array=['name' => 'Yuliya', 'age' => '31'];
//$fp=fopen'test.txt';
fwrite($fp, $array);
fclose($fp);
echo$filename;



