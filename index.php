<!--Page Principale-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>LaVille</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/contextMenu.css"/>
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/prompt.css">
	</head>
	<body id="body">
		
		<!-- <div id="header" class="sticky">
			<div id="logo">
				<h1>LaVille</h1>
			</div>
			<div class="buttons">
				<a class="home" id="header-button-active">Home</a>
				<a class="connect">Connexion</a>
				<a href="test" class="tests">Tests</a>
			</div>
		</div> -->
		<?php include "header-home.php" ?>

		<div id="content">
		
			<div id="welcome-message">
				<h1>LA VILLE</h1>
				<h2>Comme vous ne l'avez jamais vue</h2>
				<button>Explorer</button>
			</div>
			
			<div id="background-about" class="hidden">
				<img src="images/background-about.jpg" alt=""/>
			</div>
	   
			<div id="prompt" class="inactive">
	
				<div id="header-prompt">
					<div id="close-background">
						<p id="close">X</p>
					</div>
					
				</div>
	
				<div id="content">
					<div class="text">
						<h2>Quelle ville voulez vous découvrir ?</h2>
					</div>
					<div class="text-background">
						<div class="input">
							<form method="post" action="form.php">
								<input type="text" name="ville" id="ville" placeholder="Entrez une ville"/>
								<input type="submit" value="Valider" id="send"/>
							</form>
						</div>
						</div>   
				</div>
			</div>
		</div>
		
		<div id="cntnr">
			<ul id="items">
				<li>Copier</li>
				<li>Coller</li>
				<li>Supprimer</li>
			</ul>
			<hr/>
			<ul id="items">
				<li id="buttonTest">Retour</li>
			</ul>
		</div>

		<script src="js/app.js"></script>
		<script src="js/context-menu"></script>
		<script src="js/header.js"></script>
	</body>
</html>
