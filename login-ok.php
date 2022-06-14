<?php
  session_start();
  $session_username = $_SESSION[ 'username' ];
  if ( is_null( $session_username ) ) {
    header( 'Location: login.php' );
  }
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>로그인</title>
    <style>
      body { font-family: sans-serif; font-size: 14px; }
      input, button { font-family: inherit; font-size: inherit; }
    </style>
  </head>
  <body>
    <h1><?php echo $session_username; ?>님, 로그인 하셨습니다.</h1>
    <a href="logout.php">로그아웃</a>
    <br>
    <a href="/index.html"> 메인으로 돌아가기 </a>
  </body>
</html>
