<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$fp=fopen("dbConn.cnf","r");
$dbServer = fgets($fp);
$dbName = fgets($fp);
$dbUser = fgets($fp);
$dbUPW = fgets($fp);
fclose($fp);
//資料庫設定
//資料庫位置
//$db_server = "localhost";
//資料庫名稱
//$db_name = "mydb";
//資料庫管理者帳號
//$db_user = "root";
//資料庫管理者密碼
//$db_passwd = "1234";

//對資料庫連線
if(!@mysql_connect($dbServer, $dbUser, $dbUPW))
        die("無法對資料庫連線 (Can not establish DB connection!!)");
//資料庫連線採UTF8
mysql_query("SET NAMES utf8");
//選擇資料庫
if(!@mysql_select_db($dbName))
        die("無法使用資料庫  (Can not use Database!!)");
?> 