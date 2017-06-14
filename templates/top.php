<?php session_start();
require_once('config/config.php');
include_once('utils/libs.php');
?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
		<?php
		//phpinfo(); serverinfo();
		if(isset($title)){
			echo $title;
		}else{
			echo"AMERICAN BODY ART - TATOUEUR PARIS ";
		}?>
		</title>
		<meta name="description" content="<?=(isset($title))?$title:"Tatoo et piercing";?>">
		<meta name="keywords" content="<?=(isset($title))?$title:"tattoo, piercing, art";?>">
		<link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="media/css/style.css"/>
		<?php
		if($_SESSION['user_id']){
			?>
			<script src="/media/js/home.js">
			</script>
			<script src="/media/ckeditor/ckeditor.js">
			</script>
			<?php
		}
		?>
	</head>
	<body>
		<header class="header">
			<img src="media/img/logo.png" class="logo" />	
			<h1 class="logotext">
				<br/>
				<font size="+2" color="gray">AMERICAN BODY ART</font>
				<br/>
				<font color="red">tatouage et piercing</font>
				<br/>1er sur le tatouage à Paris
			</h1>
			<nav class="menu">
				<a href="/">ACCUEIL</a>
				<a href="index.php?url=tatouage">TATOUAGE</a>
				<a href="index.php?url=piercing">PIERCING</a>
				<a href="/">GALERIE</a>
				<a href="index.php?url=contacts">CONTACTS</a>
				
			</nav>		
		</header>
		<br style="clear:both"/>
		<div class="boot"> 
			<div class="col-md-2">
				<br/>
				<a class="btn btn-default btn-block" href="#"><b>Book tatoo</b></a> 
				<a class="btn btn-default btn-block" href="#"><b>Book piercing</b></a>
				<a class="btn btn-default btn-block" href="home.php"><b>Blog</b></a>
				<?php
				if (isset($_SESSION['user_id'])){				
					?>
					<a class="btn btn-default btn-block" href="logout.php"><b>Déconnexion</b></a>
					<?php
				}
				else{
					?>
					<a class="btn btn-default btn-block" href="login.php"><b>Connexion</b></a>
					<a class="btn btn-default btn-block" href="register.php"><b>Creér un compte</b></a>
					<?php
				}
				?>
			</div>
			<article class="col-md-9">