<?php
include 'logics.php';

$corentAnswer=[4,9,7];
if ($corentAnswer[0]==$_SESSION['answerOne']
&& $corentAnswer[1]==$_SESSION['answerTwo']
&& $corentAnswer[2]==$_SESSION['answerThree']
){
    echo 'Тест пройден';
}

    else{
        echo 'Тест не пройден';
}

echo '<a href="/my_tests">Назад</a>';



?>

