<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>优格尔鲜奶吧</title>
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

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
	    <?include '../include/header.php';?>
		<div class="container">
			<div class="row ">
                <!--左侧菜单-->
				<div class="col-md-3">
				<div class="bs-sidebar hidden-print affix">
				<div class="container2">
				<?php
					$xml=simplexml_load_file("../data/menu.xml");
					$category=$xml->menu->category;
						//左右关联
						print("<ul class=\"subul\" id=\"myTab\">");
						echo "<li class=\"active\"><a data-toggle=\"tab\" href=\"#";
						print($category["type"]);
						echo"\">";
						print("<h3>");
						print("<span class=\"glyphicon glyphicon-tint\"></span>");						
						print($category["type"]);
						print(":");
						print("</h3>");
						print("<br/>");
						print("</a></li>");
						
						foreach($category->subcategory as $subcategory){
							echo "<li class=\"subli\"><a data-toggle=\"tab\" href=\"#";
							print($subcategory["type"]);
							echo"\">";
							print($subcategory["type"]);
							print("</a></li>");
							print("<li class=\"divider\">");
							print("</li>");
						}
						print("</ul>");
				?>
				</div>
				<!--小贴士-->	
				<?include '../include/left_xts.php';?>
				</div>
				</div>

				<!--右侧内容-->
				<div class="col-md-9">
				<!--轮显-->
				<div  class="container2">
				<div class="container">
		<div id="mysubcarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mysubcarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mysubcarousel" data-slide-to="1" ></li>
				<li data-target="#mysubcarousel" data-slide-to="2" ></li>
			</ol>
			<div  class="carousel-inner smallcarousel">
				<div class="item active">
					<img  src="../img/milk/smallcarousel_milk_1.jpg"   alt="first slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>炫彩</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="../img/milk/smallcarousel_milk_1.jpg"  alt="second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>立方</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-info" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
				<div class="item">
					<img src="../img/milk/smallcarousel_milk_1.jpg"  alt="third slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>心动</h1>
						<p>just some words,I want say nothing!</p>
						<p><a class="btn btn-success" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
				</div>
			</div>	
		</div>
			</div>

					<!--具体内容-->
					 <!--左右关联-->
                     <div class="container">
					 <div class="tab-content" id="myTabContent">
        			<div id="<?=$category["type"];?>" class="tab-pane fade in active">
						<!--先显示全部商品-->
						<div class="row ">
						<?foreach($xml->menu->category->subcategory as $subcategory):?>
							<?foreach($subcategory->item as $item):?>
							<div class="col-md-4">
							<div class="thumbnail smallimg">
								<?foreach($item->img as $img):?>
									<img src="<?=$img?>" >
								<?endforeach?>
								<br/>
								<?=$item["name"]?>
							</div>
							</div>
							<?endforeach;?>
						<?endforeach;?>
						</div>
					</div>
						<!--显示分类商品-->
						<?foreach($category->subcategory as $subcategory):?>
        				<div id="<?=$subcategory["type"];?>" class="tab-pane fade">
						
						<div class="row">
						<?foreach($subcategory->item as $item):?>
						<!--一行显示4个产品-->
							<div class="col-md-4">
							<div class="thumbnail smallimg">
								<?foreach($item->img as $img):?>
									<img src="<?=$img?>" >
								<?endforeach?>
								<br/>
								<?=$item["name"];?>
    				    	</div>
							</div>
						<?endforeach;?>
						</div>
						</div>
						<?endforeach;?>
					</div>
				</div>
				</div>
			</div>
		</div>
		</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
