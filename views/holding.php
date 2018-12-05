<?php
	// Page served to logged out users
	// can use below to bring in files
	// echo plugins_url( 'assets/css/holding.css', dirname( __FILE__ ) );
?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>Coming Soon!</title>
	<style>
		body { text-align: center; padding: 10px; background: #17423b; color: #eee; }
		h1 { font-size: 50px; }
		body { font: 20px Helvetica, sans-serif; color: #eee; }
		article { display: block; text-align: center; width: 650px; margin: 0 auto; }
		article {
			background: transparent;
			width: 500px;
			height: 200px;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -150px;
			margin-left: -260px;
			text-align: center;
			padding: 30px 10px;
		}
		@media screen and (max-width: 550px) {
			article {
				position: relative;
				left: 0;
				top: 0;
				width: auto;
				height: auto;
				margin: 0;
				}
		}
	  a { color: #dc8100; text-decoration: none; }
	  a:hover { color: #fff; text-decoration: none; }
	</style>
</head>
<body>
	<article>
		<h1>Coming Soon!</h1>
		<div>
			<p>New website on it way, watch this space..</p>
		</div>
	</article>
</body>