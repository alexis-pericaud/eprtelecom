<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ACTIVITES/VISITES</title>
		<?php include "head_content.php" ?>
		
		<!-- toggle div script--beginning -->
		<script type="text/javascript"> 
			function toggle(id)
			{
				var element = document.getElementById(id);
				element.className = (element.className == 'hidden') ? '' : 'hidden';
			}
		</script>
		<!-- toggle div script--end -->
		
		<!-- get the height of divs--beginning -->
		<script type="text/javascript">
			function getHeight()
			{
				var divHeight;
				var obj = document.getElementById('camping');

				if(obj.offsetHeight)          {divHeight=obj.offsetHeight;}
				else if(obj.style.pixelHeight){divHeight=obj.style.pixelHeight;}
				//document.getElementById('height_info').innerHTML = divHeight;;
				alert(divHeight);
			}
		</script>
		<!-- get the height of divs--end -->		
	</head>
	<body id="page4">
		<div class="main">
<!--header -->
			<header>
				<div class="wrapper">					
					<table style="width:100%;">
						<tr>
							<td style="vertical-align:middle;">
								<h1><a href="index.php" id="logo"/></a></h1>
							</td>
							<td style="vertical-align:middle;">
								<a href="https://www.facebook.com/pages/Club-Entreprenariat-de-T%C3%A9l%C3%A9com-Paristech/164844697022082"
								title="Facebook" target="_blank"><img src="images/icon1.jpg" alt="" style="margin-top:15px;" ></a>
							</td>
							<td style="vertical-align:middle;">
								<a href="https://twitter.com/eprtelecom" title="Twitter" target="_blank"><img src="images/icon2.jpg" alt=""
								style="margin-top:15px;" ></a>
							</td>														
						</tr>
					</table>
				</div>
				
				<nav>
					<ul id="menu">
					<li><a class="native" href="index.php"><span>Accueil</span></a></li>
					<li><a class="native" href="actu.php"><span>Actu</span></a></li>						
					<li class="active sousmenu"><a class="native" href="activites.php"><span>Activités</span></a>
						<ul class="petitmenu">																					
							<li><a href="ateliers.php">ateliers</a></li> 
							<li><a href="conf.php">conf&eacute;rences</a></li> 
							<li><a href="visites.php" style="color:#fff;">visites</a></li> 							
						</ul>
					</li>
					<!-- <li><a href="miniforum.php"><span>Discussions</span></a></li> <!-- ss menu deroulant --> 
					<li><a class="native" href="equipe.php"><span>L'&Eacute;quipe</span></a></li>
					<li class="last"><a class="native" href="contact.php"><span>Contact</span></a></li>
					</ul>
				</nav>
			</header>
<!--header end-->
<!--content -->
			<article id="content">
				<div class="wrapper">
					<h2><a href="activites.php">Activit&eacute;s</a> > Les Visites</h2>					
					<!-- uncomment to get height of the div specified in the script 
					<button onClick="getHeight();">get height</button>	
					-->
					<p style="text-align:justify;"> Ci-dessous les visites que le club a organis&eacute;es jusqu'&agrave; pr&eacute;sent.</p>					
					<table>
						<tr>
							<td><figure class="marg_right2">
								<img src="images/visite.png" style="width:50px; background-color:white; border:2px solid red; border-radius:10px;" alt="" />
							</figure>
							</td>
							<td style="vertical-align:middle;">
								<a onclick="toggle('ms')" style="cursor: pointer; color:none;"><h3 style="font-size:1.5em;">Microsoft Spark - le 11/04/2013</h3></a>								
								<div id="ms" class="hidden">
								<p style="text-align:justify;">En mars 2013, Microsoft a ouvert 
								<a href="http://spark.microsoft.fr/#introduction" target="_blank">Spark</a>,
								un espace de travail collaboratif situé dans le 2ème
								arrondissement de Paris. Il est dédié aux start-ups,
								aux développeurs et aux designers. Il s'agit donc d'un
								incubateur, mais pas seulement. L'espace propose également
								des séances de coaching tant économiques que techniques aux start-ups.
								<br />La visite organisée par le Club a été une occasion de visiter ce
								lieu au cœur de l’actualité et d’échanger avec les 
								participants à plusieurs projets incubés chez Spark.<br /><br />
								<img src="images/spark.jpg" style="width:650px; height:auto;" />
								</p>
								</div>
							</td>						
						</tr>
					</table>
					<br />
					<table>
						<tr>
							<td><figure class="marg_right2">
								<img src="images/visite.png" style="width:50px; background-color:white; border:2px solid red; border-radius:10px;" alt="" />
							</figure>
							</td>
							<td style="vertical-align:middle;">
								<a onclick="toggle('camping')" style="cursor: pointer; color:none;"><h3 style="font-size:1.5em;">Camping - le 16/05/2013</h3></a>
								<div id="camping" class="hidden">
								<p style="text-align:justify;">Cette visite a permis de découvrir l’accélérateur de start-ups 
								<a href="http://www.lecamping.org/fr/" target="_blank">Le Camping</a>,
								au plein cœur du « Silicon Sentier» !
								Le Camping propose un programme de 6 mois aux jeunes entrepreneurs,
								avec pour ambition de donner naissance à des startups ouvertes à l’international.<br /><br />
								<img src="images/camping1.png" style="width:530px;" /><br /><br />
								Après une découverte des opportunités offertes par le Camping, le Club a eu le privilège d’assister aux pitchs
								de plusieurs projets développés par des entrepreneurs au sein du Camping, encadrés pour l’occasion par Phil Waknell.
								<br /><br />
								<img src="images/camping2.jpg" style="width:530px;" /><br /><br />
								Nous avons pu discuter avec les équipes de différents projets accélérés : 
								<a href="http://www.lingocracy.com/" target="_blank">Lingocracy</a>, qui permet de transformer 
								n’importe quel article web en une leçon de langue personnalisée,
								<a href="http://znapp.it/" target="_blank">Znappit</a>, un service de vidéo collaboratif qui crée 
								des souvenirs vidéo collectifs d’un événement à partir des contributions individuelles des participants. 
								</p>
								</div>
							</td>						
						</tr>
					</table>					
				</div>
			</article>
		</div>
		
			
		<div class="main">
<!--content end-->
<!--footer -->			
			<hr style="background-color:darkgray" /> 
			<footer>	
				<?php include "footer.php" ?>
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
