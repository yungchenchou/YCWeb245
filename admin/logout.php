<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php session_start(); 
//將session清空
unset($_SESSION['username']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>';
?>
