<html>

<head>
    <title>Bootswatch: Paper</title>
    <?php include( "../css.php");?>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
	</script>
	<script src="./select_area.js"></script>
	<script src="./add_fence.js"></script>
	<script src="./del_fence.js"></script>
</head>

<body>
    <?php include( "../bar.php");?>
	<div class="container">
		<div class="row" >
			<div class="col-md-4 text-center">
					
					
					
					<select class="form-control" name="select_location" id="select_area">
							<option selected>區域名稱</option>
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
					<button type="button" class="btn btn-primary btn-lg btn-block" id="select_area_bt">查詢</button>
				<br/>
				<ul class="list-group-item active">目前准入人員</ul>
				<div id="select_area_show"></div>
				
				
			</div>
			
			<div class="col-md-4 text-center">
				<input class="form-control" id="add_fence" type="text" name="add_fence" placeholder="准入人員代號" >
				<button type="button" class="btn btn-primary btn-lg btn-block" id="add_fence_bt">新增</button>			
			
			</div>
			
			<div class="col-md-4 text-center">
						
						<select  id="del_fence_list" class="form-control">
						<option selected>移除准入人員</option>
						</select>
						
				
			<button type="button" class="btn btn-primary btn-lg btn-block btn-danger" id="del_fence_bt">移除</button>
			</div>
		</div>
	</div>
    <?php include( "../footer.php");?>
</body>

</html>
