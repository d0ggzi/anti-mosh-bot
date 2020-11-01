<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.name{
			color:#496A9E;
			font-weight:700;
		}
		.job{
			color: #6B7885;
			font-weight: 100;
		}
		.birthdate{
			color:#496A9E;
			font-weight:300;
		}
		.header{
			background-color: #4A76A8;
		}
	</style>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<body style="background-color: #FF3E3E">
<?php 
	$con = mysqli_connect('192.168.1.26', 'root','','hackaton');
	$query = mysqli_query($con, "SELECT * FROM nomera");
	$num = mysqli_num_rows($query)
 ?>
 			<?php for($i=0;$i<$num;$i++){
	 			$stroka = $query->fetch_assoc();
	 		?>
	 			<div class="border-bottom p-2 col-12" style="background-color: white">
	 				<div class="row">
	 					<div class="col-6">
	 						<p class="name col">
	 							<?php
	 							echo $stroka["phone_num"];
	 							?>
	 						</p>
	 					</div>
	 					<div class="col-6">
	 						<p class="birthdate">
	 							<?php
	 							echo $stroka["fraud_kind"];
	 							?>
	 						</p>
	 					</div>
	 				</div>
	 			</div>

	 		
	 		<?php } ?>
	 	
	 </div>
</body>
</html>