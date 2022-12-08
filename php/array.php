<?php

 $arr = [1,2,3,4,5, 'stringㅇㅇㅇ'];
 echo $arr."<br>";
 echo 'string';
 echo var_dump($arr)."<br>"; //배열의 내부로직을 리턴한다. 
 echo count ($arr)."<br>"; //자바스크립트의 length와 같은 역할을 한다. 
 echo $arr[3];

//배열에 여러 값을 한꺼번에 삽입하는 함수 : array_push(배열이름, [값,...]);

$country = array();
array_push($country,"korea","japan","china");
echo var_dump($country)."<br>"; //향수 json 문자열을 리턴할 때 자주 사용할 것

$fruit_json = json_encode(array('f1' => 'apple', 'f2' => 'banana'));
$fruit = array('f1' => 'apple', 'f2' => 'banana');
echo var_dump($fruit); //배열의 인덱스 이름을 지저할 수 있다.
echo var_dump($fruit_json)."<br>"; 
?>