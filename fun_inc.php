<?php
function MyCounter(){
    if (file_exists("_counter")){
        $fp=fopen("_counter","r+");
        $counter=fgets($fp);
	if(!isset($_SESSION["counted"])){
	    $counter++;
	    $_SESSION["counted"] = 1;
	    fseek($fp, 0);
	    fputs($fp, $counter);
	}
	fclose($fp);
    }else{
	$fp = fopen("_counter", "w");
    	$counter=32893;
	fputs($fp, $counter);
	fclose($fp);
    }
    //echo "<font color=#780B0B>".$counter."</font>";
    echo "<font color=#ffff00>".$counter."</font>";
}

function MyCounter1(){
	if (file_exists("_counter")){
		$fp=fopen("_counter","r+");
		$counter=fgets($fp);
		if(!isset($_SESSION["counted"])){
			$counter++;
			$_SESSION["counted"] = 0;
		}
		fseek($fp,0);
		fputs($fp,$counter);
		fclose($fp);
		echo "Check point 1";
	}else{
		$fp=fopen("_counter","w");
		if(!empty($fp)){
			echo "yes!!    ".$fp;
		}else{
			echo ">_<";
		}
		$counter=29300;
		fputs($fp,$counter);
		fclose($fp);
	}
	echo "<font color=#780B0B>".$counter."</font>";
}

function footering(){
?>
	<div class='container'>
		<div style="width: 100%; background-color: #1995dc; padding: 0.8em; color: white; font-family: '微軟正黑體';">	
			<p style="text-align: center; font-size: 1.4em;">您是自 2010 年 5 月以來 第  <?php MyCounter();?> 位 參觀本站的訪客 <br/>
			現在時間: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span></p>
		</div>
	</div>
<?php 
}

function headerBanner($flag){
	?>
	      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
 
			<a class="navbar-brand" href="#">璞學草堂</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php if($flag == 1) echo "class=\"active\"";?>><a href="index.php">首頁</a></li>
              <li <?php if($flag == 2) echo "class=\"active\"";?>><a href="vita.php">簡歷</a></li>
              <li <?php if($flag == 3) echo "class=\"active\"";?>><a href="acdmActivites.php">學術活動</a></li>
			<li <?php if($flag == 4) echo "class=\"active\"";?> class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">著作
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">國際期刊</a></li>
                  <li><a href="#">國際研討會</a></li>
                  <li><a href="#">專書論文</a></li>
                  <li><a href="#">國內期刊</a></li>
                  <li><a href="#">國內研討會</a></li>
                  <li><a href="#">其他 </a></li>
                </ul>
              </li>
			<li <?php if($flag == 5) echo "class=\"active\"";?> class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">教學
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">研究所</a></li>
                  <li><a href="#">大學部</a></li>
                </ul>
              </li>
			<li <?php if($flag == 6) echo "class=\"active\"";?> class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">徒弟
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">博士生</a></li>
                  <li><a href="#">碩士生</a></li>
                  <li><a href="#">大學部專題</a></li>
                </ul>
              </li>
              <li <?php if($flag == 7) echo "class=\"active\"";?>><a href="favLink.php">有用連結</a></li>
              <li><a href="http://120.108.117.245/dokuwiki/">傑克讀庫</a></li>
              <li><a href="http://120.108.117.245/~jackjow/wordpress">璞學部落</a></li>
              <li><a href="http://120.108.117.245/~jackjow/wordpress">璞學部落</a></li>
              </ul>
            <ul class="nav navbar-nav navbar-right">
        		<li><a href="adm/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      		</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	<?php 
}

function sideNavEng($flag){
	echo "  <div id='sideNav'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='eIndex.php'>Home</a></li>";
	echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='eVita.php'>Vita</a></li>";
	echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='eActivities.php'>Activities</a></li>";
	echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='ePubList.php'>Publications</a></li>";
	echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='eCourses.php'>Courses</a></li>";
	echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='eStudents.php'>Students</a></li>";
	echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='eFavLink.php'>Hot links</a></li>";
	echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>Jack Wiki</a></li>";
	echo	"<li "; if ($flag == 9) echo "id='active'"; echo "><a href='index.php'>中文</a></li>
			</ul>
			<center><img src='Images/RLO742SLFQ.png'></center>
		</div>";
}

// PHP 日曆 http://pink0420.pixnet.net/blog/post/4795571
function calender(){
	$year = date("Y");
	$month = date("m");
	$day = date("d");
	$lastday = date("d",mktime (0,0,0,$month+1,0,$year));//本月最後一天
	$firstweek = date("D",mktime (0,0,0,$month,1,$year));//本月第一天星期幾
	$last_month_day = date("d",mktime (0,0,0,$month,0,$year));//上個月最後一天
	$week["Sun"] = 0;
	$week["Mon"] = 1;
	$week["Tue"] = 2;
	$week["Wed"] = 3;
	$week["Thu"] = 4;
	$week["Fri"] = 5;
	$week["Sat"] = 6;

	$first_day = $week[$firstweek];
	$next_month_day =1;
	$run7 = 1;
	$weekNum = ceil(($lastday-7+ $first_day)/7);
	$lasMonthRemain = $last_month_day - $first_day + 1;
	echo "<table align=center>
	<tr>
	<td colspan=7 align=center><b>{$year}-{$month}</b></td>
	</tr>
	<tr>
		<td>Sun</td>
		<td>Mon</td>
		<td>Tue</td>
		<td>Wed</td>
		<td>Thu</td>
		<td>Fri</td>
		<td>Sat</td>
		</tr>
		<tr>";
		$j=1;
		if($first_day != 0){
		for($i=$lasMonthRemain ; $i <= $last_month_day; $i++){
		echo "<td align=center><font color=#666666>".$i."</font></td>";
}
for($i=$first_day ; $i < 7; $i++){
if($j == $day){
			echo "<td align=center><font color=#FF2255>".$j."</font></td>";
			}else{
			echo "<td align=center><font color=#0000CC>".$j."</font></td>";
			}
			$j++;
		}
		echo "</tr><tr>";
		}
		$flag = 0;
			if($j==1)  $weekNum++;
				for($i = 0 ; $i < $weekNum ; $i++){
        for($k=0 ; $k < 7; $k++){
				if($flag == 0){
					if($j == $day){
                    echo "<td align=center><font color=#FF2255>".$j."</font></td>";
		}else{
		echo "<td align=center><font color=#0000CC>".$j."</font></td>";
}
}else{
echo "<td align=center><font color=#666666>".$j."</font></td>";
}
	$j++;
	if($j > $lastday){
		$j = 1;
			$flag = 1;
		}
		}
		if($i == ($weekNum-1)){
            echo "</tr>";
		}else{
		echo "</tr><tr>";
	}
	}
		echo "</table>";
	}
?>
