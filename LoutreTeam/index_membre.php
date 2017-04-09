<?php
  session_start();
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<!--[if lt IE 9]>
            <script src="http://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
        <![endif]-->
		<link rel="stylesheet" href="style.css">
		<title>Page officiel LoutreTeam</title>
	</head>

	<body>
		<h4 id="haut"></h4>
		<h1><span class="logo"><span><img src="logo.png" alt="logo" /></span></span></h1>
		<nav>
			<ul>
				<li><h2>|<a href="../index" class="menu">Acceuil</a>|</h2></li>
				<li><h2>|<a href="../LoutreTeam/contact/index.html" class="menu">Contact</a>|</h2></li>
				<li><h2>|<a href="../faq/index.html" class="menu">FAQ</a>|</h2></li>
        <li><h4 class="menu">Bonjour <?php echo $_POST["Pseudo"] ?> </h4></li>
			</ul>
		</nav>
		<section>

			
    <section>
			<?php include("Message du jour.php"); ?>
		</section>
		<aside>

		</aside>
		<h2>Infos sur le site</h2>
		<p>Ce site internet est la propriété de LoutreGaroute qui est aussi surnomé: Max.<br />
			Ce site ce nomme LoutreTeam, mais va changer de nom a sa sortie.<br />
			Donc en gros, le site est un site internet qui va réunir des artistes de partout qui vont présenter leurs projets créatif à l'aide de leurs propre page,<br />
			(chaque personne va avoir sa propre page d'artiste) c'est un peu comme un réseau social.<br />
			Voici ce qui résume le site internet, désolé mais je ne peux en dire plus.</p>
		<h3>Personnes qui s'occupe actuellement du site :</h3>
		<ul>
			<li>LoutreGaroute (Revient peu a peu.)</li>
			<li>SparkySkio (Logo et tout ce qui concerne le style.)</li>
			<li>AdrianLeon (Gère le site durant l'absence de LoutreGaroute.)</li>
		</ul>
		<h5>Page de test supprimée</h5>
		<p><br /></p>
		<h5 class="retour">Cliquez <a href="#haut">ici</a> pour revenir en haut de la page.</h5>
		<footer>
		<iframe src="http://www.twitch.tv/loutregaroute/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe><a href="http://www.twitch.tv/loutregaroute?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline;"></a>
			<h4>©2015 Loutre-Team.</h4>
		</footer>

	</body>
</html>
