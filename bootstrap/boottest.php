<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<!--Bootstrap-->
		<link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
		<!--[if lt IE 9]>
			<script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
			<script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div id="fb-root"></div>
		<script>(function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(d.getElementById(id)) return;
			js=d.createElement(s);js.id=id;
			js.src="//connect.facebook.net/en_US/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js,fjs);
		}(document,'script','facebook-jssdk'));
			
		</script>
		<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
		<script src="//code.jquery.com/jquery.js"></script>
		<!--Include all compiled plugins(below),or include individual files as needed -->
		<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
		
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<ul class="nav navbar-nav">
		<li><a href="new.html" class="navbar-brand"><img src="logo.pgn"></a></li>
		<li class="active"><a href="#">Home</a></li>
		<li><a href="price.html">Price</a></li>
		<li><a href="contact.html">Contact</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social<b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li class="socials"><g:plusone annotation="inline" width="150"></g:plusone></li>
				<li class="socials"><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-colorscheme="light" data-layout="standard" data-action="like" data-show-faces="true" data-send="false"></div></li>
				<li class="socials"><a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
		<script>!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){
				js=d.createElement(s);
				js.id=id;
				js.src="//platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
			}
		}(document,"script","twitter-wjs");
		</script>
				</li>
			</ul>
		</li>
		</ul>
	 <script type="text/javascript">
   		(function() {
    	 var po = document.createElement('script'); po.type = 'text/javascript';po.async = true;po.src = 'https://apis.google.com/js/plusone.js';
     	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 		 })();
	 </script>

	</body>
</html>
