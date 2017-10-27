<html>

<head>
    <title>Bootswatch: Paper</title>
    <?php include( "../css.php");?>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
	</script>
	
	
</head>

<body>
    <?php include( "../bar.php");?>
	<div class="container">
		<div class="row" >
			<div class="col-md-4 text-center"></div>
			<div class="col-md-4 text-center">
							
					<ul class="list-group-item active">目前區域</ul>
					<?php 
					include("../connMysql.php"); 
					$sql= "SELECT * FROM `main_area` ORDER BY `location` ASC";
					$result = $conn->query($sql); 
					if ($result->num_rows > 0) { 
						// 輸出每行數據 
						while($row = $result->fetch_assoc()) { 
							echo '<li class="list-group-item">'.$row["location"].'</li>'; 
						} 
					}else{ 
						echo "0 個結果"; 
					} 
					$conn->close();		
					?>
					<br/>
					<hr/>
					<h4>新增地區</h4>
					<form action="add_area.php" method="post">
					<input class="form-control" id="ex1" type="text" name="add_area" placeholder="地區名稱" >
					<button type="submit" class="btn btn-primary btn-lg btn-block" id="add">新增</button>			
					</form>
					<script>
					$('#add').click(function(){
					var email=$('#ex1').val();
					if(email==''){
						alert("提醒: \r\n 資料輸入不全!");
						return false;
					}
					});
					</script>
					<br/>
					<form action="del_area.php" method="post">
					<button type="submit" class="btn btn-primary btn-lg btn-block btn-danger">移除</button>	
						<select class="form-control" name="del_area">
						<option selected >地區名稱</option>
						<?php 
							$i=0;
							include("../connMysql.php"); 
							$sql= "SELECT * FROM `main_area` ORDER BY `location` ASC";
							$result = $conn->query($sql); 
							if ($result->num_rows > 0) { 
								// 輸出每行數據 
								while($row = $result->fetch_assoc()) { 
									echo '<option value="'.$row["location"].'">'.$row["location"].'</option>"';
									$i++;
								} 
							}else{ 
							echo "0 個結果"; 
							} 
							$conn->close();		
							?>
						</select>
					</form>
			</div>
			<div class="col-md-4 text-center"></div>
			
			
			
		</div>
	</div>
    <?php include( "../footer.php");?>
</body>

</html>
