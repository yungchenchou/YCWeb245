<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbConn.inc.php");
session_start();
$uID = isset($_POST['uid'])?htmlspecialchars($_POST['uid'],ENT_QUOTES):"";
$uPW = isset($_POST['inputPW'])?md5(htmlspecialchars($_POST['inputPW'],ENT_QUOTES)):"";
$sql = "SELECT * FROM user WHERE `userID` = '".$uID."';";

$rs = mysqli_query($conn, $sql);
if($rs != null){
	$rowCount = mysqli_num_rows($rs);
	$row = $rs->fetch_row();
	if($rowCount == 1  &&  $uPW == $row[3]){
		$_SESSION['username'] = $uID;
		echo '<h3 align=center>Login success!<h3>';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=admMain.php>';
	}else{
		echo "<center>Incorrect user name or password!!<br/>";
		echo "Returen to <a href=\"login.html\">login</a> page!</center>";
		echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';
		exit();
	}
}else{
	echo "<center>Incorrect user name or password!!<br/>";
	echo "Returen to <a href=\"login.html\">login</a> page!</center>";
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';
	exit();
}
?>
