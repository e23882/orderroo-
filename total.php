<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<body style="background:#fff url('img/activeBack.jpg') center center fixed no-repeat;background-size: cover;　background-repeat:no-repeat;">
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
						<a class="navstyle" href="total.php?p_id=1?" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
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
		<div style="padding-top:100px;padding-bottom:150px;padding-left:200px;padding-right:200px;">
			<table style="width:100%;">
			<?php
				//呼叫資料庫
				require_once 'ConnectionFactory.php';
				try
				{
					$conn = connectionfactory::getfactory()->getconnection();
					$pageCount = $_GET['p_id']*20;
					$stmt = $conn->prepare('select hotel_id, name, type, address, phone from hotel where hotel_id > '.$pageCount.' limit 20');
											
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					$conn = null;						
					$count = 0;
					foreach ($result as $value) 
					{
						if($count%5==0)
							echo "<tr style='width:100%;'>";
						
						
						echo "<td style='width:50px;'>";
						echo "<a href='detail.php?h_id=".$value->hotel_id."'>";
						echo "<img src='img/housedemo.jpg' style='width:200px;'/></a><div style='color:white;font-family:微軟正黑體;'>".$value->name."</div><div style='color:white;font-family:微軟正黑體;'>".$value->phone."</div><div style='color:white;font-family:微軟正黑體;'>".$value->address."</div></td>";
						
						if($count%5==4)
							echo "</tr>";
						$count++;
						
					}
					echo "</table>";
					
					
					
					
				}
				catch (PDOException $e) 
				{
					echo "error";
				}
				
				
				echo "<div style='margin-top:5%;margin-left:80%;'>";
				
				echo "</div>";
			?>
			<?php
				//呼叫資料庫
				require_once 'ConnectionFactory.php';
				try
				{
					$getValue = 0;
					$before =0;
					$after =0;
					$current = 1;
					if(isset($_GET['p_id']))
					{
						$getValue =$_GET['p_id'];
						$current = $_GET['p_id'];
						$before = $current-1;
						if($before<=0)
							$before = 1;
						$after = $current+1;
						if($current>5)
							$current = $current-4;
					}
						
					else
						$current = 1;
					
					$conn = connectionfactory::getfactory()->getconnection();
					$stmt = $conn->prepare('select * from hotel');
					$stmt->execute();
					
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					$conn = null;						
					
					$count = 0;
					echo "<div style='margin-top:1%;float:right;'>";
					echo "<ul class='pagination'><li><a href='total.php?p_id=".$before."'>&laquo;</a></li>";
				
					foreach ($result as $value) 
					{
						if($count==10)
							break;
						else
						{
							if($current==$getValue)
								echo "<li class='active'><a href='total.php?p_id=".$current."'>".$current."</a></li>";
							else
								echo "<li><a href='total.php?p_id=".$current."'>".$current."</a></li>";
						}
						$current++;
						$count++;
					}
					echo "<li><a href='total.php?p_id=".$after."'>&raquo;</a></li></ul>";
					echo "</div>";
				}
				catch (PDOException $e) 
				{
					echo "error";
				}
			?>
		</div>	
		
    </main>


</body>

</html>