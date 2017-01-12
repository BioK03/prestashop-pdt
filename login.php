<?php

session_start();

if(isset($_GET["log"])){
	$_SESSION["log"] = $_GET["log"];
	header('Location: index.php');
}else{
	if(isset($_SESSION["log"])){
		header('Location: index.php');
	}
}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<style type="text/css">
			body, html {
				height: 100%;
				width: 100%;
				display: block;
				padding: 0;
				margin: 0 auto;
				
				overflow: hidden;
			}
			
			.container img {
				width: 50%;
				margin-left: 25%;
				margin-top: 5em;
				display: block;
			}
			
			form {
				width: 100%;
				display: block;
				text-align: center;
			}
			
			input[type="email"]{
				
			}
			
			div.imgContainer {
				display: inline-block;
				width: 25%;
				height: 100%;
			}
			
			.imgContainer img {
				width: 100%;
				display: block;
			}
			
			div.container {
				position: absolute;
				top: 0;
				right: 0;
				width: 75%;
				display: inline-block;
				height: 100%;
			}
			
			input[type="submit"]{
				background-color: #333333;
				color: #FFFFFF;
				border: 3px solid #333333;;
			}
			
			@media (max-width: 640px) {
				body {
					font-size: 1.5em !important;
					
				}
				
				.imgContainer {
					display: none !important;
				}
				
				.container {
					width: 100% !important;
				}
			}
		</style>
	</head>
	<body>
		<div class="imgContainer">
			<img src="http://chbe.fr/pdt/modules/homeslider/images/a92d35bac85200cb5d451df580a4e6772336c8f5_timthumb.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/090f51adc0c8aca8a25492f5b36af802f7c8fe0c_nourriture.jpg"/>
			<img src="http://chbe.fr/pdt/modules/homeslider/images/57f3970fd4978248d0a19ea144a52278797a18cb_desserts.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/c991ef327aa6d2dd3bb144c7e760df1f15b74400_charcuterie.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/b143fc1e3a977af3dc318a78cb9be12fb27fc553_fromage.jpg"/>
			<img src="http://chbe.fr/pdt/modules/homeslider/images/a92d35bac85200cb5d451df580a4e6772336c8f5_timthumb.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/090f51adc0c8aca8a25492f5b36af802f7c8fe0c_nourriture.jpg"/>
			<img src="http://chbe.fr/pdt/modules/homeslider/images/57f3970fd4978248d0a19ea144a52278797a18cb_desserts.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/c991ef327aa6d2dd3bb144c7e760df1f15b74400_charcuterie.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/b143fc1e3a977af3dc318a78cb9be12fb27fc553_fromage.jpg"/>
			<img src="http://chbe.fr/pdt/modules/homeslider/images/a92d35bac85200cb5d451df580a4e6772336c8f5_timthumb.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/090f51adc0c8aca8a25492f5b36af802f7c8fe0c_nourriture.jpg"/>
			<img src="http://chbe.fr/pdt/modules/homeslider/images/57f3970fd4978248d0a19ea144a52278797a18cb_desserts.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/c991ef327aa6d2dd3bb144c7e760df1f15b74400_charcuterie.jpg"/>
			<img src="http://chbe.fr/pdt/modules/themeconfigurator/img/b143fc1e3a977af3dc318a78cb9be12fb27fc553_fromage.jpg"/>
		</div><!--
		--><div class="container">
			<img src="img/loginPage/logo.png"/>
			<form action="login.php" method="GET">
				<h3>Connexion requise pour acc&eacute;der au site !</h3><br/>
				<input name="log" type="email" placeholder="Votre e-mail" required="required" />
				<input type="submit"/><br/>
				<p>Produits du Tiroir, site de vente priv&eacute;e de produits du terroir.</p>
			</form>
			
		</div>
	</body>
</html>