<?php

session_start();
// $_SESSION['userid'] = 'zipte';
unset($_SESSION['userid']);



?>


<p>넘어온 세션 : <?=$userid?>입니다</p>