<?php
$cookie_name = "LastAccess";

// 쿠키가 설정되어 있는지 확인
if (!isset($_COOKIE[$cookie_name])) {
    $last_access = 'unknown';
} else {
    $last_access = $_COOKIE[$cookie_name];
}

// 현재 시간을 포맷하여 출력
$current_time = date('Y/m/d h:i:s a', time());

// 쿠키에 현재 시간을 저장
setcookie($cookie_name, $current_time, time() + 3600); // 1시간 후 만료
?>
<html>
<body>
<hr><h3>Checking the last access time using cookie</h3><hr>
<p>Current time: <?php echo $current_time; ?></p>
<p>Last access time: <?php echo $last_access; ?></p>
</body>
</html>

