<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
	if ($_GET['url']){
		$url=$_GET['url'];
	}else{
		$url='index';
	};
	require_once('templates/top.php');
	$query="SELECT*FROM maintexts WHERE url='$url'";
	//echo $query;
	$adr=mysqli_query($db_con, $query);
	if(!$adr){
		exit('error query');
	}
	$result=mysqli_fetch_array($adr);
	/*echo"<pre>";
	print_r($result);
	echo"</pre>";*/
	
?>
				<h2 class="capturetext"><?=$result['name'];?></h2>
					<h3 class="indextext">
						<p><?=$result['body'];?></p>
					</h3>
				<h4 style="text-align: center;">		   
					<a href="#"> <img src="media/img/salon.png" border="2"/> </a>		
					<a href="#"> <img src="media/img/tattoback.png" border="2"/> </a>		
					<a href="#"> <img src="media/img/inside.png" border="2"/> </a>
					<a href="#"> <img src="media/img/tattoarm.png" border="2"/> </a>
					<a href="#"> <img src="media/img/stand.png" border="2"/> </a>		
				</h4>
				<br/>
<?php require_once('templates/bottom.php');?>
