<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
	if ($_GET['url']){
		$url=$_GET['url'];
	}else{
		$url='index';
	};
	
	
	
	require_once('templates/top.php');
	$query="SELECT * FROM maintexts WHERE url='$url'";
	//echo $query;
	$adr=query_execute($db_con,$query);
	/*$adr=mysqli_query($db_con, $query);
	if(!$adr){
		exit('error query');
	}*/
	$result=mysqli_fetch_array($adr);
	//print_html($result);
?>
				<h2 class="capturetext"><?=$result['name'];?></h2>
					<h3 class="indextext">
						<p><?=$result['body'];?></p>
					</h3>
				<div class="empty" align="center"> </div>
				<h4 style="text-align: center;">		   
				<img class="big_picture" data-src="media/img/salon_big.png" src="media/img/salon.png" border="2"/> 	
				<img class="big_picture" data-src="media/img/tattoback_big.png" src="media/img/tattoback.png" border="2"/> <img class="big_picture" data-src="media/img/piercing4_big.png" src="media/img/piercing4.png" border="2"/> 
				<img class="big_picture" data-src="media/img/tatoo1_big.png" src="media/img/tatoo1.png" border="2"/> 
				<img class="big_picture" data-src="media/img/stand_big.png" src="media/img/stand.png" border="2"/> 	
				</h4>
				<br/>
<?php require_once('templates/bottom.php');?>
