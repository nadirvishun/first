<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>bootstrap¸ñÕ¤ÏµÍ³</title>
	<link href="../../bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
	<link href="../../bootstrap-3.0.0/assets/css/docs.css" rel="stylesheet">
	<link href="grid.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container">
		<div class="page-header">
			<h1>Bootstrap ¸ñÕ¤</h1>
			<p class="text-info">¿ìËÙ¹¹½¨Bootstrap¸ñÕ¤ÏµÍ³</p¡>
		</div>
		<h3>3¸öµÈ¿íÁĞ</h3>
		<p>¿ÉÒÔ×Ô¶¯ÊÊÓ¦´óÆÁÄ»</p>
		<div class="row show-grid">
			<div class="col-md-4">4</div>
			<div class="col-md-4">4</div>
			<div class="col-md-4">4</div>
		</div>

		<h3>3¸ö²»µÈ¿íÁĞ</h3>
		<p>use english,what the fuck!</p>
		<div class="row show-grid">
			<div class="col-md-3">3</div>
			<div class="col-md-6">6</div>
			<div class="col-md-3">3</div>
		</div>
		<h3>2 columns</h3>
		<p>yes,you can use 12 row</p>
		<div class="row show-grid">
			<div class="col-md-8">8</div>
			<div class="col-md-4">4</div>
		</div>
		<h3>single columns</h3>
		<p>It's necessary?</p>
		<div class="row show-grid">
			<div class="col-md-12">12</div>
		</div>

		<hr/>
		
		<h3>Ç¶Ì× nested column</h3>
		<p>nested column is short,but also has 12 rows</p>
		<div class="row show-grid">
			<div class="col-md-8">8
				<div class="row show-grid">
					<div class="col-md-6">6</div>
					<div class="col-md-6">6</div>
				</div>
			</div>
			<div class="col-md-4">4</div>
		</div>
		
		<h3>mobile also used</h3>
		<p>use "col-xs-*"and"col-md-*"</p>
		<div class="row show-grid">
			<div class="col-md-8 col-xs-12">8/12</div>
			<div class="col-md-4 clo-xs-6">4/6</div>		
		</div>	
		<div class="row show-grid">
			<div class="col-md-4 col-xs-6">6/4</div>
			<div class="col-md-4 col-xs-6">6/4</div>
			<div class="col-md-4 col-xs-6">6/4</div>
		</div>
		<div class="row show-grid">
			<div class="col-xs-6">6</div>
			<div class="col-xs-6">6</div>
		</div>
	</body>
</html>
