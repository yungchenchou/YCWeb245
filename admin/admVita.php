<!DOCTYPE html> 
<?php  include("adm_fun_inc.php");
include("dbConn.inc.php");
session_start();  
if(isset($_SESSION['username'])){
	$uID = $_SESSION['username'];
	$sql = "SELECT * FROM user WHERE userID = '$uID'";
	$rs = mysqli_query($conn,$sql);
	$row = $rs->fetch_row();
?>
<html>
	<head>
		<meta charest="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jack's Admin System</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">      
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="../Images/jack.png">
	</head>
	<body>
    	<div class="container">
			<?php headerBanner(2); ?>
		</div>
		<div class="container">
			<h2 class="form-signin-heading">簡歷資料維護 </h2>
			<div class="row">
				<div class="col-sm-2">
					<ul id="miSider">
						<li class="panel" ><a data-toggle="collapse" data-parent="#miSider" href="#" >
							<span style="font-size: 1.5em;">研究計畫</span></a></li>
						<li class="panel"><a data-toggle="collapse" data-parent="#miSider" href="#">
							<span style="font-size: 1.5em;">產學計畫</span></a></li>
						<li class="panel"><a data-toggle="collapse" data-parent="#miSider" href="#">
							<span style="font-size: 1.5em;">演講</span></a></li>
					</ul>
				</div>
				<div class="col-sm-10" style="background-color: green;color:white;">bb</div>
			</div>
		</div>
        <?php footering();?>
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="../bootstrap/js/bootstrap.min.js"></script>
	    <script src="../bootstrap/js/docs.min.js"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
<?php
}else{
	echo '<center><font color=red size=+3>You have no permission to read this page!</font></center>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>
