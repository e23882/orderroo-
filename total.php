<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
    <title>住宿總覽</title>
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
				<div class="_19rvy71" style="position:absolute;right:5%;top:2%;">
					<nav style="padding:13px;">
						<a class="navstyle" href="total.php" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
						<a class="navstyle" href="index.php" style="font-family:'cwTeXYen', sans-serif;">推薦住宿</a>
						<a class="navstyle" href="active.php" style="font-family:'cwTeXYen', sans-serif;">活動資訊</a>
						<a class="navstyle" href="Login.html" style="font-family:'cwTeXYen', sans-serif;">登入/註冊</a>											
					</nav>
				</div>                
			</section>
		</div>
		<div style="padding-top:100px;padding-bottom:150px;padding-left:200px;padding-right:200px;">
			<table style="background-color:rgba(100%, 100%, 100%, 0.6);font-family:微軟正黑體;text-align:center;">
				<th style="min-width:30px;height:40px;">名稱</th>
				<th style="min-width:50px;">類別</th>
				<th style="min-width:400px;">地址</th>
				<th style="min-width:100px;">電話</th>
			
				<?php
					//呼叫資料庫
					require_once 'ConnectionFactory.php';
					try
					{
						$conn = connectionfactory::getfactory()->getconnection();
						
						$stmt = $conn->prepare('select hotel_id, name, type, address, phone from hotel');
						$stmt->execute();
						
						$result = $stmt->fetchAll(PDO::FETCH_CLASS);
						$conn = null;						
						foreach ($result as $value) 
						{
							echo "<tr style='height:40px;'>";
							echo "<td><a href='detail.php?h_id=".$value->hotel_id."' style='color:black;'>".$value->name."</a></td>";
							echo "<td>".$value->type."</td>";
							echo "<td>".$value->address."</td>";
							echo "<td>".$value->phone."</td>";
							echo "</tr>";
						}
						
					}
					catch (PDOException $e) 
					{
						echo "error";
					}
				?>
			</table>
		</div>	
		
    </main>


</body>

</html>