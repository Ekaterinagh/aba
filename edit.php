<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
 require_once('templates/top.php');
if($_SESSION['user_id']){
	$user=$_SESSION['user_id'];
	$id=(int)$_GET['id'];
	$query="SELECT * FROM comments WHERE id=$id AND user_id=".$_SESSION['user_id'];
	$adr=query_execute($db_con,$query);
	$com=mysqli_fetch_array($adr);
	if($_POST){
		if($_FILES){
			$filename='/uploads/'.$_FILES['picture']['name'];
			$move=move_uploaded_file($_FILES['picture']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
			if(!$move){
				exit('error picture');
			}
			if(file_exists($_SERVER['DOCUMENT_ROOT'].$com['picture'])){
				@unlink($_SERVER['DOCUMENT_ROOT'].$com['picture']);	
				} 
		}else{
				$filename=$com['picture'];
			}
		$err=[];
		$arrcom=[];
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		if (empty($err)){
			$query="UPDATE comments SET name='$name',comment='$comment', picture='$filename' WHERE id=$id AND user_id=".$_SESSION['user_id'];
			$in=query_execute($db_con,$query);
			page_refresh('home.php');
		}
	}
?>
	<form enctype="multipart/form-data" method='POST'>
	<div class="form-group">
		<label for="name">Nom:</label>
		<input required type="text" class="form-control" name="name" id="name" value=<?=$com['name'];?>>
	</div>
	<div class="form-group">
		<label for="comment">Exprimez-vous:</label>
		<textarea required name="comment" id="comment" class="form-control ckeditor" rows="3"><?=$com['comment'];?></textarea>
	</div>
	<div class="form-group">
		<label for="picture">Image télécharger</label>
		<input type="file" name="picture" id="picture">
		</br>
		<?php if($com['picture'] != ''){
				echo "<img src='".$com['picture']."'/>";				
			}else{
				echo '<img src="/uploads/salon.png"/>';
			}
			?>
    </div>
	<button type="submit" class="btn btn-default">Edit</button>
	<div>
	</br>
	</div>
	</form>
	<?php
}
else{
	echo"erreur d'authentification";
}
require_once('templates/bottom.php');
?>
