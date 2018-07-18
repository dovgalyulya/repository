<?php

$array=[1,5,7,8,-9,3];
$result=array_filter($array, function($item){

    if($item>3 && ($item%2)){
        return true;
    }

}
);
var_dump($result); die;


/*$array=['vadim','max'];
array_walk($array, function(&$value){
    $value='Hello '.$value;
});
var_dump($array);*/


/*$array=[1,2,3,-4,5,-6];
array_walk($array, function(&$value){
$value=$value+10;
});
var_dump($array);
*/


/*$result=array_filter($array, function($item){

    if($item>0 && !($item%2)){
        return true;
    }

}
);
var_dump($result); die; */


/*
//1. вызов функции
$positiveNumbers=getPositivNumbers($array,function ($items){
    //5.попали в кол бек функцию
$result=[];
//6.формируем массив с четными числами
foreach ($items as $item){
    if (!($item%2)){
        $result[]=$item;
    }
}
//7.возвращаем результат
    return $result;
});
function getPositivNumbers(array $array, callable $callback=NULL){
    //2.попадаем сюда
    $result=[];
    //3.фильтруем:только положительные числа
    foreach ($array as $value){
        if ($value>0){
            $result[]=$value;

        }
    }
    //проверяем наличие обратного вызова
    if($callback{
        call_user_func($callback, $result)
    })
    return $result;
}
*/