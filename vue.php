<?php

	class vue {


		public static function affichage()
		{
			$affichage = '';
			$affichage = $affichage.'
			<!DOCTYPE html>
			<html lang="fr">
			<head>
				<meta charset="utf-8" />
		 		<title>Crazy Lunch</title>
		 		<link rel="stylesheet" href="main.css" type="text/css"/>
		 		<script type="text/javascript" src="js/jquery1-9-1.js"></script>
		 		<script type="text/javascript" src="js/main.js"></script>

			</head>
			<body>
				<header>
					<div class="hr" ></div>
					<h1>Crazy Lunch </h1>
					<h3>Le bon déjeuner pour les pros qui bossent même à midi !</h3>
				</header>
					<div id="corps">
					<div id="nav"></div>
					<nav> <span class="red">Accueil</span> / Thèmes / Restaurants / Plats </nav>
				
					<section>
					</section>
					</div>
				<footer>
					<br />
					Projet de Web Avancé - IUT Nancy Charlemagne<br />
					GEHIN Lucas - LEJAL Simon - ROLLINGER Jerome - GOUJON Thibault
				</footer>

			</body>
			</html>
			';

			echo $affichage;
		}
	}