<?php
	include('connection.php');
	if (isset($_GET['id'])) {
 		$query="delete from groupes where group_id=:group_id";
	$quer=$pdo->prepare($query);
	$quer->execute(array('group_id'=>$_GET['id']));
	header('location:viewGroups.php');
	}
 ?>