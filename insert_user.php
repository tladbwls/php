<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert User</title>
</head>
<body>
    <!-- 
    - get : 요청 데이터를 주소의 파라미터로 전달하는 방식
    - 데이터가 주소창에 보이브로 보안에 좋지 않아 사용자 정보 같은 데이터 전달은 적합하지 않다.
    - 주로 조회 요청에 사용된다. 
    - form 태그에 method는 적지 않으면 get 방식이 된다. -->

    <!-- 
    - post : 요청 데이터를 주소의 바디에 달아서 전달하는 방식
    - 데이터가 주소창에 보이지 않고, 대량의 데이터를 전달할 때 적합함.
    - 주로 데이터 입력 시 사용된다. 
    - form 태그에 method는 post의 경우 직접 지정해야 한다. -->

    <!-- 요청 헤더와 바디:https://blueyikim.tistory.com/1999 -->
    <form action="/php_lecture/php/insert_user_data.php" method="POST" >
    이름:  <input type="text" name="name"><br>
    아이디: <input type="text" name="id"><br>
    이메일: <input type="email" name="email"><br>
    비밀번호: <input type="password" name="pwd"><br>
    <!-- 인풋의 타입이 submit인 경우 클릭했을 때 해당 버튼을 감싸고 있는 form의 action 주소로 경로를 이동시킨다. -->
    <input type="submit" value="제출">
    </form>

    <!-- 경로 참조 설명 : https://www.beusable.net/blog/?p=4507 
                        https://lkg3796.tistory.com/65-->

</body>
</html>

<!-- http://lodcalhost/php_lecture/php/insert_user_data.php?name=&id=&email=&pwd= -->