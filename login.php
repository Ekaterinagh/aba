<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
require_once('templates/top.php');?>
<div class="capturetext">CONNEXION
</div>
<?php 
if($_POST){
	$err=[];
	$Email=$_POST['Email'];
	$MotdePasse=$_POST['MotdePasse'];
	$query="SELECT *FROM users WHERE
			email='$Email'AND
			password='$MotdePasse'";
	$adr=query_execute($db_con,$query);
	/*$adr=mysqli_query($db_con,$query);
	if(!$adr){
				exit($query); //test
			}*/
	if(mysqli_num_rows($adr)>0){
		$user=mysqli_fetch_array($adr);
		$_SESSION['user_id']=$user['id'];
		page_refresh('home.php');
			 /* ?>
				<script>
				document.location.href='index.php';
				</script>
				<?php */
	}
	else{
		echo"erreur d'authentification";
	}
}
?>
<form method='POST'class="form-horizontal">	
	<div class="form-group">
		<label for="Email" class="col-xs-3 control-label">Email adresse:</label>
		<div class="col-xs-9">
			<input required type="email" class="form-control" name="Email" id="Email" placeholder="Email adresse">
		</div>
	</div>
	<div class="form-group">
		<label for="MotdePasse" class="col-xs-3 control-label">Mot de passe:</label>
		<div class="col-xs-9">
			<input required type="password" class="form-control" name="MotdePasse" id="MotdePasse" placeholder="Mot de passe">
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			<button type="submit" class="btn btn-default">Connexion</button>
		</div>
	</div>
</form>
<?php require_once('templates/bottom.php');?>
