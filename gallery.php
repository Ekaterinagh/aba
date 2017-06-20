<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
$scripts=['/js/gallery.js'];
require_once('templates/top.php');
?>
<h2 class="capturetext">GALERIE</h2>
<br/>
<?php 
$query="SELECT * FROM galleries WHERE showhide='show'";
$adr=query_execute($db_con,$query);
while($result=mysqli_fetch_array($adr)){
		//echo $result['picture']'.'<hr/>';
		echo'<div class="col-md-2 gallery">';
		if($result['picture']!=''){
			echo "<img id=".$result['id']." src='".$result['picture']."' class='img-thumbnail'>";
		}
		else{
			echo "<img id=".$result['id']." src='/uploads/salon.png'/>";
		}
		echo'</div>';
}	
 require_once('templates/bottom.php');?>
