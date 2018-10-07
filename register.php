<!DOCTYPE html>
<head>
	<meta http-equiv="refresh" content="3;url=recommendDefault.php">
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
    <title>登入會員</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<style>
	@import url(https://fonts.googleapis.com/earlyaccess/cwtexyen.css);


	a
	{
		color:white;
		font-family:'Gloria Hallelujah', cursive;
		text-decoration:none;
	}
	a:link 
	{
		color:white;
		font-family:'Gloria Hallelujah', cursive;
		text-decoration:none;
	}
	a:visited 
	{
		color:white;
		font-family:'Gloria Hallelujah', cursive;
		text-decoration:none;
	}
	a:hover 
	{
		color:white;
		font-family:'Gloria Hallelujah', cursive;
		text-decoration:none;
	}
	a:active 
	{
		color:white;
		font-family:'Gloria Hallelujah', cursive;
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
						<a class="navstyle" href="index.php" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
						<a class="navstyle" href="total.php?p_id=1?p_id=1" style="font-family:'cwTeXYen', sans-serif;">推薦住宿</a>
						<a class="navstyle" href="active.php" style="font-family:'cwTeXYen', sans-serif;">交通資訊</a>
						<a class="navstyle" href="login.html" style="font-family:'cwTeXYen', sans-serif;">登入/註冊</a>											
					</nav>
				</div>                
			</section>
		</div>
		<div class="row justify-content-center" style="margin-top:10%;">
			<div class="col-md-4">
				<div  class="card" style="background:#ffffff !important;WIDTH:AUTO;padding:30px;">
					<title>登入中</title>
						<?php
						require_once 'ConnectionFactory.php';
							try
							{
								 // echo "<div>".$_POST['ac']."</div>";
								 // echo "<div>".$_POST['pw']."</div>";
								 // echo "<div>".$_POST['name']."</div>";
								$conn = ConnectionFactory::getFactory()->getConnection();
								$stmt = $conn->prepare("insert into user(account, password, name) VALUES('".$_POST['ac']."','".$_POST['pw']."','".$_POST['name']."')");
								$stmt->execute();
								
								$conn = null;
								session_start();
								$_SESSION['user']=$_POST['name'];
								echo "註冊成功 ".$_POST['name'];
									
								
							}
							catch (PDOException $e) 
							{
								echo "error";
							}
						?>


				</div>
			</div>
		</div>
    </main>


</body>

</html>