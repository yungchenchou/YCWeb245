<!DOCTYPE html> 
<?php  include("fun_inc.php"); 	session_start();  ?>
<html>
    <head>
        <meta charest="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yung-Chen Chou's Web</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">      
        <link rel="stylesheet" href="bootstrap/css/Cerulean/bootstrap.min.css">
		<link rel="SHORTCUT ICON" href="Images/jack.png">
    </head>
	<body>
		<div class="container">
			<img src="Images/banner.png" class="img-responsive hidden-xs" width="100%" style="margin-bottom: 1px; margin-top:3px;">
		</div>
    	<div class="container">
			<?php headerBanner(2); ?>
		</div>
		<div class="container">
			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">學歷</h2>
			<div class="panel panel-default" style="background-color: #E0E0E0;">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li><a href="http://www.ccu.edu.tw/">國立中正大學</a>
							<a href="http://www.cs.ccu.edu.tw>">資訊工程研究所</a>博士班，2002/09 ~ 2008/12</li>
						<li><a href="http://www.cyut.edu.tw/">朝陽科技大學</a>
							<a href="http://www.im.cyut.edu.tw>">資訊管理研究所</a>碩士班，2000/09 ~ 2002/06</li>
						<li><a href="http://www.npust.edu.tw/">國立屏東科技大學</a>
							<a href="http://www.mis.npust.edu.tw>">資訊管理系</a>，1996/09 ~ 1998/06</li>
					</ol>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">經歷</h2>
			<div class="panel panel-default" style="background-color: #E0E0E0;">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li>亞洲大學 資訊工程學系 專任助理教授，2009/02 ~ 迄今</li>
					</ol>
				</div>
			</div>
			
			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體';  color: black;">專業證照</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<table class='table info' >
						<thead>
							<tr>
								<th width="6%">編號</th>
								<th width="34%">證照名稱</th>
								<th width="40%">效期</th>
								<th width="20%">說明</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center">1</td>
								<td align="center">PIMS 稽核員/主導稽核員</td>
								<td align="left"></td>
								<td align="left"></td>
							</tr>
							<tr>
								<td align="center">2</td>
								<td align="center">ISMS 稽核員/主導稽核員</td>
								<td align="left">2013/09/01 ~ 2016/08/31</td>
								<td align="left"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體';  color: black;">曾授課程</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li>機率</li>
						<li>Java 程式設計</li>
						<li>視窗程式設計(C#)</li>
						<li>視窗程式設計 (Java)</li>
						<li>作業系統 (大學部、碩士、博士)</li>
						<li>資料探勘</li>
						<li>管理資訊系統</li>
						<li>資訊安全</li>
						<li>數位內容資訊安全</li>
						<li>資訊與生活</li>
						<li>資訊與科技</li>
						<li>資訊隱藏概論</li>
						<li>進階影音編碼技術</li>
						<li>數位影像處理技術</li>
					</ol>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">校內服務</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li>擔任亞洲大學研究發展處學術發展組組長，2012/08/01 ~ 2013/07/31</li>
						<li>擔任亞洲大學資訊工程學系課程委員會委員，2010/09 ~ 迄今</li>
						<li>擔任亞洲大學資訊工程學系招生委員會委員，2010/02 ~ 2010/08</li>
						<li>擔任亞洲大學資訊工程學系IEET認證推動小組(規範2)，2009/02 ~ 迄今</li>
						<li>擔任亞洲大學資訊工程學系學習導師，2009/08 ~ 2010/07</li>
					</ol>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">推廣教育</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li>99學年度(暑假)期間推廣教育碩學分班(作業系統)，彰化平和國小，2011/08/01 ~ 2011/08/31</li>
					</ol>
				</div>
			</div>
					
			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">校外服務</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<ol>
						<li>擔任<a href="http://www.cyut.edu.tw">朝陽科技大學</a>
							學生發展中心職涯諮詢顧問，2010/09 ~ 2012/07</li>
					</ol>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">專題計畫</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<table class="table table-hover">
						<tr bgcolor="#ccddaa">
							<th align="center" width="8%">編號</th>
							<th align="center" width="32%">計畫名稱</th>
							<th align="center" width="25%">計畫編號</th>
							<th align="center" width="23%">執行期間</th>
							<th align="center" width="12%">補助單位</th>
						</tr>
						<tr>
							<td align="center">1</td>
							<td align="center">具低計算量之資訊隱藏技術及應用</td>
							<td align="left">NSC 98-2218-E-468-004-MY2 (主持人)</td>
							<td align="center">2009/09/01 ~ 2011/07/31</td>
							<td align="center">國科會</td>
						</tr>
						<tr>
							<td align="center">2</td>
							<td align="center">網路通訊重點領域學程推廣計畫--匯流平台與應用整合學程(亞洲大學)</td>
							<td align="left">共同主持人</td>
							<td align="center">2011/09/01 ~ 2014/01/31</td>
							<td align="center">教育部</td>
						</tr>
						<tr>
							<td align="center">3</td>
							<td align="center">視訊內容保護技術之研究</td>
							<td align="left">100-asia-33 (主持人)</td>
							<td align="center">2011/12/01 ~ 2012/11/30</td>
							<td align="center">亞洲大學</td>
						</tr>
						<tr>
							<td align="center">4</td>
							<td align="center">植基於卡氏乘積與文句切段之HTML網頁資訊隱藏技術研究</td>
							<td align="left">NSC 101-2221-E-468-016 (主持人)</td>
							<td align="center">2012/08/01 ~ 2013/07/31</td>
							<td align="center">國科會</td>
						</tr>
						<tr>
							<td align="center">5</td>
							<td align="center">靜態網頁浮水印技術之研究</td>
							<td align="left"> NSC 102-2221-E-468-019 (主持人)</td>
							<td align="center">2013/08/01 ~ 2014/07/31</td>
							<td align="center">國科會</td>
						</tr>
						<tr>
							<td align="center">6</td>
							<td align="center">穴位埋線與電針太衝穴對高血壓大鼠的心臟保護效果比較</td>
							<td align="left">平台負責人: 何宗融教授 (中醫大)
							                 子計畫主持人: 周永振 (亞洲大學)<br />
							                 (CMU101-ASIA-13)</td>
							<td align="center">2013/06/01 ~ 2014/05/31</td>
							<td align="center">中國醫藥大學 及 亞洲大學</td>
						</tr>
						<tr>
							<td align="center">7</td>
							<td align="center">雲端與行動智慧整合之安全電子投票系統</td>
							<td align="left"> 103-2622-E-468-001-CC2 (共同主持人)</td>
							<td align="center">2014/02/01 ~ 2015/01/31</td>
							<td align="center">科技部</td>
						</tr>
						<tr>
							<td align="center">8</td>  
							<td align="center">Resveratrol enhanced FOX03 phosphorylation via synergetic 
									activate SIRT-1 and PI3K/Akt signaling to benefit exercise effects in elderly rat</td>
							<td align="left">平台負責人:  劉哲育 (中醫大 癌生所)
							                 子計畫主持人: 周永振 (亞洲大學)<br />
							                 (CMU102-ASIA-03)</td>
							<td align="center">2014/07/01 ~ 2015/06/30</td>
							<td align="center">中國醫藥大學 及 亞洲大學</td>
						</tr>
					</table>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">產學合作</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<table width="100%" class="table table-hover">
						<tr bgcolor="#ccddaa">
							<th align="center" width="8%">編號</th>
							<th align="center" width="32%">計畫名稱</th>
							<th align="center" width="25%">合作單位</th>
							<th align="center" width="23%">執行期間</th>
							<th align="center" width="12%">身份別</th>
						</tr>
						<tr align="center">
							<td>1</td>
							<td>資訊安全校外實習產學合作案</td>
							<td>德欣寰宇股份有限公司</td>
							<td>2012/06/01 ~ 2013/08/31</td>
							<td>主持人</td>
						</tr>
						<tr align=center>
							<td>2</td>
							<td>資訊安全校外實習產學合作案</td>
							<td>美思科法顧問股份有限公司</td>
							<td>2014/05/01 ~ 2014/12/31</td>
							<td>主持人</td>
						</tr>
					</table>
				</div>
			</div>

			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">演講</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<table class='table table-hover'>
						<tr bgcolor="#aaccdd">
							<th align="center" width="8%">編號</th>
							<th align="center" width="17%">日期</th>
							<th align="center" width="40%">題目</th>
							<th align="center" width="35%">地點</th>
						</tr>
						<tr>
							<td align="center">1</td>
							<td align="center">2010/04/29</td>
							<td align="left">資訊隱藏技術</td>
							<td align="center">亞洲大學 資訊學院</td>
						</tr>
						<tr bgcolor=bisque>
							<td align="center">2</td>
							<td align="center">2010/11/02</td>
							<td align="left"><a href="./lecturePPT/02_DataHidingAndApplication_20101102.pdf">資訊隱藏技術與其應用</a></td>
							<td align="center">亞洲大學 資訊工程研究所</td>
						</tr>
						<tr>
							<td align="center">3</td>
							<td align="center">2011/05/20</td>
							<td align="left">資訊安全面面觀</td>
							<td align="center">國防部北部地方軍事法院檢察署</td>
						</tr>
						<tr bgcolor=bisque>
							<td align="center">4</td>
							<td align="center">2011/05/30</td>
							<td align="left">視覺密碼技術</td>
							<td align="center">逢甲大學 資訊工程學系</td>
						</tr>
						<tr>
							<td align="center">5</td>
							<td align="center">2011/12/13</td>
							<td align="left">資訊安全面面觀</td>
							<td align="center">南台科技大學</td>
						</tr>
						<tr bgcolor=bisque>
							<td align="center">6</td>
							<td align="center">2012/05/08</td>
							<td align="left">辦公室安全</td>
							<td align="center">署立草屯療養院</td>
						</tr>
						<tr>
							<td align="center">7</td>
							<td align="center">2012/05/25</td>
							<td align="left">視覺密碼技術</td>
							<td align="center">逢甲大學 資訊工程學系</td>
						</tr>
						<tr bgcolor=bisque>
							<td align="center">8</td>
							<td align="center">2012/09/07</td>
							<td align="left">辦公室安全</td>
							<td align="center">署立草屯療養院</td>
						</tr>
						<tr>
							<td align="center">9</td>
							<td align="center">2013/11/06</td>
							<td align="left">資訊安全面面觀</td>
							<td align="center">台中市立長億高中</td>
						</tr>
						<tr bgcolor=bisque>
							<td align="center">10</td>
							<td align="center">2015/06/??</td>
							<td align="left">資訊隱藏技術及其應用</td>
							<td align="center">逢甲大學</td>
						</tr>
						<tr>
							<td align="center"></td>
							<td align="center">2015/08/13</td>
							<td align="left">靜態網頁資訊隱藏及其應用</td>
							<td align="center">逢甲大學</td>
						</tr>
					</table>
				</div>
			</div>
				
			<h2 style="text-shadow: 2px 2px 2px #775599; font-family: '微軟正黑體'; color: black;">個人榮譽</h2>
			<div class="panel panel-default" style="background-color: 	#E0E0E0; ">
				<div class="panel-body" style="font-size: 1.3em; font-family: '微軟正黑體';">
					<span class='articleTitle'></span>
					<ol>
						<li class="pubStyle1"><a href="http://www.pntcv.ntct.edu.tw/">
								國立南投高級商業職業學校</a>傑出校友，2010/04/17</li>
					</ol>
				</div>
			</div>
		</div>
        <?php footering();?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
