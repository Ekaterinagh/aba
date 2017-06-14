<?php $title="AMERICAN BODY ART - TATOUEUR PARIS";
 require_once('templates/top.php');?>
 <div class="capturetext">BLOG</div>
 <?php 
if ($_SESSION['user_id']){
	$user=$_SESSION['user_id'];
	if($_POST){
		$err=[];
		$arrcom=[];
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		$picture=$_POST['picture'];
		if($_FILES){
			$filename='/uploads/'.$_FILES['picture']['name'];
			$move=move_uploaded_file($_FILES['picture']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$filename);
			if(!$move){
				exit('error picture');
			}
		}else{
				$filename="";
			}
		foreach($err as $one){
			echo "<p style='color:red' class='error'>";
			echo $one;
			echo "</p>";
		}	
		if (empty($err)){
			$query="INSERT INTO comments VALUES(NULL, 
											'$user',
											'$name',
											'$filename',
											'$comment', 
											NOW())";
			$in=query_execute($db_con,$query);
			/*$in=mysqli_query($db_con, $query);
			if(!$in){
				exit($query); //test
			}*/
			page_refresh('home.php');
				/*?>
				<script>
				document.location.href='home.php';
				</script>
				<?php*/
		}
	}
	$query="SELECT * FROM comments WHERE user_id='$user'";
	$com=query_execute($db_con,$query);
	/*$com=mysqli_query($db_con, $query);
	if(!$com){
		exit($query); //test
		}*/
	$n=mysqli_num_rows($com); 
	if($n>0){
		echo "<div class='table-responsive'>
		<table width=100% class='table table-bordered table-stripted'> 
		<tr><th>ID</th><th>Nome</th><th>Image</th><th>Comment</th><th>Modifier</th></tr>"; 
		while($arrcom=mysqli_fetch_array($com)){ 
			echo 
			"<tr><td>", $arrcom['id'], 
			"</td><td>", $arrcom['name'], 
			"</td><td>"; 
			if($arrcom['picture'] != ''){
				echo "<img src='".$arrcom['picture']."'/>"; 
			}else{
				echo '<img src="/uploads/salon.png"/>';
			}
			echo "</td><td>",$arrcom['comment'], 
			"</td>";
			echo "<td><a href='edit.php?id=".$arrcom['id']."'>Edit</a>";
			echo "</br>";
			echo "<a href=# onclick=\"delete_position('dell.php?id=".$arrcom['id']."', 'Do u want to delete?')\">Delete</a></td>";
			echo"</tr>"; 
		}
		echo "</table>
		</div>"; 
	}
	/*else{
		echo "no SELECT ". $query;
	}*/
	?>
	<form enctype="multipart/form-data" method='POST'>
	<div class="form-group">
		<label for="name">Nom:</label>
		<input required type="text" class="form-control" name="name" id="name">
	</div>
	<div class="form-group">
		<label for="comment">Exprimez-vous:</label>
		<textarea required name="comment" id="comment" class="form-control ckeditor" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="picture">Image télécharger</label>
		<input type="file" name="picture" id="picture">
    </div>
	<button type="submit" class="btn btn-default">Publier</button>
	<div>
	</br>
	</div>
	</form>
	<?php
}
else{
	echo"erreur d'authentification";
}
require_once('templates/bottom.php');?>
