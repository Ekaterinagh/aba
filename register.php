<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
require_once('templates/top.php');?>
<div class="capturetext">INSCRIPTION</h2>
<p>
</p></div>
<form method='POST'class="form-horizontal">
	<div class="form-group">
		<label for="Prenom" class="col-xs-3 control-label">Prenom:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" id="Prenom" placeholder="Prenom">
		</div>
	</div>
	<div class="form-group">
		<label for="NomdeFamille" class="col-xs-3 control-label">Nom de famille:</label>
		<div class="col-xs-9">
			<input type="text" class="form-control" id="NomdeFamille" placeholder="Nom de famille">
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-xs-3 control-label">Email adresse:</label>
		<div class="col-xs-9">
			<input type="email" class="form-control" id="Email" placeholder="Email adresse">
		</div>
	</div>
	<div class="form-group">
		<label for="MotdePasse" class="col-xs-3 control-label">Mot de passe:</label>
		<div class="col-xs-9">
			<input type="password" class="form-control" id="MotdePasse" placeholder="Mot de passe">
		</div>
	</div>
	<div class="form-group">
		<label for="MotdePasseConfirmation" class="col-xs-3 control-label">Mot de passe confirmation:</label>
		<div class="col-xs-9">
			<input type="password" class="form-control" id="MotdePasseConfirmation" placeholder="Mot de passe confirmation">
		</div>
	</div>
	<div class="col-xs-offset-3 col-xs-9">
		<label class="radio-inline">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Femme
		</label>
		<label class="radio-inline">
			<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Homme
		</label>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			<div class="checkbox">
			<label><input type="checkbox">Souvient-moi</label>
		</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-offset-3 col-xs-9">
			<button type="submit" class="btn btn-default">Creer un compte</button>
		</div>
	</div>
</form>
<?php require_once('templates/bottom.php');?>
