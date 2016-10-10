<?php
/**
 * Created by PhpStorm.
 * User: Serdenko1
 * Date: 10.10.2016
 * Time: 23:22
 */

$a = 15;
$b = 0;
$operator = '%';
switch ($operator):
    case '+':
        echo ($a+$b);
        break;
    case '-':
        echo ($a-$b);
        break;
    case '*':
        echo ($a*$b);
        break;
    case '/':
        if ($b==0) {
            echo "На 0 делить нельзя";
            break;
        } else{
            echo ($a/$b);
            break;}
    case '%':
        if ($b==0) {
            echo "На 0 делить нельзя";
            break;
        } else{
            echo ($a%$b);
            break;}
    default:
        echo "Неверный оператор";
endswitch
?>