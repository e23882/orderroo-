<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
    <title>推薦住宿</title>
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
						<a class="navstyle" href="total.php?p_id=1" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
						<a class="navstyle" href="index.php?p_id=1" style="font-family:'cwTeXYen', sans-serif;">推薦住宿</a>
						<a class="navstyle" href="active.php" style="font-family:'cwTeXYen', sans-serif;">交通資訊</a>
						<a class="navstyle" href="Login.html" style="font-family:'cwTeXYen', sans-serif;">登入/註冊</a>											
					</nav>
				</div>  
				<?php
					session_start();
                    if(isset($_SESSION['user'])) 
						echo "<div style='position:absolute;right:5%;top:4%;font-family:微軟正黑體;color:white;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";
					else
						 echo "<div style='position:absolute;right:5%;top:4%;font-family:微軟正黑體;color:white;display:none;'><a href='logout.php'>登出 ".$_SESSION['user']."</a></div>";
				?>						
			</section>
		</div>
		<div style="padding-top:100px;padding-bottom:150px;padding-left:200px;padding-right:200px;">
			<table style="font-family:微軟正黑體;text-align:center;width:100%;">
				
			
				<?php
					
					//呼叫資料庫
					require_once 'ConnectionFactory.php';
					try
					{
						$conn = connectionfactory::getfactory()->getconnection();
						  // echo "<div>".$_POST['type']."</div>";
						  // echo "<div>".$_POST['town']."</div>";
						  // echo "<div>".$_POST['arrive']."</div>";
						  // echo "<div>".$_POST['leave']."</div>";
						  // echo "<div>".$_POST['price']."</div>";
						  // echo "<div>".$_POST['Reservation']."</div>";
						
						if($_POST['price']==1)//0~2000
						{
							$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 2000");
							$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','0~2000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
						}
						else if($_POST['price']==2)//2001~4000
						{
							$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 4000 and min_price < 4000  and max_price > 2000 and min_price > 2000 ");
							$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','2001~4000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
						}
						else if($_POST['price']==3)//4001~6000
						{
							$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price < 6000 and min_price > 4000");
							$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','4001~6000','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
						}
						else if($_POST['price']==4)//6000up
						{
							$stmt = $conn->prepare("select hotel_id, name, type, address, phone from hotel where name like '%".$_POST['type']."%' and address like'%".$_POST['town']."%' and type like '%".$_POST['Reservation']."%' and max_price >6000");
							$stmtInsert = $conn->prepare("insert into newLog (city, price, type, roomType, user) values('".$_POST['town']."','6000 up','".$_POST['type']."','".$_POST['Reservation']."','".$_SESSION['user']."')");
						}
						if($_SESSION['user']!="")
						{
							$stmtInsert->execute();
						}
						
						$stmt->execute();
						
						$result = $stmt->fetchAll(PDO::FETCH_CLASS);
							
						$count = 0;
						foreach ($result as $value) 
						{
							if($count%3==0)
								echo "<tr style='width:100%;'>";
							echo "<td style='width:50px;'>";
							echo "<a href='detail.php?h_id=".$value->hotel_id."'>";
							echo "<img src='img/housedemo.jpg' style='width:200px;'/></a><div style='color:white;font-family:微軟正黑體;'>".$value->name."</div><div style='color:white;font-family:微軟正黑體;'>".$value->address."</div><div style='color:white;font-family:微軟正黑體;'>".$value->phone."</div></td>";
							
							if($count%3==2)
								echo "</tr>";
							$count++;
						
						
							
						}
						echo "</hr>";
						
						$stmtActive = $conn->prepare("select * from activity where from_date >'".$_POST['arrive']."' and to_date < '".$_POST['leave']."'");
						$stmtActive->execute();
						$resultAct = $stmtActive->fetchAll(PDO::FETCH_CLASS);
						$conn = null;	
						$countAct = 0;
						echo "<table style='margin-top:5%;'>";
						foreach ($resultAct as $value) 
						{
							if($countAct%3==0)
								echo "<tr style='width:100%;'>";
							echo "<td style='width:50px;'>";
							echo "<a href='activeDetail.php?a_id=".$value->id."'>";
							echo "<img src='img/actCom.jpg' style='width:200px;'/></a><div style='color:white;font-family:微軟正黑體;'>".$value->title."</div></td>";
							
							if($countAct%3==2)
								echo "</tr>";
							$countAct++;
						
						
							
						}
						echo "</table>";
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