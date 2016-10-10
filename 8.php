<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 09.10.2016
 * Time: 14:23
 */

$name = 'Евгения';
$age = 'gjhghg';

if ($age >= 18 && $age <= 59){
    $phrase = 'Вам еще работать и работать';
}
elseif ($age < 0 || is_string($age )) {
    $phrase = 'Неизвестный возраст';
}
elseif ($age > 59) {
    $phrase = 'Вам пора на пенсию';
}
elseif ($age <= 17 && $age >= 0 ) {
    $phrase = 'Вам еще рано работать';
}
else {
    $phrase = '';
}
echo "$phrase <br>";