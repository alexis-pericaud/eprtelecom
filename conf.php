<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ACTIVITES/CONFERENCES</title>
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
				var obj = document.getElementById('sv');

				if(obj.offsetHeight)          {divHeight=obj.offsetHeight;}
				else if(obj.style.pixelHeight){divHeight=obj.style.pixelHeight;}
				//document.getElementById('height_info').innerHTML = divHeight;;
				alert(divHeight);
			}
		</script>
		<!-- get the height of divs--end -->
		
		<!-- popup info--beginning -->
		<script type="text/javascript">
			function ShowPopup(hoveritem)
			{
				hp = document.getElementById("rv");

				// Set position of hover-over popup
				hp.style.top = 3 ;
				hp.style.left = 2450;

				// Set popup to visible
				hp.style.visibility = "visible";
			}

			function HidePopup()
			{
				hp = document.getElementById("rv");
				hp.style.visibility = "hidden";
			}
		</script>
		<!-- popup info--end -->
		
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
							<li><a href="conf.php" style="color:#fff;">conf&eacute;rences</a></li> 
							<li><a href="visites.php">visites</a></li> 							
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
					<h2><a href="activites.php">Activit&eacute;s</a> > Les Conf&eacute;rences</h2>					
					
					<!-- <button onClick="getHeight();">get height</button>	-->
						
					<p style="text-align:justify;"> Ci-dessous les conf&eacute;rences que le club a organis&eacute;es jusqu'&agrave; pr&eacute;sent.</p>			
					<table>
						<tr>
							<td><figure class="marg_right2">
								<img src="images/conf.png" style="width:90px; background-color:white; border:2px solid red; border-radius:10px;" alt="" />
							</figure>
							</td>
							<td style="vertical-align:middle;">
								<a onclick="toggle('matinale')" style="cursor: pointer; color:none;"><h3 style="font-size:1.5em;">Matinale de l’innovation à l’incubateur Telecom ParisTech - le 30/04/2013</h3></a>								
								<div id="matinale" class="hidden">
								<p style="text-align:justify;">La conférence était animée par Baptiste Hamel, ex-Oséo Innovation,
								et fondateur d'une structure de conseil indépendante. Baptiste Hamel a présenté les différents financements
								externes et les aides auxquels peuvent recourir les start-ups. Innovation technologique ou marketing, 
								développement à l'international, développement durable ou recherches de fonds propres, mieux vaut se
								renseigner pour s'y retrouver dans la jungle des dispositifs et des acteurs !<br />
								Dans un premier temps, Baptiste Hamel a décrit les différents dispositifs d’aide publique,
								avec leurs critères d’éligibilité et leurs conditions d’accès. Différents mécanismes de financement
								sont accessibles, dans l’ordre chronologique du développement de l’entreprise :<br /><br />
								1) Le crédit impôt recherche : seule la présence d’ingénieurs et de doctorants salariés
								(pas de stagiaires ou de techniciens) rend éligible à ce crédit d’impôt. Il est au pro rata
								du temps passé pour la recherche.<br />
								2) Le crédit impôt innovation : de même, il faut avoir des salariés, c’est une baisse
								des charges sur les salaires, dédiée à la R&D, valable pendant les 7 premières années 
								de l’entreprise.<br /><br />
								Différents échelons existent pour les aides :<br /><br />
								1) L’Etat : OSEO (qui devient la BPI)<br />
								2) La région : CFI (Centre Francilien de l’Innovation) qui délivre l’AIR
								(plutôt pour des projets orientés développement durable et social)<br />
								3) Cofinancé par Etat et région : AIMA (mais il faut obligatoirement
								prévoir de la sous-traitance)<br />
								4) La ville : incubateurs, PIA<br /><br />
								Dans un deuxième temps, Baptiste Hamel a détaillé les différences entre
								Love Money (family & friends ou subventions), Business Angels (particuliers
								qui peuvent financer des start-ups très en amont de leur développement), et
								Capital Risque (fonds d’investissement). 
								</p>
								</div>
							</td>						
						</tr>
					</table>
					<br />					
					<table>
						<tr>
							<td><figure class="marg_right2">
								<img src="images/conf.png" style="width:90px; background-color:white; border:2px solid red; border-radius:10px;" alt="" />
							</figure>
							</td>
							<td class="p_sv" style="vertical-align:middle;">
								<a onclick="toggle('sv')" style="cursor: pointer; color:none;"><h3 style="font-size:1.5em;">Sur la route de Silicon Valley - le 25/06/2013</h3></a>								
								<div id="sv" class="hidden">
								<p style="text-align:justify;">Notre idée était de mettre en lumière 3 jeunes structures présentes en France 
								et qui permettent aux entrepreneurs d’être guidés par des mentors expérimentés vers le chemin de la réussite,
								à l’instar du pionner californien Y Combinator. Pour l’occasion, nous avons eu la joie de recevoir 6 personnalités
								baignant au quotidien dans les eaux mouvementées de l’entreprenariat.</p>
								
								<h4 style="font-size:1.5em; color:white; text-decoration:underline;">Le Founder Institute : entre passion et besoin</h3><br />
								
								<h4 style="color:white;"><strong>C'est quoi?</strong></h4>
								<p style="text-align:justify;">Ouvertement empreint d’un esprit US, le Founder Institute propose un cursus en
								14 semaines composé de cours donnés par des entrepreneurs reconnus. Ces experts viennent partager leur expérience
								à travers des conférences où ils discutent avec les participants, répondent à leurs questions et donnent leur avis
								sur les projets des uns et des autres.</p>
								<p style="text-align:justify;">La structure s’appuie sur un réseau d’environ 80 mentors actifs qui viennent
								régulièrement et certains décident même d’investir dans les projets qui les ont séduits.</p>
								<p style="text-align:justify;">Si vous décidez de rejoindre l’aventure, vous pourrez peut-être croiser
								Phil Libin (fondateur d’Evernote), Steve Ballmer, Marc Simoncini, Jacques-Antoine Granjon, Xavier Niel,
								Jonathan Benassaya (cofondateur de Deezer), Philippe Spruch (PDG de LaCie) et bien d’autres encore.</p>
								<p style="text-align:justify;">Il existe aujourd’hui 20 filiales du Founder Institute dans le monde entier et pour la
								branche parisienne, toutes les sessions ont lieu  chez Microsoft.</p>
								<p style="text-align:justify;">La formation au Founder Institute touche à tous les points difficiles de la
								création d’entreprise de telle façon que chaque semaine permet d’aborder un nouveau sujet important. On retrouve
								3 grands thèmes :
								<ul style="list-style-type:disc; padding-left:2%;">
									<li> l'idée </li>
									<li> le produit </li>
									<li> la communication </li>
								</ul>
								</p>
								<p style="text-align:justify;">Notez que les mentors attendent un travail conséquent des participants qui pourront alors mettre en application
								tous les bons conseils prodigués. Vous l’aurez donc compris : au Founder Institute, il ne s’agit pas de théorie
								mais bien de pratique, le tout adapté au projet et à la problématique de chacun.</p>
								
								<h4 style="color:white;"><strong>Comment y entrer ?</strong></h4>
								<p style="text-align:justify;">Le seul critère d’entrée est de réussir un test propre au Founder Institute et appelé
								« test de capacité entrepreneuriale ». Il permet entre autres de tester la stabilité émotionnelle,
								l’ouverture aux autres, la capacité d’écoute et la flexibilité. Pour information, ce test présente
								un taux de réussite de 60% et permet notamment de s’assurer que les porteurs de projets seront en
								mesure de collaborer dans les meilleures conditions avec l’équipe du FI.</p>
								<p style="text-align:justify;">Le Founder Institute est une des rares structures où vous pouvez venir
								seul avec votre projet et d’ailleurs, beaucoup trouvent leurs partenaires à la sortie.</p>
								<p style="text-align:justify;">Que vous ayez un profil technologique ou que vous soyez plutôt orientés
								marketing/business, vous y serez bienvenus même si les founders sont à dominante business (30% seulement
								ont un profil technologique).</p>
								
								<h4 style="color:white;"><strong>Quand y entrer ?</strong></h4>
								<p style="text-align:justify;">Si vous n’avez pas encore construit de business plan, pas de panique,
								les portes du Founder Institute vous restent grandes ouvertes : une simple idée suffit. Situé beaucoup
								plus en amont que l’Accélérateur, le Founder Institute propose de vous donner toutes les clés pour savoir
								si l’idée de génie que vous pensez avoir est la bonne et si elle vaut le coup de se lancer.</p>
								<p style="text-align:justify;">Votre passage par le Founder Institute habillera votre projet d’une vraie
								proposition de valeur, d’une définition très précise des besoins, d’un pitch et d’une vision.</p>
								
								<h4 style="color:white;"><strong>Les valeurs</strong></h4>
								La passion est un élément essentiel à la survie de son projet car c’est elle qui vous empêchera de tout
								abandonner à la moindre difficulté et sans elle, le porteur de projet risque de se lancer pour les mauvaises
								raisons. Il est donc primordial de choisir un projet qui fasse sens pour vous.</p>
								<p style="text-align:justify;">Tout est une question de besoin et non pas d’idée selon Bruno Lévy, spécialiste
								en la matière : il s’agit d’avoir une idée qui réponde à un besoin. Vous aurez tout le loisir de travailler sur
								cette notion fondamentale de besoin au Founder Institute où un bon entrepreneur est vu comme celui qui ne
								s’accroche pas à son idée mais au besoin. A défaut de savoir si les clients aiment notre idée, on se demandera
								plutôt pourquoi ils la trouvent bonne.</p>
								
								<h4 style="color:white;"><strong>Le business model</strong></h4>
								<p style="text-align:justify;">Il faut certes passer un test mais également débourser la somme de 995€ pour
								pouvoir bénéficier de ces 14 semaines d’accompagnement.</p>
								<p style="text-align:justify;">N.B. Mesdames, notez que pour chaque promo, 1 élue parmi toutes les participantes,
								aura le privilège de bénéficier d’une bourse offrant la gratuité de la formation et ceci afin d’encourager
								davantage la création d’entreprise au féminin.</p>
								<p style="text-align:justify;">Les participants qui sortent du Founder Institute doivent aussi signer un BSA
								qui est un droit à prendre des actions à terme (en cas d’opération sur le capital). Pour parler chiffre,
								cela concerne plus exactement 3.5% du capital valorisé à la 1ère levée de fonds.</p>
								<p style="text-align:justify;">Pour chaque promotion, ces 3.5% virtuels (qui sont une option d’achat) sont mis
								dans un pot commun qui sera partagé en 3 lors de sorties sur le capital :
								<ul style="list-style-type:disc; padding-left:2%;">
									<li>fbusine ira au Founder Institute et leur permettra éventuellement de toucher une rémunération
									supplémentaire</li>
									<li>1/3 ira aux mentors ayant participé à la session</li>
									<li>1/3 reviendra à tous les participants</li>
								</ul>
								</p>
								<p style="text-align:justify;">Par ce système basé sur la réussite, le Founder Institute espère encourager la
								collaboration et l’entraide dans l’objectif de rompre le phénomène de solitude bien connu des entrepreneurs.</p>
								<p style="text-align:justify;">Pour en savoir plus : <a href="http://fi.co/" target="_blank">http://fi.co/</a></p>
								
								<h4 style="font-size:1.5em; color:white; text-decoration:underline;">L’Accélérateur  :  de
								l’accompagnement sur-mesure à l’écoute du marché</h4><br />
								
								<h4 style="color:white;"><strong>C’est quoi ?</strong></h4>
								<p style="text-align:justify;">Comme son nom l’indique, il s’agit d’un accélérateur dont
								l’accompagnement se fait la plupart du temps en 2 phases :
								<ul style="list-style-type:disc; padding-left:2%;">
								<li>une 1ère phase intensive de 4 mois
								permet de passer en revue l’ensemble des aspects du business à raison de 2 à 3 rdv par semaine
								avec 4 coaches-partners impliqués à temps plein</li>
								<li>la 2nde phase, très opérationnelle et concrète, dépend du besoin de la startup
								(ex : refonte d’un site, optimisation marketing, travail commercial etc.)</li>
								</ul>
								</p>
								<p style="text-align:justify;">Un travail sur la partie financière se fera une fois le business model fixé afin de monter un business plan.
								Vous pourrez également compter sur les coaches pour vous aider à lever des fonds en cas de besoin de financement
								(100% des startups chez l’Accélérateur qui souhaitaient lever des fonds ont pu le faire).</p>
								<p style="text-align:justify;">L’Accélérateur compte aujourd’hui 34 startups à son actif.</p>
								
								<h4 style="color:white;"><strong>Comment y entrer ?</strong></h4>
								<p style="text-align:justify;">Pour ce qui est des critères de choix, l’Accélérateur parie essentiellement
								sur les hommes. Le bon entrepreneur y est décrit en ces termes : il doit être pragmatique, humble et savoir
								écouter.</p>
								<p style="text-align:justify;">Le marché est également pris en compte au niveau de la sélection. Les coaches
								vont donc examiner le marché pour voir s’il serait intéressant de s’y lancer et s’il entre dans leur champ
								d’expertise. Enfin, l’approche que vous choisissez d’adopter sur votre sujet a toute son importance car vous
								devez montrer et convaincre que vous êtes capables de porter ce projet.</p>
								<p style="text-align:justify;">Pour mettre toutes les chances de votre côté, il est fortement recommandé
								de vous présenter avec une équipe déjà constituée. Il faut donc venir en groupe et dans le cas vous n’avez
								réussi à trouver personne, il y aura éventuellement moyen que les coaches vous trouvent des contacts, l’important
								étant pour vous de ne pas vouloir rester seul à tout prix.</p>
								
								<h4 style="color:white;"><strong>Quand y entrer ?</strong></h4>
								« L’Accélérateur intervient un peu plus en aval que les autres accélérateurs, au moment où le produit est
								déjà en place et où il faut accélérer. » dixit Guillaume Truttmann.</p>
								
								<h4 style="color:white;"><strong>Les valeurs</strong></h4>
								<p style="text-align:justify;">Selon les mots de Guillaume Truttman, « une startup a plus besoin d’être accompagnée et d’être correctement
								couvée par des gens qui ont de l’expérience et qui vont s’impliquer que de beaucoup d’argent. »</p>
								<p style="text-align:justify;">L’Accélérateur est aligné avec le besoin de la société et adapte en fonction
								le rythme d’accompagnement. En effet, plus vous nécessiterez d’être suivis, plus les coaches seront présents
								pour vous, ce qui signifie que la fréquence des rencontres varie d’une équipe à l’autre.</p>								
								<p style="text-align:justify;">De même, l’accompagnement proposé s’adaptera à la problématique de chaque
								entrepreneur.</p>
								<p style="text-align:justify;">Enfin, si vous souhaitez tenter l’aventure mais que vous hésitez encore, rien
								ne vous empêche de prendre dès à présent contact avec l’Accélérateur afin d’échanger préalablement sur votre
								projet pour lequel vous obtiendrez une réponse très rapidement.</p>
								
								<h4 style="color:white;"><strong>Le business model</strong></h4>
								<p style="text-align:justify;">L’accélérateur est une école de startup avec un modèle de fonds d’investissement
								où les 4 fondateurs prennent des participations (en général 8 à 10% du capital) en échange d’un accompagnement
								de la startup tout au long de sa vie.</p>
								<p style="text-align:justify;">Pour en savoir 
								plus : <a href="http://laccelerateur.fr/" target="_blank">http://laccelerateur.fr/</a></p>
								
								<h4 style="font-size:1.5em; color:white; text-decoration:underline;">Spark et Bizspark</h4><br />
								<p style="text-align:justify;">Spark est le tout nouvel incubateur de Microsoft (que nous avons eu la chance de <a href="visites.php" target="_blank">visiter</a> en 2013).
								Le concept est très simple : on arrive avec une idée et l’objectif est de repartir avec un prototype.
								C’est donc sur la création de ce prototype que l’équipe de Spark vous accompagnera.</p>
								<p style="text-align:justify;">Après sélection, entre 10 et 15 équipes sont retenues (la 1ère promo compte 13 équipes). Chaque équipe
								doit être composée de 5 personnes au maximum dont au moins un développeur. Autre critère : il faut avoir
								au moins une technologie Microsoft en projet.</p>
								<p style="text-align:justify;">Pour comprendre l’importance accordée à cette notion de groupe, Roxanne Varza nous explique qu’il faut davantage
								faire confiance à l’équipe qu’au produit dans la mesure où le produit changera nécessairement (concept du pivot).
								Plus globalement, on trouve le programme Bizspark, destiné aux entreprises de moins de 5 ans qui développent un
								produit technologique et dont le CA annuel est inférieur à 1 million de dollars.</p>
								<p style="text-align:justify;">Si vous remplissez ces critères, vous aurez alors droit à des logiciels Microsoft et non Microsoft gratuits
								pendant 3 ans mais aussi à de la visibilité. Grâce à ses 160 partenaires, Bizspark propose différents types de
								solutions pouvant intéresser les startups comme par exemple la possibilité de profiter de 60 000 $ d’hébergement
								Azur (valable pour une cinquantaine de startups par an en France).</p>
								<p style="text-align:justify;">Pour en savoir 
								plus : <a href="http://spark.microsoft.fr/" target="_blank">http://spark.microsoft.fr/</a><br />
								
								<hr style="background-color:#fff; height:1px; width:90%;" /></p>
								<p style="text-align:justify;">Tous tenons à adresser des remerciements tout particuliers
								à nos 6 invités qui nous ont offert des échanges passionnés et passionnants, à Yves Poilane (directeur
								de Télécom ParisTech) qui nous a fait l’honneur de sa présence ainsi qu’au public qui ne fut pas avare
								en questions pour notre plus grand plaisir.</p>
								
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
