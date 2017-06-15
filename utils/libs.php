<?php
function print_html($result){
	echo"<pre>";
	print_r($result);
	echo"</pre>";
}
function page_refresh($page){
	?>
	<script>
	document.location.href="<?=$page?>";
	</script>
	<?php
}
function query_execute($db_con,$query){
	$adr=mysqli_query($db_con, $query);
	if(!$adr){
		exit($query); //temp
	}
	return $adr;
}
?>
