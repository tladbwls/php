<?php

$devide = "--------------------<br><br>";

function sayHello() {
    echo "Hello";
}

sayHello();

echo $devide;

function sum($a,$b) { //함수의 파라미터는 php변수화된 문자를 사용
 return $a + $b."<br>";
}

echo sum(5,8);

echo $devide;


function sumAll ($n) {
    $num = 1; //반복조건 초기화
    $sum = 0;
    while ($num <= $n) {
    $sum += $num;
    $num++;
}
return $sum;
}

echo sumAll (100);

// function sum($ddd) {
//     $num = 1; //반복조건 초기화
//     $sum = 0;
//     while ($num <= 100) {
//     $sum += $num;
//     $num++;
// };
// }

// echo $ddd;



// $num = 1; //반복조건 초기화
// $sum = 0;
// while ($num <= 100) {
//     $sum += $num;
//     $num++;
// }

// echo $sum;

?>