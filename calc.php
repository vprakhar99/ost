<?php
$a = 6;
$b = 2;
$x = '/';

switch ($x){
    case '+': echo $a+$b;
    break;
    case '-': echo $a-$b;
    break;
    case '*': echo $a*$b;
    break; 
    case '/': echo $a/$b;
    break;

    default: echo "Wrong input!";
}

?>