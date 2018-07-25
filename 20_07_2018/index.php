<?php
if (isset($_POST['send'])){
    $requestData=[
        'name'=>'vadim',
        'message'=>'текст сообщения'
    ];

    $filePath='counter.txt';

    $data[]=$requestData;


 /*   $fp=fopen('counter.txt','a');
    //$myText="Эту строку необходимонам записать";

    $test=fwrite($fp, serialize($data));//запись в файл
   /* var_dump($_POST);
     if($test){
        echo $test;
        } else {
        echo 0;
    }
    fclose($fp);
    header('Location:'.'http://'.$_SERVER['HTTP_HOST'].'/20_07_2018/');*/
}
$myfile=fopen('counter.txt','r');
$messages= fread($myfile,filesize('counter.txt'));
fclose($myfile);

$arrayMessages=unserialize($messages);
echo "Name: $arrayMessages['name'] Message:$arrayMessages['mess']";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p>Name:<input type="text" name="name"></p>
    <p>Message:<input type="text" name="name"></p>
    <input type="submit" name="send" value="send">
</form>

</body>
</html>
