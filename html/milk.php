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
				<div class="col-md-3">
				<?php
					$xml=simplexml_load_file("../menu.xml");
					$category=$xml->menu->category;
						print("<li>");
						print($category["type"]);
						print(":");
						print("<ul class=\"subcategory\" id=\"myTab\">");
						foreach($category->subcategory as $subcategory){
							echo "<li><a data-toggle=\"tab\" href=\"#$subcategory[type]\">";
							print($subcategory["type"]);
							print("</a></li>");
							print("<li class=\"divider\">");
							print("</li>");
						}
						print("</ul>");
						echo ("</li>");
				?>
				</div>
					
				<div class="col-md-9">
					 <div class="tab-content" id="myTabContent">
        				<div id="鲜奶" class="tab-pane fade">
      				    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
    				    </div>
					</div>
				</div>
			</div>
		</div>
	
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
