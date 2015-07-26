<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("dbConn.inc.php");
session_start();
if(isset($_SESSION['username'])){
	$uID = isset($_POST['inputAccount'])?htmlspecialchars($_POST['inputAccount'],ENT_QUOTES):"";
	$cName = isset($_POST['inputCName'])?htmlspecialchars($_POST['inputCName'],ENT_QUOTES):"";
	$eName = isset($_POST['inputEName'])?htmlspecialchars($_POST['inputEName'],ENT_QUOTES):"";
	$uEmail = isset($_POST['inputEmail'])?htmlspecialchars($_POST['inputEmail'],ENT_QUOTES):"";
	$uPhone = isset($_POST['inputPhone'])?htmlspecialchars($_POST['inputPhone'],ENT_QUOTES):"";
	$uAddress = isset($_POST['inputAddress'])?htmlspecialchars($_POST['inputAddress'],ENT_QUOTES):"";
	$uPosit = isset($_POST['inputPosition'])?htmlspecialchars($_POST['inputPosition'],ENT_QUOTES):"";
	
	if(isset($uID) && isset($cName) && isset($eName) && isset($uEmail) && isset($uPhone) && isset($uAddress) && isset($uPosit)){
		$sql = "UPDATE user SET `userName`='$cName', `userEName`='$eName', `userEmail`='$uEmail',
		           `userPhone`='$uPhone', `userAddress`='$uAddress', `userPosition`= '$uPosit' WHERE `userID` = '$uID'";
		if(mysqli_query($conn, $sql)){
			echo '<h3 align=center>Update success!<h3>';
			echo '<meta http-equiv=REFRESH CONTENT=1;url=admMain.php>';
		}else{
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
}else{
	echo '<center><font color=red size=+3>You have no permission to read this page!</font></center>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
	exit();
}
?>
