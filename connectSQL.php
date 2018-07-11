
<!doctype html>
<html>

<head>
	<meta charset="utf-8" name="class[]" value="viewport" content="width=device-width, initial-scale=1">
	<title>connect SQL template</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="js/perf_highcharts.js"></script>
	<style>
	
	</style>
</head>
<body>
	<?php
	//呼叫資料庫
	require_once 'ConnectionFactory.php';
	$rule="";
	if(!empty($_POST["class"]))
	{
		$class = $_POST["class"];
		//分割陣列
		$allclass = implode("%' or '%",$class);
		
		$rule = "select * from table where rule like '%".$rule."%' group by field desc";
	}
	else
	{
		
		$rule = "select * from table where rule like '%".$rule."%' group by field desc";
	}
		

	// echo $rule;

	//連接資料庫
	  $conn = ConnectionFactory::getFactory()->getConnection();
	  $stmt = $conn->prepare($rule);
	  $stmt->execute();
	 
	  $result = $stmt->fetchAll(PDO::FETCH_CLASS);
	  foreach ($result as $value) 
	  {
		
		echo "".$value->name."";
		
	  }
	 
	  $conn = null;
	  
	  
?>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
						</tr>
					</table>
				</div>
</body>
</html>

