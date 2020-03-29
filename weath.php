<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<style type="text/css">

	.heroImage{
		background-image: url("myImage.jpg");
	
	}
		
	</style>
	
</head>

<body>
	<div class="jumbotron heroImage text-center">
	
		<div class="container">
		
			<h1 class="display-4 text-light">天氣預報</h1>
			<p class="lead text-light">請在以下輸入框輸入要查詢的<strong class="text-warning">城市名稱</strong></p>
			<form method="GET">
			
				<div class="form-group col-md-7 mx-auto">
					<input type="text" class="form-control" name="city" placeholder="例如London,taiwan..."><br>
			
			
			
			</form>
			
			<button type="submit" name="submit" class="btn btn-warning btn-lg ">查詢</button>
			
			<div class="col-8 mx-auto mt-3">
				<div class="alert alert-success">查詢成功</div>
				<div class="alert alert-danger">無法查詢到您要的城市，請重新再試</div>
				<div class="alert alert-danger">請輸入城市名稱!</div>
			
			
			
			</div>
		
		</div>
	
	
	
	
	</div>
	
	
	
	
</body>





</html>