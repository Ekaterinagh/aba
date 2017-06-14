<?php 
require_once('templates/top.php');
if($_GET['id']){
require_once('config/config.php');
$id=(int)$_GET['id'];
$query="SELECT * FROM comments WHERE id='$id'";
//echo $query;
$adr=mysqli_query($db_con,$query);
if(!$adr){
	exit('error');	
}
if(mysqli_num_rows($adr)>0){
	$res=mysqli_fetch_array($adr);
	if(file_exists($res['picture'])){
	@unlink($res['picture']);	
	}
	$query="DELETE FROM comments WHERE id='$id'";
	query_execute($db_con,$query);
	/*$adr=mysqli_query($db_con,$query);
	if(!$adr){
		exit('error');	
	} */
	page_refresh('home.php');
	/*?>
	<script>
		document.location.href='home.php';
	</script>
	<?php*/
}
}
?>