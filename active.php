<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
    <title>交通資訊</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<style>
	@import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);


	a
	{
		color:white;
		text-decoration:none;
	}
	a:link 
	{
		color:white;
		text-decoration:none;
	}
	a:visited 
	{
		color:white;
		text-decoration:none;
	}
	a:hover 
	{
		color:white;
		text-decoration:none;
	}
	a:active 
	{
		color:white;		
		text-decoration:none;
	}
	.navstyle
	{
		font-family:'cwTeXYen', sans-serif;
		padding:5px;
		padding-left:5px;
		padding-top:5px;
		padding-bottom:5px;
		padding-right:20px;
		font-size:20px;
		
	}
	td
	{
		width:100%;
	}
	td
	{
		width:25%;
	}
	
	</style>
</head>

<body style="background:#fff url('img/loginback.jpg') center center fixed no-repeat;background-size: cover;　background-repeat:no-repeat;">
    <main id="site-content" role="main" tabindex="-1">
		<div class="_1ta0kyw">
			<section>           
				<div style="height:0px;">&nbsp;</div>
				<a class="_19rvy71" href="index.php" style="font-family: 'Gloria Hallelujah', cursive;font-size:34px !important;padding-left:24px;padding-right:24px;font-weight:bold;">
						<b>
							Hualien
						</b>
				</a>
				<div class="_19rvy71" style="position:absolute;right:15%;top:2%;">
					<nav style="padding:13px;">
						<a class="navstyle" href="total.php?p_id=1" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
						<a class="navstyle" href="recommendDefault.php" style="font-family:'cwTeXYen', sans-serif;">推薦住宿</a>
						<a class="navstyle" href="active.php" style="font-family:'cwTeXYen', sans-serif;">交通資訊</a>
						<a class="navstyle" href="Login.html" style="font-family:'cwTeXYen', sans-serif;">登入/註冊</a>											
					</nav>
				</div>         
				<?php
					session_start();
					if($_SESSION['user']!="")
						echo "<div style='position:absolute;right:5%;top:4%;font-family:微軟正黑體;color:white;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";
					else
						 echo "<div style='position:absolute;right:5%;top:4%;font-family:微軟正黑體;color:white;display:none;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";
				?>						
			</section>
		</div>
		<div style="padding-top:100px;padding-bottom:150px;padding-left:200px;padding-right:200px;font-family:微軟正黑體;">
			<table style="width:100%;">
				<tr>
					<td><a href="air.php"><img src="img/air.jpg" style="width:250px;"/></a></td>
					<td><a href="area.php"><img src="img/areasearch.jpg" style="width:250px;"/></a></td>
					<td><a href="bike.php"><img src="img/bike.jpg" style="width:250px;"/></a></td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td><a href="bus.php"><img src="img/bus.jpg" style="width:250px;"/></a></td>
					<td><a href="busc.php"><img src="img/buscurrent.jpg" style="width:250px;"/></a></td>
					<td><a href="free.php"><img src="img/free.jpg" style="width:250px;"/></a></td>
				</tr>
				<tr><td>&nbsp;</td></tr>
				<tr>
					<td><a href="shuttle.php"><img src="img/shuttle.jpg" style="width:250px;"/></a></td>
					<td><a href="taxi.php"><img src="img/taxi.jpg" style="width:250px;"/></a></td>
					<td><a href="train.php"><img src="img/train.jpg" style="width:250px;"/></a></td>
				</tr>
				<tr>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/suggest"><img src="img/topic1.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/oneday"><img src="img/topic2.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/coupleday"><img src="img/topic3.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:25px;"/></a></td>
				</tr>
				<tr>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/bike"><img src="img/topic4.png" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/hot%20spring"><img src="img/topic5.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/rafting"><img src="img/topic6.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
				</tr>
				<tr>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/hike"><img src="img/topic7.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					<td style="padding:10px;"><a href="https://tour-hualien.hl.gov.tw/topic/plan"><img src="img/topic8.jpg" style="width:180px;border-radius:50%;border: 6px solid rgb(255, 255, 255);margin-left:27px;"/></a></td>
					
				</tr>
			</table>
		</div>	
		
    </main>


</body>

</html>