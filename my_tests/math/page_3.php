<?php
include 'logics.php';
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
<form action="/my_tests/math/result.php" method="post">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="3">
    <p>5+2=?</p>
    <input type="text" name="answer">
    <input type="submit" value="send" name="send">

</body>
</html>
