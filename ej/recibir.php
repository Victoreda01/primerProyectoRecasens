<?php
$op1=$_POST['num1'];
$op2 =$_POST['num2'];

if (isset($_POST['Suma'])) {
echo $op1.' + '.$op2.' = '.($op1+$op2);
}elseif (isset($_POST['Resta'])) {
echo $op1.' - '.$op2.' = '.($op1-$op2);
}elseif (isset($_POST['Multi'])) {
echo $op1.' * '.$op2.' = '.($op1*$op2);
}elseif (isset($_POST['Div'])) {
echo $op1.' / '.$op2.' = '.($op1/$op2);
}
?>