<?php
	

	ob_start();//chuyển hướng không bị lỗi
	session_start();
	if ( !(isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==1) ){
		header("location:../index.php");
	}
	require "../lib/dbcon.php";
	require "../lib/quantri.php";
?>


<?php
	$idUser =$_GET["idUser"];
	settype($idUser,"int");
	$qr = "
				DELETE FROM user
				WHERE idUser='$idUser'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listuser");
?>