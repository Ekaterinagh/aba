<?php
$id=(int)$_POST['id'];
require_once('config/config.php');
require_once('utils/libs.php');
$query="SELECT * FROM galleries WHERE id=$id";
$res=query_execute($db_con,$query);
$result=mysqli_fetch_array($res);
echo "<div><p align='center'>".$result['name']."</p>";
echo "<p align='center'><img src='media/img/".$result['name']."_big.png'/></p></div>";
?>