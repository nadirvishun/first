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
	<div class="row show-grid">
		<div class="col-md-4">
      <ul id="myTab">
        <li class=""><a data-toggle="tab" href="#home">Home</a></li>
        <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">Dropdown <b class="caret"></b></a>
          <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
            <li><a data-toggle="tab" tabindex="-1" href="#dropdown1">@fat</a></li>
            <li><a data-toggle="tab" tabindex="-1" href="#dropdown2">@mdo</a></li>
          </ul>
        </li>
      </ul>
	</div>
		<div class="col-md-8">
      <div class="tab-content" id="myTabContent">
        <div id="home" class="tab-pane fade">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div id="profile" class="tab-pane fade active in">
          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
        </div>
        <div id="dropdown1" class="tab-pane fade">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div id="dropdown2" class="tab-pane fade">
          <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
        </div>
      </div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	</body>
</html>
