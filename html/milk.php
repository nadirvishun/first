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
    <link href="../bootstrap/bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
	<link href="../bootstrap/bootstrap-3.0.0/assets/css/docs.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/you.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
			<div class="container">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">优格尔</a>
				</div>
				<div class="">
					<ul class="nav navbar-nav">
						<li><a href="#">首页</a></li>
						<li><a href="#">关于我们</a></li>
						<li><a href="#">联系我们</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">招商加盟<span class="caret"></span></a>
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

		<div class="container">
			<div class="row show-grid">
                <!--左侧菜单-->
				<div class="col-md-3">
				<?php
					$xml=simplexml_load_file("../menu.xml");
					$category=$xml->menu->category;
						print("<li>");
						print($category["type"]);
						print(":");
						//左右关联
						print("<ul class=\"subcategory\" id=\"myTab\">");
						foreach($category->subcategory as $subcategory){
							echo "<li><a data-toggle=\"tab\" href=\"#";
							print($subcategory["type"]);
							echo"\">";
							print($subcategory["type"]);
							print("</a></li>");
							print("<li class=\"divider\">");
							print("</li>");
						}
						print("</ul>");
						echo ("</li>");
				?>
				</div>
					
				<!--右侧内容-->
				<div class="col-md-9">
				<!--轮显-->
				<div  class="container">
		<div id="mysubcarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mysubcarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mysubcarousel" data-slide-to="1" ></li>
				<li data-target="#mysubcarousel" data-slide-to="2" ></li>
			</ol>
			<div  class="carousel-inner">
				<div class="item active">
					<img  src="../img/12.jpg" width="900" height="280" alt="first slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>炫彩</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="2.jpg" width="900" height="280" alt="second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>立方</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-info" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="3.jpg" width="900" height="280" alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>心动</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-success" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
			</div>	
			<a class="left carousel-control" href="#mysubcarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#mysubcarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>

					<!--具体内容-->
					 <!--左右关联-->
					 <div class="tab-content" id="myTabContent">
						<?foreach($category->subcategory as $subcategory):?>
        				<div id="<?=$subcategory["type"];?>" class="tab-pane fade">
						<div class="row show-grid">
						<?foreach($subcategory->item as $item):?>
						<!--一行显示4个产品-->
							<div class="col-md-3">
							<?=$item["name"];?>
    				    	</div>
						<?endforeach;?>
						</div>
						</div>
						<?endforeach;?>
					</div>
				</div>
			</div>
		</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
