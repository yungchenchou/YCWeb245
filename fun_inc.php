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
    echo "<font color=#780B0B>".$counter."</font>";	
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
	<div id="footer">
		您是自2010年5月以來 第  <?php MyCounter();?> 位 參觀本站的訪客 <br/>
		現在時間: <span id="clock"><script type ="text/javascript" src="showTime.js"></script></span>
	</div>
<?php 
}

function headerBanner(){
	echo "<div id='header'></div>";
}

function mainMenu(){
	echo "<ul id='nav'>
				<li><a href='index.php'>首頁</a></li>
				<li><a href='vita.php'>簡歷</a></li>
				<li><a href='activities.php'>學術活動</a></li>
				<li><a href='pubList.php'>著作</a></li>
				<li><a href='courses.php'>授課</a></li>
				<li><a href='students.php'>徒弟</a></li>
				<li><a href='favLink.php'>有用連結</a></li>
				<li><a href='http://120.108.117.245/dokuwiki' target='_blank'>傑克讀酷</a></li>
				<li><a href='wordpress' target='_blank'>璞學草堂</a></li>
        		<li><a href='http://eplus.asia.edu.tw/accounts/1465/channels/173?locale=zh_tw' target='_blank'>社群學習站</a></li>
				<li><a href='https://120.108.116.237/~jackjow/login.html'>管理者</a></li>
				<li><a href='eIndex.php'>ENGLISH</a></li>
				<li><img source='Images/S69PEBHJO7.png'></li>
			</ul>";
}

function sideNav($flag){
	$ipTmp = 'http://120.108.117.245/~jackjow/';
	echo "  <div id='sideNav'>
			<ul>
				<li "; if ($flag == 1) echo "id='active'"; echo "><a href='".$ipTmp."'>首頁</a></li>";
	echo	"<li "; if ($flag == 2) echo "id='active'"; echo "><a href='".$ipTmp."vita.php'>簡歷</a></li>";
	echo	"<li "; if ($flag == 3) echo "id='active'"; echo "><a href='".$ipTmp."activities.php'>學術活動</a></li>";
	echo	"<li "; if ($flag == 4) echo "id='active'"; echo "><a href='".$ipTmp."pubList.php'>著作</a></li>";
	echo	"<li "; if ($flag == 5) echo "id='active'"; echo "><a href='".$ipTmp."courses.php'>授課</a>";
	echo	"<li "; if ($flag == 6) echo "id='active'"; echo "><a href='".$ipTmp."students.php'>徒弟</a></li>";
	echo	"<li "; if ($flag == 7) echo "id='active'"; echo "><a href='".$ipTmp."favLink.php'>有用連結</a></li>";
	echo	"<li "; if ($flag == 8) echo "id='active'"; echo "><a href='http://mslab.csie.asia.edu.tw/doku' target='_blank'>傑克獨酷</a></li>";
	echo	"<li "; if ($flag == 9) echo "id='active'"; echo "><a href='wordpress' target='_blank'>璞學草堂</a></li>";
	echo	"<li "; if ($flag == 12) echo "id='active'"; echo ">
						<a href='http://eplus.asia.edu.tw/accounts/1465/channels/173?locale=zh_tw' target='_blank'>社群學習站</a></li>";
	echo	"<li "; if ($flag == 10) echo "id='active'";
	echo "><a href='".$ipTmp."login.html'>管理者</a></li>";
	echo	"<li "; if ($flag == 11) echo "id='active'"; echo "><a href='".$ipTmp."eIndex.php'>ENGLISH</a></li>
			</ul>
			<div id='qrCode'></div>
		</div>";
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

function mainMenu_old(){
	echo "<!-- <ul>
            <li><a onclick=\"window.location='index.php'\" style=\"cursor:pointer\">首頁</a></li>
            <li><a onclick=\"window.location='vita.php'\" style=\"cursor:pointer\">簡歷</a></li>
            <li><a onclick=\"window.location='activities.php'\" style=\"cursor:pointer\">學術活動</a></li>
            <li><a onclick=\"window.location='pubList.php'\" style=\"cursor:pointer\">著作</a></li>
            <li><a onclick=\"window.location='courses.php'\" style=\"cursor:pointer\">授課</a></li>
            <li><a onclick=\"window.location='students.php'\" style=\"cursor:pointer\">徒弟</a></li>
            <li><a onclick=\"window.location='photos.html'\" style=\"cursor:pointer\">翦影</a></li>
            <li><a onclick=\"window.location='favLink.php'\" style=\"cursor:pointer\">有用連結</a></li>
            <li><a onclick=\"window.location='mslab.csie.asia.edu.tw/doku'\" style=\"cursor:pointer\">傑克獨酷</a></li>
            <li><a onclick=\"window.location='wordpress'\" style=\"cursor:pointer\">璞學草堂</a></li>
            <li><a onclick=\"window.location='login.html'\" style=\"cursor:pointer\">管理者</a></li>
            <li><a onclick=\"window.location='eIndex.php'\" style=\"cursor:pointer\">ENGLISH</a></li>
        </ul>  -->";
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
