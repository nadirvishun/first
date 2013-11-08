<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Starter Template for Bootstrap</title>
		<link href="../../bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
		<link href="starter-template.css" rel="stylesheet">
	</head>
	
	<body>
		<!--整个导航栏，navbar-inverse用来反色，navbar-fixed-top用来固定-->
		<div class="navbar  navbar-fixed-top">
		<div class="container">
		<!--最左边/头的-->
		<div class="navbar-header">
		<!--用于移动设备-->
			<button type ="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>	
			<a class="navbar-brand",href="#">项目名称</a>
		</div>
		
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<!--active 用于背景加黑-->
				<li class="active"><a href="#">首页</a></li>
				<li ><a href="#">关于</a></li>
				<li ><a href="#">联系</a></li>
			</ul>
		</div>
		</div>
		</div>
		<!--文字输入-->
		<div class=starter-template>
			<h1>最简单的Bootstrap练习</h1>
			<p class=lead>空思无才处，妙想破壁来</p>
		</div>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="../../bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
