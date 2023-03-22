<?php
//設問１
$number = 5;
$text = "ああああ";
$flag = true;
$test = null;
//var_dump($number, $text, $flag, $test);

//設問２
echo $number, $text, $flag, $test, "\n";

//設問３
$number1 = 10;
$number2 = 5;

$addition = $number1 + $number2;
$subtract = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
$residueCalculation = $number1 % $number2;
echo $addition, $subtract, $multiplication, $division, $residueCalculation, "\n";

//設問４
$time1 = time();
if ($time1 / 2 === 0) {
    echo "偶数です", "\n";
} else {
    echo "奇数です", "\n";
}

//設問５
$time2 = time();
switch ($time2) {
    case $time2 / 2 === 0:
        echo "偶数です", "\n";
        break;
    default:
        echo "奇数です", "\n";
        break;  
}

//設問６
for ($i =1; $i <= 10; $i++){
    echo $i;
}

echo "\n";

//設問７
for ($i =3; $i < 100; $i+= 3){
    echo $i , "";
}

echo "\n";

//設問８
for( $i = 1000; $i <= 2000; $i++){
    if ($i % 10 === 7){
        echo $i; break;
    }
}

echo "\n";

//設問９
for( $i = 1; $i <= 1; $i++){
    echo 0, "\n";
}

for( $i = 1; $i <= 2; $i++){
    echo 0;
}

echo "\n";

for( $i = 1; $i <= 3; $i++){
    echo 0;
}

echo "\n";

//設問１０
$numberList = [1,2,3];

//設問１１
$numberList[3] = 4;

//設問１２
echo $numberList[0],"\n";

//設問１３
$count = count($numberList);
for ($i = 0; $i < $count; $i++){
    echo $numberList[$i]. "";
}

echo "\n";

//設問１４
foreach ($numberList as $key => $value){
    echo $key . ":" . $value . "\n";
}


?>