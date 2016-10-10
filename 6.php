<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 09.10.2016
 * Time: 9:36
 */
$name = 'Евгения';
$age = 60;

if ($age >= 18 && $age <= 59){
    $phrase = 'Вам еще работать и работать';
}
elseif ($age > 59) {
    $phrase = 'Вам пора на пенсию';
}
else {
    $phrase = '';
}
echo "$phrase <br>";