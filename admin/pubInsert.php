<!DOCTYPE html> 
<?php  include("adm_fun_inc.php");
session_start();  
if(isset($_SESSION['username'])){
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
		<script>
			function add_new_data() {
				 //先取得目前的row數
				 var num = document.getElementById("mytable").rows.length;
				 //建立新的tr 因為是從0開始算 所以目前的row數剛好為目前要增加的第幾個tr
				 var Tr = document.getElementById("mytable").insertRow(num);
				 //建立新的td 而Tr.cells.length就是這個tr目前的td數
				 Td = Tr.insertCell(Tr.cells.length);
				 //而這個就是要填入td中的innerHTML
				 Td.innerHTML='<input name="seq[]" type="text" size="6">';
				 //這裡也可以用不同的變數來辨別不同的td (我是用同一個比較省事XD)
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="name[]" type="text" size="30">';
				 //這樣就好囉 記得td數目要一樣 不然會亂掉~
				 Td = Tr.insertCell(Tr.cells.length);
				 Td.innerHTML='<input name="communAuth[]" type="checkbox">';
			}
			function remove_data() {
				//先取得目前的row數
				var num = document.getElementById("mytable").rows.length;
				//防止把標題跟原本的第一個刪除XD
				if(num >2) {
					//刪除最後一個
					document.getElementById("mytable").deleteRow(-1);
				}
			}
		</script>
	</head>
	<body>
    	<div class="container">
			<?php headerBanner(4); ?>
		</div>
		<div class="container">
			<h1>新增著作資料</h1>
			<form class="form-horizontal" role="form" method="post" action="pubInsertAction.php">
				<div class="form-group">
					<label for="inputType" class="col-sm-2 control-label">Paper type:<font color=red>*</font></label>
					<div class="col-sm-3">
						<select class="form-control" type="select" name="inputType" id="inputType">
							<option value="IJ" selected>International Journal</option>
							<option value="IC">International Conference</option>
							<option value="BC">Book Chapter</option>
							<option value="LJ">Local Journal</option>
							<option value="LC">Local Conference</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="col-sm-3"></div>
				</div>
				<div class="form-group">
					<label for="inputTitle" class="col-sm-2 control-label">Paper title<font color=red>*</font></label>
					<div class="col-sm-8">
						<input class="form-control" name="inputTitle" id="inputTitle" type="text" placeholder="Paper title" required>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<div class="form-group">
					<label for="inputSource" class="col-sm-2 control-label">Source<font color=red>*</font></label>
					<div class="col-sm-8">
						<input class="form-control" name="inputSource" id="inputSource" type="text" placeholder="Source" required>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<div class="form-group">
					<label for="inputVol" class="col-sm-2 control-label">Volumn</label>
					<div class="col-sm-2">
						<input class="form-control" name="inputVol" id="inputVol" type="text" placeholder="Volumn">
					</div>
					<label for="inputIssue" class="col-sm-1 control-label">Issue</label>
					<div class="col-sm-2">
						<input class="form-control" name="inputIssue" id="inputIssue" type="text" placeholder="Issue">
					</div>
					<label for="inputPages" class="col-sm-1 control-label">Pages<font color=red>*</font></label>
					<div class="col-sm-2">
						<input class="form-control" name="inputPages" id="inputPages" type="text" placeholder="Pages" required>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<div class="form-group">
					<label for="inputLocation" class="col-sm-2 control-label">Location</label>
					<div class="col-sm-3">
						<input class="form-control" name="inputLocation" id="inputLocation" type="text" placeholder="Conference location">
					</div>
					<label for="inputMonth" class="col-sm-1 control-label">Month</label>
					<div class="col-sm-1">
						<select class="form-control" type="select" id="inputMonth" name="inputMonth">
<?php 
							for($i=1;$i<=12;$i++){
								echo "<option value='$i'>$i</option>";
							}
?>
						</select>
					</div>
					<label for="inputYear" class="col-sm-1 control-label">Year<font color=red>*</font></label>
					<div class="col-sm-2">
						<select class="form-control" type="select" id="inputYear" name="inputYear" required>
<?php
							$a = date("Y");
							$b = $a - 15;
							for($i=$a;$i>$b;$i--){
								echo "<option value='$i'>$i</option>";
							}
?>
						</select>
					</div>
					<div class="col-sm-2"></div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<h3 style="color: yellow; text-shadow: 1px 1px white;">Authors:</h3>            
						<table class="table table-striped" id="mytable" width="50%">
							<thead>
								<tr>
									<th>順序</th>
									<th>作者名</th>
									<th>通訊作者</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input name="seq[]" type="text" size="6"></td>
									<td><input name="name[]" type="text" size="30"></td>
									<td><input name="communAuth[]" type="checkbox"></td>
								</tr>
							</tbody>
						</table>
						<input type="button" value="增加" onclick="add_new_data()">
						<input type="button" value="減少" onclick="remove_data()">
					</div>
					<div class="col-sm-2"></div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-5"></div>
					<div class="col-sm-2">
						<button class="btn btn-lg btn-primary btn-block" type="submit">新增</button>
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
