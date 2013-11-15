<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<div class="navbar-wrapper">
			<div class="container">
			<div class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">project name</a>
				</div>
				<div class="">
					<ul class="nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drapdown<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">A</a></li>
								<li><a href="#">B</a></li>
								<li><a href="#">C</a></li>
								<li class="devider"></li>
								<li><a href="#">D</a></li>
							</ul>
						</li>
					</ul>
				</div>
				</div>
			</div>
		</div>	

		<div id="container1" class="container">
		<div id="mycarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1" ></li>
				<li data-target="#mycarousel" data-slide-to="2" ></li>
			</ol>
			<div  class="carousel-inner">
				<div class="item active">
					<img  src="1.jpg" width="900" height="500" alt="first slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>炫彩</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="2.jpg" width="900" height="500" alt="second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>立方</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-info" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="3.jpg" width="900" height="500" alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>心动</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-success" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
			</div>	
			<a class="left carousel-control" href="#mycarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#mycarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>

	<div class="container marketing">
		<div class="row">
			<div class="col-md-4">
				<img class="img-circle" width="250" height="250" src="4.jpg" alt="fourth picture">
				<h2>凉州词</h2>
				<p>葡萄美酒夜光杯，欲饮琵琶马上催。</p>
				<p>醉卧沙场君莫笑，古来征战几人回。</p>
				<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</div>		
			<div class="col-md-4">
				<img class="img-circle" width="250" height="250" src="5.jpg" alt="fourth picture">
				<h2>咏柳</h2>
				<p>碧玉妆成一树高，万条垂下绿丝绦。</p>
				<p>不知细叶谁裁出，二月春风似剪刀。</p>
				<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</div>		
			<div class="col-md-4">
				<img class="img-circle" width="250" height="250" src="6.jpg" alt="fourth picture">
				<h2>秋夕</h2>
				<p>银烛秋光冷画屏，轻罗小扇扑流萤。</p>
				<p>天阶夜色凉如水，坐看牵牛织女星。</p>
				<p><a class="btn btn-default" href="#">View details &raquo;</a></p>
			</div>		
		</div>	
		
	</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
