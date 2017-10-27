<html>

<head>
    <title>Bootswatch: Paper</title>
    <?php include( "../css.php");?>
</head>

<body>
    <?php include( "../bar.php");?>
	<div class="container">
			<div class="row" >
					<?php
					include("../connMysql.php"); 
					$sql= "SELECT * FROM `main_area` ORDER BY `location` ASC";
					$result = $conn->query($sql); 
					if ($result->num_rows > 0){ 
						// 輸出每行數據 
						while($row = $result->fetch_assoc()) { 
							echo '<div class="col-md-3 text-center">';
							echo '<h3 class="text-center" >'.$row["location"].'</h3>';
							echo '<ul class="list-group-item active">目前合法ibeacon</ul>';
							//顯示對應的合法ibeacon
							$sql_ibeacon= "SELECT * FROM `ble` WHERE `location` =  '".$row["location"]."'";
							//echo  $sql;
							$result_ibeacon = $conn->query($sql_ibeacon); 
							if ($result_ibeacon->num_rows > 0) { 
								// 輸出每行數據 
								while($row_ibeacon = $result_ibeacon->fetch_assoc()) { 
									echo '<li class="list-group-item">'.$row_ibeacon["UUID"].'</li>'; 
								} 
							}else{ 
								echo "0 個結果"; 
							}
							//顯示對應的合法ibeacon
							
							echo '</div>';
						} 
					}else{ 
						echo "0 個結果"; 
					} 
					$conn->close();
					?>
			</div>
			
			
			
			<div class="row" >
				<div class="col-md-3 text-center">
					<ul class="list-group-item active">目前合法ibeacon</ul>
					<?php 
					include("../connMysql.php"); 
					$sql= "SELECT * FROM `ble` WHERE `location` =  '大門口'";
					$result = $conn->query($sql); 
					if ($result->num_rows > 0) { 
						// 輸出每行數據 
						while($row = $result->fetch_assoc()) { 
							echo '<li class="list-group-item">'.$row["UUID"].'</li>'; 
						} 
					}else{ 
						echo "0 個結果"; 
					} 
					$conn->close();		
					?>
				</div>
			</div>
			
			
			<div class="row" >
				<div class="col-md-3 text-center">
					<h4 class="text-center">電子圍籬A</h4>	
					<a href="#" class="list-group-item active">目前合法ibeacon</a>
					<?php 
					include("../connMysql.php"); 
					$sql= "SELECT * FROM `ble`";
					$result = $conn->query($sql); 
					if ($result->num_rows > 0) { 
						// 輸出每行數據 
						while($row = $result->fetch_assoc()) { 
							echo '<a href="#" class="list-group-item">'.$row["UUID"].'</a>'; 
						} 
					}else{ 
						echo "0 個結果"; 
					} 
					$conn->close();		
					?>
					<br/>
					<h4>新增地區</h4>
					<form action="add_ibeacon.php" method="post">
					<input class="form-control" id="ex1" type="text" name="add_ibeacon" placeholder="ibeacon MAC  AA:AA:AA:AA:AA:AA" >
					<button type="submit" class="btn btn-primary btn-lg btn-block">新增</button>
					
					</form>
					<br/>
					<form action="del_ibeacon.php" method="post">
					<button type="submit" class="btn btn-primary btn-lg btn-block btn-danger">移除</button>	
						<select class="form-control" name="del_ibeacon">
						<option selected >合法ibeacon</option>
						<?php 
							$i=0;
							include("../connMysql.php"); 
							$sql= "SELECT * FROM `ble`";
							$result = $conn->query($sql); 
							if ($result->num_rows > 0) { 
								// 輸出每行數據 
								while($row = $result->fetch_assoc()) { 
									echo '<option value="'.$row["UUID"].'">'.$row["UUID"].'</option>"';
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
			
			
			
		</div>
	</div>
    <?php include( "../footer.php");?>
</body>

</html>
