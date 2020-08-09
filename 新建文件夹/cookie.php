<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.div1{
			background-color: yellow;
			height:100px;

		}
		.div2{
			background-color: blue;
			height:100px;

		}
		.div1 a {
			float: right;
			
		}
	</style>
</head>
<body>
	<?php if (empty($_COOKIE['close_ad']) || $_COOKIE['close_ad'] !== '1'): ?>
	<div class="div1">
		<a  href="close.php">
			不再提示
		</a >
	</div>

		
	<?php endif ?>
	
	<div class="div2">
		
	</div>
</body>
</html>