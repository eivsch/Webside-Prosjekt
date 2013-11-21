<?php
	 error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="no">
	<head>
		<title>
                    <?php
				switch($_GET["p"])
			{
			case "modeller":
			echo "Modeller";
			break;
			
			case "sporsmol":
			echo "Spørsmål";
			break;
			
			case "design":
			echo "Design";
			break;
			
			default :
			echo "Startsiden";
			}
			?>
                </title>
		<link rel="stylesheet" title="main" type="text/css" href="styles/external_styles/horizontalMenuStyle.css">
		<link rel="stylesheet" title="main" type="text/css" href="styles/forslag.css">
                <link rel="stylesheet" title="main" type="text/css" href="styles/logo.css">
		<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script charset="utf-8" src="scripts/external_scripts/horizontalMenuScript.js"></script>
                <script charset="utf-8" src="scripts/scriptES.js"></script>
                <meta http-equiv="content-type" content="text/html; charset=UTF-8">
         
                <?php
				switch($_GET["p"])
			{
			case "modeller":
			echo "<link rel='stylesheet' title='main' type='text/css' href='styles/sideStil1.css'>";
			break;
			
			case "sporsmol":
			echo "<link rel='stylesheet' type='text/css' href='styles/form.css'>";
			break;
			
			case "design":
			echo "<link rel='stylesheet' type='text/css' href='styles/stylesheet2.css'>";
			break;
			
			default :
			echo " ";
			}
			?>
	</head>
	<body id="alpha">
		<script>
			$(document).ready(function(){
			$('#normal').attr("disabled",true);
			$('#hemma').click(function(){
			$(this).attr("disabled",true);
			$('.top').css('font-size', '+=10');
			$('.top').css('font-family', 'sans-serif');
                   
                       
			$('#normal').removeAttr("disabled");
                        });
			$('#normal').click(function(){
			$('.top').css('font-size', '-=10');
			$('.top').css('font-family', 'Times New Roman');
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
		</div>
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
                 <div id="footerMargin">
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
                         <li><p class="overskrift">Laget av:</p></li>
                         <li>Simen Arvnes</li>
                         <li>Carl P Reinsnes</li>
                         <li>Thomas Sørmo</li>
                         <li>Eivind Schulstad</li>
                     </ul></div>
                <div class="footerContent">
                     <ul>
                         <li><p class="overskrift">Kontakt</p></li>
                         <li>Kundeservice@3dprint.com</li>
                         <li>+47 83475647</li>
                         <li><a href='https://www.facebook.com/webprosjekt'><img id="facebook" src="bilder/ikoner/facebook.png" alt="facebook-ikon"></a></li>
                    </ul></div>
                 <p id="copyright">&copy; <em>3d-Print.no</em></p>
                 </div>
             </footer>
	</body>
</html>