<!DOCTYPE html>
<html>
	<head>
		<title>3D-direktoratet, din informasjonskilde til 3D-printing</title>
		<link rel="stylesheet" title="main" type="text/css" href="styles/external_styles/horizontalMenuStyle.css">
		<link rel="stylesheet" title="main" type="text/css" href="styles/forslag.css">
                <link rel="stylesheet" title="main" type="text/css" href="styles/logo.css">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="utf-8" src="scripts/external_scripts/horizontalMenuScript.js"></script>
                <script src="external_scripts/jquery-1.10.2.js"></script>
                <script charset="utf-8" src="scripts/scriptES.js"></script>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
			$('#normal').attr("disabled",true);
			$('#hemma').removeAttr("disabled");
			});
			});
		</script>
		<div id="header">
		<header>
			<div id="logo">
			<span id="tre">3</span><span id="d">D</span><div id="dott">&nbsp;</div>
                        <span id="prin">prin</span><span id="t">t</span>
			</div>
                        <button class="buttonStyle" id="hemma">A</button>
			<button class="buttonStyle" id="normal">a</button>
			
		</header>
		<nav id="sse3">
		<div id="sses3">
			<ul>
				<li><a href="index.php">Startsiden</a></li>
				<li><a href="index.php?p=modeller">Modeller</a></li>
				<li><a href="index.php?p=sporsmol">Spørsmål</a></li>
				<li><a href="index.php?p=design">Design</a></li>
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
                
             <footer>
                 
                 <div class="footerContent">
                     <ul>
                         <li><p class="overskrift">Navigasjon</p></li>
                         <li><a class="navigasjon" href="index.php">Startsiden</a></li>
                         <li><a class="navigasjon" href="index.php?p=modeller">Modeller</a></li>
			 <li><a class="navigasjon" href="index.php?p=sporsmol">Spørsmål</a></li>
			 <li><a class="navigasjon" href="index.php?p=design">Design</a></li>
                     </ul></div>
                 <div class="footerContent">
                     <ul>
                         <li><p class="overskrift">Blabla</p></li>
                         <li>bla</li>
                         <li>bla</li>
                         <li>bla</li>
                         <li>bla</li>
                     </ul></div>
                <div class="footerContent">
                     <ul>
                         <li><p class="overskrift">Kontakt</p></li>
                         <li>Kundeservice@3dprint.com</li>
                         <li>+47 83475647</li>
                         <li><img id="facebook" src="bilder/ikoner/facebook.png"></li>
                    </ul></div>
                 
                 <p id="copyright">&copy; <em>3d-Print.no</em></p>
             </footer>
	</body>
</html>