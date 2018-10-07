<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Knewave|Shadows+Into+Light" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
    <title>住宿總覽</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuNhCYLBxMGOwobJttaifaWmlQGCfsLqo&callback=initMap"async defer></script>
    <script>
		function makeRequest() 
		{
		  xhr = new XMLHttpRequest();
		  xhr.onload = function() {
			   console.log(this.responseText);
			var response = JSON.parse(this.responseText);
			var city = response.city.name + ', ' + response.city.country;
			var weatherTitle = response.list[0].weather[0].main;
			var temp = response.list[0].main.temp + '°';
			var weather=['','','','','','','','',''];
			var temp=['','','','','','','','','']
			
			var i;
			for(i=1;i<8;i++)
			{
				if(response.list[i].weather[0].main=="Clear")
				{
					weather[i]="<img src='sun.png' style='width:50px;' />";
				}
				else if(response.list[i].weather[0].main=="Clouds")
				{
					weather[i]="<img src='cloud.png' style='width:50px;' />";
				}
				else if(response.list[i].weather[0].main=="Rain")
				{
					weather[i]="<img src='rain.png' style='width:50px;' />";
				}
				temp[i]=response.list[i].main.temp + "°";
			}
		  
			var weatherContainer = document.querySelector("#weather");
			weatherContainer.innerHTML = "<table style='font-weight:bold;padding:3px;bac'>"+
			"<tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>Sun</td>"+
			"<tr>"+
			"<td>"+weather[1]+"</td>"+
			"<td>"+weather[2]+"</td>"+
			"<td>"+weather[3]+"</td>"+
			"<td>"+weather[4]+"</td>"+
			"<td>"+weather[5]+"</td>"+
			"<td>"+weather[6]+"</td>"+
			"<td>"+weather[7]+"</td>"+
			"</tr>"+
			"<tr>"+
			"<td>"+temp[1]+"</td>"+
			"<td>"+temp[2]+"</td>"+
			"<td>"+temp[3]+"</td>"+
			"<td>"+temp[4]+"</td>"+
			"<td>"+temp[5]+"</td>"+
			"<td>"+temp[6]+"</td>"+
			"<td>"+temp[7]+"</td>"+
			"</tr>"+
			"<table>";
		  };
		  xhr.open(
			"GET",
			<?php
				require_once 'ConnectionFactory.php';
				try
				{
					$conn = ConnectionFactory::getFactory()->getConnection();
					$stmt = $conn->prepare('select * from hotel where hotel_id = '.$_GET['h_id']);
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_CLASS);
					$conn = null;
					foreach ($result as $value)
					{
						
					}
					$conn = null;
					
					echo "'https://api.openweathermap.org/data/2.5/forecast?q=".$value->locateEN.",tw&APPID=9c39fa3ce9d953fdd507d7d9f77093ef&lang=zh_tw&units=metric',";
				}
				catch (PDOException $e) 
				{
					echo "error";
				}
			?>
			true
		  );
		  xhr.send();
		}
		makeRequest();
	</script>
	<script>
      var map;
      var markers = [];
      var position = [];
	  function addPosition(price, x, y, idinput)
	  {
		position.push({label:price,lat:x,lng:y,id:idinput});
	  }
	   <?php
		require_once 'ConnectionFactory.php';
		try
		{
			$conn = ConnectionFactory::getFactory()->getConnection();
			$stmt = $conn->prepare('select * from hotel limit 200');
			$stmt->execute();
			$result = $stmt->fetchAll(PDO::FETCH_CLASS);
			$conn = null;
			foreach ($result as $value) 
			{
				echo "addPosition('".$value->min_price."',".$value->lat.",".$value->lng.",".$value->hotel_id.");";
			}
		}
		catch (PDOException $e) 
		{
			echo "<a href='index.php'>查詢不到物件</a>";
		}
		?>
      function initMap() 
      {
        map = new google.maps.Map(document.getElementById('map'), 
        {
          
         <?php
			require_once 'ConnectionFactory.php';
			try
			{
				$conn = ConnectionFactory::getFactory()->getConnection();
				$stmt = $conn->prepare('select * from hotel where hotel_id ='.$_GET['h_id']);
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_CLASS);
				$conn = null;
				$x=23;
				$y=121;
				
				foreach ($result as $value) 
				{
					$x = $value->lat;
					$y = $value->lng;
					
				}
				
				echo "center: {lat: ".$x.", lng: ".$y."},zoom: 16});";
				
			}
			catch (PDOException $e) 
			{
				echo "center: {lat: 23, lng: 123},";
			}
			echo "addPosition('".$value->min_price."',".$value->lat.",".$value->lng.",".$value->hotel_id.");";
			?>
          
       for(var i=0;i<position.length;i++)
       {
        addMarker(i);
       }
      
      }
      function addMarker(e) 
      {

          markers[e] = new google.maps.Marker({
            position: {
              lat: position[e].lat,
              lng: position[e].lng
            },
            map: map,
			label: 
			{
			  text: "$"+position[e].label+"NT.",
			  color: "black",
			  fontSize: "10px",
			  fontWeight: "bold"
			},
             iocn:'http://localhost/demo/img/tr.png',
          });
		  
           markers[e].addListener('click',function(){
			if(markers[e].getAnimation()==null){
			  markers[e].setAnimation(google.maps.Animation.BOUNCE);
			  document.location.href="http://localhost/demo/detail.php?h_id="+position[e].id
			}else{
			  markers[e].setAnimation(null);
			}
		  });
       }
	 
    </script>
   
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

<body style="background:#fff url('img/room.png') center center fixed no-repeat;background-size: cover;　background-repeat:no-repeat;">
	
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
						<a class="navstyle" href="total.php?p_id=1" style="font-family:'cwTeXYen', sans-serif;">住宿總覽</a>
						<a class="navstyle" href="recommendDefault.php" style="font-family:'cwTeXYen', sans-serif;">推薦住宿</a>
						<a class="navstyle" href="active.php" style="font-family:'cwTeXYen', sans-serif;">交通資訊</a>
						<a class="navstyle" href="Login.html" style="font-family:'cwTeXYen', sans-serif;">登入/註冊</a>											
					</nav>
				</div>                
			</section>
		</div>
		<div style="padding-top:100px;padding-bottom:150px;padding-left:100px;">
			<table>
				<?php
					require_once 'ConnectionFactory.php';
					try
					{
						$conn = ConnectionFactory::getFactory()->getConnection();
						$stmt = $conn->prepare('select * from hotel where hotel_id = '.$_GET['h_id']);
						$stmtArround = $conn->prepare('SELECT b.title, b.site FROM hotel a left join attraction b on a.town = b.town where a.hotel_id ='.$_GET['h_id']);
						$stmt->execute();
						$stmtArround->execute();
						$result = $stmt->fetchAll(PDO::FETCH_CLASS);
						$conn = null;
						foreach ($result as $value) 
						{
							echo "<tr><td><img src='img/housedemo.jpg' style='width:50%;'/></td></tr>";
							echo "<tr><td style='color:white;font-family:微軟正黑體;font-size:30px;padding:2px;'><b>".$value->name."</b></a></td></tr>";
							echo "<tr><td style='color:white;font-family:微軟正黑體;padding:2px;'><b>".$value->type."</b></td></tr>";
							echo "<tr><td style='color:white;font-family:微軟正黑體;padding:2px;'<b>".$value->address."</b></td></tr>";
							echo "<tr><td style='color:white;font-family:微軟正黑體;padding:2px;'><b>".$value->phone."</b></td></tr>";
						}
						echo "</table>";
						$resultArr = $stmtArround->fetchAll(PDO::FETCH_CLASS);
						$conn = null;
						$ArrCount = 0;

						echo "<div style='min-height:200px;background:white;width:85%;padding:20px;margin-top:3%;'><h2 style='font-family:微軟正黑體;padding:2px;'>周遭景點</h2><table>";
						foreach ($resultArr as $valueArr) 
						{
							if($ArrCount%5==0)
							{
								echo "<tr>";
							}
							
							echo "<td><img src='img/arrow.png' style='width:20px;font-family:微軟正黑體;vertical-align:middle;padding:2px;'><a href='".$valueArr->site."' style='color:black;'>".$valueArr->title."</a></img></td>";

							if($ArrCount%4==0)
								echo "</tr>";
						}
						echo "</table></div>";	
					}
					catch (PDOException $e) 
					{
						echo "<a href='index.php'>查詢不到物件</a>";
					}
				?>
				<div id="map" style="position:absolute;right:14%;top:150px;width:400px; height:300px;"/></div>
				<div id='weather' style='width:300px;color:white;text-align:center;position:absolute;right:20%;top:500px;'/>
				
		</div>	
		<?php
			require_once 'ConnectionFactory.php';
			try
			{
				$conn = ConnectionFactory::getFactory()->getConnection();
				$stmt = $conn->prepare('select * from hotel where hotel_id = '.$_GET['h_id']);
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_CLASS);
				$conn = null;
				foreach ($result as $value)
				{
					echo "<div>".$value->locateEN."</div>";
				}
				$conn = null;
				
				
			}
			catch (PDOException $e) 
			{
				echo "error";
			}
		?>
    </main>


</body>

</html>