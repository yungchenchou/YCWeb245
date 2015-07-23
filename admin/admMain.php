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
			<?php headerBanner(1); ?>
		</div>
		<div class="container">
			<h2 class="form-signin-heading">Current Data</h2>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="focusedInput" class="col-sm-4 control-label">Account</label>
					<div class="col-sm-4">
						<input class="form-control" name="inputAccount" id="focusedInput" type="text" value="<?php echo $row[0];?>">
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputCName" class="col-sm-4 control-label">姓名(中)<font color=red>*</font></label>
					<div class="col-sm-4">
						<input class="form-control" name="inputCName" id="inputCName" type="text" placeholder="ex: 王大頭" value="<?php echo $row[1];?>">
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputEName" class="col-sm-4 control-label">姓名(英)<font color=red>*</font></label>
					<div class="col-sm-4">
						<input class="form-control" name="inputEName" id="inputEName" type="text" placeholder="ex: 王大頭" value="<?php echo $row[2];?>">
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="col-sm-4 control-label">E-mail:<font color=red>*</font></label>
					<div class="col-sm-4">
						<input class="form-control" name="inputEmail" id="inputEmail" type="email" placeholder="ex: 王大頭" value="<?php echo $row[4];?>" required>
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputPhone" class="col-sm-4 control-label">Phone:<font color=red>*</font></label>
					<div class="col-sm-4">
						<input class="form-control" name="inputPhone" id="inputPhone" type="text" placeholder="ex: 0800-956956" value="<?php echo $row[5];?>" required>
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputAddress" class="col-sm-4 control-label">Address:<font color=red>*</font></label>
					<div class="col-sm-4">
						<input class="form-control" name="inputAddress" id="inputAddress" type="text" placeholder="ex: 台中市霧峰區柳豐路500號" value="<?php echo $row[6];?>" required>
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputPosition" class="col-sm-4 control-label">Position:<font color=red>*</font></label>
					<div class="col-sm-4">
						<select class="form-control" type="select" name="inputPosition" id="inputPosition">
							<option value="教授" <?php if($row[7]=="教授") echo "selected";?>>教授</option>
							<option value="副教授" <?php if($row[7]=="副教授") echo "selected";?>>副教授</option>
							<option value="助理教授" <?php if($row[7]=="助理教授") echo "selected";?>>助理教授</option>
						</select>
						
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<div class="col-sm-5"></div>
					<div class="col-sm-2">
						<button class="btn btn-lg btn-primary btn-block" type="submit">修改</button>
					</div>
					<div class="col-sm-5"></div>
				</div>
                
			</form>
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
