<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 08.10.2016
 * Time: 20:34
 */
$name = 'Евгения';
$age = 30;

if ($age >= 18 && $age <= 59){
    $phrase = 'Вам еще работать и работать';
}
else {
    $phrase = '';
}
echo "$phrase <br>";