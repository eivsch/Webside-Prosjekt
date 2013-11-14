<!DOCTYPE html>
<html>
	<head>
		<title>3D-direktoratet, din informasjonskilde til 3D-printing</title>
		<link rel="stylesheet" title="main" type="text/css" href="horizontalMenuStyle.css">
		<link rel="stylesheet" title="main" type="text/css" href="forslag.css">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="utf-8" src="horizontalMenuScript.js"></script>
	</head>
	<body>
		<script>
			$(document).ready(function(){
			$('#normal').attr("disabled",true);
			$('#hemma').click(function(){
			$(this).attr("disabled",true);
			$('#alpha').css('font-size', '+=10');
			$('#alpha').css('font-family', 'sans-serif');
			$('#normal').removeAttr("disabled");
			});
			$('#normal').click(function(){
			$('#alpha').css('font-size', '-=10');
			$('#alpha').css('font-family', 'Times New Roman');
			$('#hemma').removeAttr("disabled");
			});
			});
		</script>
		<div id="header">
		<header>
			<h1>3D-direktoratet</h1>
			<button id="normal">Vanlig</button>
			<button id="hemma">Universell utforming</button>
		</header>
		<nav id="sse3">
		<div id="sses3">
			<ul>
				<li><a href="index.php">Startsiden</a></li>
				<li><a href="index.php?p=modeller">Modeller</a></li>
				<li><a href="index.php?p="></a></li>
				<li><a href="index.php?p="></a></li>
			</ul>
		</nav>
		</div>
		<div id="content">

			<?php
			$pages_dir = 'pages';
			if (!empty($_GET ['p'])) {
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);

				$p = $_GET['p'];

				if(in_array($p.'.inc.php', $pages)) {
					include($pages_dir.'/'.$p.'.inc.php');
				}else {
					echo 'Sorry, page not found.';
				}
			    }else {
				    include($pages_dir.'/Home.inc.php');
				}
			?>
		</div>
	</body>
</html>