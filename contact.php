<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CONTACT</title>
		<?php include "head_content.php" ?>
	</head>
<body id="page5">
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
					<li class="sousmenu"><a class="native" href="activites.php"><span>Activités</span></a>
						<ul class="petitmenu">																					
							<li><a href="ateliers.php">ateliers</a></li> 
							<li><a href="conf.php">conf&eacute;rences</a></li> 
							<li><a href="visites.php">visites</a></li> 							
						</ul>
					</li>
					<!-- <li><a href="miniforum.php"><span>Discussions</span></a></li> <!-- ss menu deroulant --> 
					<li><a class="native" href="equipe.php"><span>L'&Eacute;quipe</span></a></li>
					<li class="last active"><a class="native" href="contact.php"><span>Contact</span></a></li>
					</ul>
				</nav>
			</header>
<!--header end-->
<!--content -->
			<article id="content">
				<div class="wrapper">
					<h2>Formulaire de contact</h2>
					<form id="ContactForm" action="message_sent.php" method="post">
						<div>
							<div class="wrapper">
								<span>Nom :</span>
								<div class="bg"><input type="text" name="nom" id="id_nom" class="input" required /></div>
							</div>
							<div  class="wrapper">
								<span>E-mail :</span>
								<div class="bg"><input type="email" name="mail" id="id_mail"  class="input" required /></div>								
							</div>
							<div  class="wrapper">
								<span>Objet :</span>
								<div class="bg"><input type="text" name="objet" id="id_objet" class="input" /></div>								
							</div>
							<div  class="textarea_box">
								<span>Message :</span>
								<div id="message" class="bg"><textarea name="message" cols="1" rows="1" id="id_message" required 
								placeholder="Votre message...(pour vous abonner &agrave; notre liste de diffusion, dites-nous le ici)" /></textarea></div>								
							</div>							
							<a class="button1" onClick="document.getElementById('ContactForm').submit()" style="cursor: pointer;">Envoyer</a>
							<a class="button1" onClick="document.getElementById('ContactForm').reset()" style="cursor: pointer;">RAZ</a>						
						</div>
					</form>
					
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