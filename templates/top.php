<?php require_once('config/config.php');?>
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
		<?php
		//phpinfo();server info
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
				<a href="/">ACCUEIL </a>
				<a href="index.php?url=tatouage">TATOUAGE</a>
				<a href="index.php?url=piercing">PIERCING</a>
				<a href="../register.php">GALERIE</a>
				<a href="index.php?url=contacts">CONTACTS</a>
			</nav>		
		</header>
		<br style="clear:both"/>
		<div class="boot"> 
			<div class="col-md-2">
				<br/>
				<a class="btn btn-default btn-block" href="#"><b>Book tatoo</b></a> 
				<a class="btn btn-default btn-block" href="#"><b>Book piercing</b></a>
				<a class="btn btn-default btn-block" href="#"><b>Blog</b></a>
				<a class="btn btn-default btn-block" href="#"><b>Commentaires</b></a>
			</div>
			<article class="col-md-9">