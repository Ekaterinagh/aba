<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
require_once('templates/top.php');?>
<div class="capturetext">INSCRIPTION
</div>
<?php 
//print_html($_POST);
if($_POST){
	$err=[];
	$Prenom=$_POST['Prenom'];
	$NomdeFamille=$_POST['NomdeFamille'];
	$Email=$_POST['Email'];
	$MotdePasse=$_POST['MotdePasse'];
	$MotdePasseConfirmation=$_POST['MotdePasseConfirmation'];
	$inlineRadioOptions=$_POST['inlineRadioOptions'];
	if($MotdePasse==$MotdePasseConfirmation){
	}
	else{
		$err[]="password is not correct";
	}
	$query="SELECT * FROM users WHERE email='$Email'";
	$adr=query_execute($db_con, $query);
	/*$addr=mysqli_query($db_con, $query);
	if(!$adr){
		exit($query); //test
	}*/
	if(mysqli_num_rows($adr)>0){
		$err[]='This email is already existe';
	}
	foreach($err as $one){
		echo "<p style='color:red' class='error'>";
		echo $one;
		echo "</p>";
	}	
	if (empty($err)){
		$query="INSERT INTO users VALUES(NULL, 
										'$Prenom', 
										'$NomdeFamille', 
										'$Email', 
										'$MotdePasse', 
										NOW(), 
										NOW(), 
										'unblock', 
										'$inlineRadioOptions')";
		query_execute($db_con,$query);
		/*$in=mysqli_query($db_con, $query);
		if(!$in){
			exit($query); //test
		}
		else{*/
			page_refresh('login.php');
			/*?>
			<script>
			document.location.href='login.php';
			</script>
			<?php 
		}*/
	}
}
?>
<form method='POST'class="form-horizontal">
	<div class="form-group">
		<label for="Prenom" class="col-xs-3 control-label">Prenom:</label>
		<div class="col-xs-9">
			<input required type="text" class="form-control" name="Prenom" id="Prenom" placeholder="Prenom">
		</div>
	</div>
	<div class="form-group">
		<label for="NomdeFamille" class="col-xs-3 control-label">Nom de famille:</label>
		<div class="col-xs-9">
			<input required type="text" class="form-control" name="NomdeFamille" id="NomdeFamille" placeholder="Nom de famille">
		</div>
	</div>
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
		<label for="MotdePasseConfirmation" class="col-xs-3 control-label">Mot de passe confirmation:</label>
		<div class="col-xs-9">
			<input required type="password" class="form-control"  name="MotdePasseConfirmation" id="MotdePasseConfirmation" placeholder="Mot de passe confirmation">
		</div>
	</div>
	<div class="col-xs-offset-3 col-xs-9">
		<label class="radio-inline">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="femme"> Femme
		</label>
		<label class="radio-inline">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="homme"> Homme
		</label>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			</br>
			<button type="submit" class="btn btn-default">Creér un compte</button>
		</div>
	</div>
</form>
<?php require_once('templates/bottom.php');?>
