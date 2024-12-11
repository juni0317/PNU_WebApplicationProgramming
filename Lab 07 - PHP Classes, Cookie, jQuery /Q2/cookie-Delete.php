<?php
$cookie_name = "LastAccess";

// 쿠키를 삭제하기 위해 만료 시간을 과거로 설정
setcookie($cookie_name, '', time() - 3600); // 1시간 전으로 설정

echo "Cookie delete for \$_COOKIE[" . $cookie_name . "] is done";
?>

