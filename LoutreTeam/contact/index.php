<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<title>Contact | LoutreTeam</title>
	</head>

	<body>
    <h1>Contact</h1>

	<nav>
			<ul>
				<li><h2>|<a href="../" class="menu">Acceuil</a>|</h2></li>
				<li><h2>|<a href="../contact" class="menu">Contact</a>|</h2></li>
				<li><h2>|<a href="../faq" class="menu">FAQ</a>|</h2></li>
			</ul>
		</nav>

	<h3>Pour me contacter vous pouvez utiliser divers moyens </br> si vous avez des suggestions, propositions, des questions non inscrites dans la FAQ ou autre :</h3>

	<p>Pour me contacter sur Skype cliquez <a href="skype:kiaxsis?chat">ici</a></p>

	<p>Pour voir mes lives vous pouvez me follow sur Twich cliquez <a href = "http://www.twitch.tv/loutregaroute">ici</a> </br>Vous pouvez  voir les lives en direct a patrir du site :p </br> <iframe src="http://www.twitch.tv/loutregaroute/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe><a href="http://www.twitch.tv/loutregaroute?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline;"></a></p>

	<p>Pour m'envoyer un message remplissez ce formulaire ci-dessous</p>

	<form method="POST" action="traitement_contact.php">
		<p><label for="Pseudo" >Votre pseudo: </label> <input type="text" name="Pseudo" size="15" maxlength="20" placeholder="Ex: Marcel" id="Pseudo_contact" /></p>
		<p><label for="Age">Votre age: </label> <input type="number" name="Age" size="5" maxlength="10" placeholder="Ex: 21" id="Age_contact" min="10" max="100" /></p>
		<p><label>Votre message</label> <input type="text" name="message_contact" size="50" maxlength="1000" id="message_contact" /></p>
		<p><input type="submit" value="Envoyer" /></p>
	</form>

	<h3>Cliquez <a href="../">ici</a> pour retournez sur la page d'accueil</h3>
	</body>
</html>
