<?php

    //세션을 만들기 위해서는 먼저 session_start()를 작성한다.
    // session_start()는 워쪽에 어떠한 php 코드도 있어서는 안된다. 즉, php문서의 가장 위에 작성한다.
    session_start();
    $_SESSION['user'] = 'zipte';

    echo "
        <script>
        location.href='/php_lecture/index.php';
        </script>
    ";

?>