<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(109.76deg, #FFD62E 15.44%, #FFB118 78.39%); background-repeat: none">
	<meta charset="utf-8">
<div>
	<?php 
		$con = mysqli_connect("192.168.1.26","root","" , "hackaton");
		$q = mysqli_query($con, "SELECT * FROM nomera");
	 ?>
	<div class="col-12 " style="height: 100px">
		<div class="col-9  mx-auto" style="height: 100px">
			<div class="row">
				<div class="col-5 " style="height: 100px">
					<img src="logo.png">
				</div>
				<div class="col-7  " style="height: 100px">
					<div class="row">
						<div class="col-3 " style="height: 100px">
							<a href="index.php " class="text-dark" style="text-decoration: none"><h1  style="font-size: 25px z-index">Главная</h1></a>
						</div>
						<div class="col-3  " style="height: 100px; z-index: 1000">
							<h1 class=""><a href="index1.php" class="text-dark" target="_blank" class="text-dark" style="text-decoration: none">Новости</a></h1>
						</div>
						<div class="col-4 mt-3" style="height: 100px; z-index: 1000">
							<a href="kk.php " class="text-dark" style="text-decoration: none"><h1 style="font-size: 28px">Советы по защите</h1></a>
						</div>
						<div class="col-2 mt-3" style="height: 100px; z-index: 1000">
							<a class="text-dark" href="kk1.php" style="text-decoration: none;"><h1  style="font-size: 30px">Помощь</h1></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 " style="height: 700px">
		<div class="col-10 " style="height: 700px; margin-left: 234px; margin-top: 25px">
			<div class="row">
				<div class="col-6   px-0" style="height: 700px">
					<div class="col-12 " style="height: 33%">
						<h1 style="font-size: 65px">Чувствуйте себя уверенно в интернете!</h1>
					</div>
					<div class="col-12" style="height: 33%">
						<p style="font-size: 27px">
							На нашем сайте вы можете
							 прочитать о том как защитить себя
							 в интернете, получать и проверять
							 номера мошенников, играть в игру
							 для улучшения знаний по
							 безопасности в интернете.

						</p>
					</div>
					<div class="col-12  px-0" style="height: 33%">
						<div class="col-9 mr-2" style="height: 100%">
							<button class=" rounded-pill form-group mt-3" style="height:110px;width: 450px; 
							background: linear-gradient(93.15deg, #FF5959 27.65%, #FF0909 177.69%);">
								<a style="text-decoration: none" href=""><h1 class="text-light">Перейти к боту</h1></a>
							</button>
						</div>
					</div>
				</div>
				<div class="col-6 " style="height: 700px">
					<img style="position: absolute; left:-140px; top:-150px  " src="1.png">
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 bg-dark" style="height: 69px; margin-top: 50px; position: relative;">
        <div class="row" style = "height: 100%;">
        	<div class="col-3" style = "position: relative;">
	            <div style="position: absolute; top: 40%;">
	                <img src="img/2.png" style="width: 360px;">
	            </div>
            </div>
            <div class = "info col-6 row" style = "margin-left: 80px;">
            	<div class = "lang" style="height: 100%; width: 50%;">
            		<div style="position: relative; height: 100%;">
	            		<div style = "position: absolute; top: 35%; display: flex;">
		            		<img src="img/5.png" alt="" style = "width: 25px; height: 25px;">
		            		<p class = "text-light" style = "margin-bottom: 0px; margin-top: -10px; margin-left: 10px; font-size: 16px;font-weight: bold; line-height: 24px;">Выбрать язык <br> (Choose language) </p>
	            		</div>
            		</div>
            	</div>
            	<div style="position: relative; height: 100%; width: 50%">
            		<p class = "text-light" style = "position: absolute; top: 35%; font-style: normal; font-weight: bold; font-size: 20px; line-height: 24px;">О компании</p>
            	</div>
            </div>
        </div>
        <div style = "position: absolute; top: 8px; right: 10px;"> <img src="img/3.png"></div>
        <div style = "position: absolute; top: 8px; right: 80px;"> <img src="img/4.png"></div>
    </div>
</div>
</body>
</html>