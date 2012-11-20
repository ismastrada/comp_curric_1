<?php
			$title = "Site.com";
			$subtitle = "este é um site em PHP";
			echo $title. " - ". $subtitle;
			?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta charset ="UTF-8" />
		<title><?php
		echo $title. " - ". $subtitle;
		?>
		</title>
	</head>
	<body>
		<div id="rodape">
			&reg copyright <?php 
			echo $title. " - ". date("Y");
			?>
		</div>
		
	</body>
</html>

