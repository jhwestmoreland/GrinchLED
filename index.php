<!DOCTYPE html>
<html>
	<head>
		<title> Grinch with a heart</title>
		<meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="assets/css/main.css" />
                <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <link rel="shortcut icon" href="favicon.png" type="image/png">

		<script type="text/javascript">
			$(document).ready(function(){
				$('#clickON').click(function(){
					var a = new XMLHttpRequest();
					<!-- Goes to pinon.php -->
					a.open("GET","pinon.php");
					a.onreadystatechange=function(){
						if(a.readyState==4){
							if(a.status == 200){
							}
							else alert("HTTP ERROR");
						}
					}
					a.send();
				});
				$('#clickOFF').click(function(){
                                        var a = new XMLHttpRequest();
					<!-- Goes to pinoff.php -->
                                        a.open("GET","pinoff.php");
                                        a.onreadystatechange=function(){ 
                                                if(a.readyState==4){ 
                                                        if(a.status == 200){ 
                                                        }
                                                        else alert("HTTP ERROR");
                                                }
                                        }
                                        a.send();
                                });
				$('#heartON').click(function(){
				<?php
       					system("gpio -g mode 17 out");
        				$pulse=0;

        				$val = $_GET["quantity"];

					if($val >= 1){
        					for($pulse=0; $pulse <= $val/2; $pulse++){
                					system("gpio -g write 17 1");
                					usleep(100000);
                					system("gpio -g write 17 0");
                					usleep(100000);
                					system("gpio -g write 17 1");
                					usleep(100000);
                					system("gpio -g write 17 0");
                					usleep(400000);
        					}
					}
				?>
                                });
			});
		</script>
	</head>

	<body class="is-preload">
	<div id="wrapper">
		<div id="intro">
			<h1 style="color:black;">Grinch with a heart</h1>
			<p style="color:black;">Web-app to control the LED of the Grinch Nutcracker</p>
			<audio controls>
  				<source src="music/MrGrinch.mp3" type="audio/mpeg">
			</audio>
		</div>
		<nav id="nav">
                              	<ul class="links">
                                       	<li class="active"><a>Home Page</a></li>
                                </ul>
				<ul class="icons">
					<li><a href="https://www.youtube.com/watch?v=DD0m9t4WHEQ" class="fa fa-youtube-play" title="The Grinch Trailer"><span class="label">The Grinch Trailer</a></li>
					<li><a href="https://www.netflix.com/title/60000901" target="_blank" title="Netflix: The Grinch" class="fa fa-film"><span class="label">Netflix</span></a></li>
					<li><a href="https://en.wikipedia.org/wiki/How_the_Grinch_Stole_Christmas!" target="_blank" title="Wiki" class="fa fa-wikipedia-w"><span class="label">Wiki</span></a></li>
					<li><a href="tel:712-832-8555" title="Phone Call" class="fa fa-phone"><span class="label">Phone Call</span></a></li>
				</ul>
                </nav>

		<div id="main">
			<header class="major">
				<article>
					<h2>Default</h2>
					<ul class="actions special">
						<li><a class="button" id="clickON">~ON ~</a></li><br>
					</ul><br>
					<ul class="actions special">
						<li><a class="button" id="clickOFF">~OFF~</a></li>
					</ul><br>
					<hr>

					<h2>Heart Beat mode</h2>
					<form action="index.php" method="get">
						<p1>Insert number of pulses</p1>
						<ul class="actions special">
							<input type="number" inputmode="numeric" name="quantity" style="width:100%; text-align:center;"min="1" max="10" placeholder="1-10"/>
						</ul><br>
						<ul class="actions special">
							<input type="submit" value="Submit" id="heartON"/>
						</ul><br>
					</form>
				</article>
			</header>
		</div>
	</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

 	</body>

</html>
