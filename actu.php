<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ACTU</title>
		<?php include "head_content.php" ?>
	</head>
	<body id="page2">
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
					<li class="active"><a class="native" href="actu.php"><span>Actu</span></a></li>						
					<li class="sousmenu"><a class="native" href="activites.php"><span>Activités</span></a>
						<ul class="petitmenu">																					
							<li><a href="ateliers.php">ateliers</a></li> 
							<li><a href="conf.php">conf&eacute;rences</a></li> 
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
					<div class="col2 marg_right1" style="margin-top:2%;">
						<!-- <h2>Who We Are</h2>
						<div class="wrapper">
							<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
							<p class="color2 pad_bot1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
							<p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
						</div>
						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minusi quod maxime placeat facere possimus omnis voluptas assumenda est omnis dolor repellendus. Temporibus autem quibusdam aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
						<a href="#" class="button1">Read More</a> -->
						<iframe src='http://cdn.knightlab.com/libs/timeline/latest/embed/index.html?source=0ApnjBLMgRJfodGZHM2t0WEhXaE9qMFk5cExJX01SMlE&font=Bevan-PotanoSans&maptype=toner&lang=en&height=650' width='100%' height='650' frameborder='0'></iframe>
					</div>
					<div class="col1" style="margin-top:2%; margin-bottom:2%;">						
						<a class="twitter-timeline"  href="https://twitter.com/eprtelecom"  data-widget-id="351815889387130880">Tweets de @eprtelecom</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
						</script>
					</div>
				</div>
			</article>
		</div>

		<!-- <div class="bg1">
			<div class="main">
				<article id="content2">
					<div class="wrapper">
						<h3>Notre histoire</h3>
						<div class="col1 marg_right1">
							<h3 class="color1">5 mars<br /> 2013</h3>
							<p>Fondation du club</p>
							
						</div>
						<div class="col1 marg_right1">
							<h3 class="color1">12 novembre 2013</h3>
							<p>Notre 1er atelier participatif : L’art du pitch</p>
							<a href="#" class="button1">Read More</a>
						</div>
						<div class="col1 marg_right1">
							<h3 class="color1">25 juin<br />2013</h3>
							<p>Notre 1ère conférence : Sur la route de la Silicon Valley</p>
							<a href="#" class="button1">Read More</a>
						</div>
						<div class="col1">
							<h3 class="color1">11 avril<br /> 2013</h3>
							<p>Notre 1ère visite : Spark</p>
							<a href="#" class="button1">Read More</a>
						</div>
					</div>
				</article>
			</div>
		</div> -->
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
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
	</body>
</html>