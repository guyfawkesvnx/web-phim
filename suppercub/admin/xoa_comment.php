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
	$CM_ID =$_GET["CM_ID"];
	settype($CM_ID,"int");
	$qr = "
				DELETE FROM comment
				WHERE CM_ID='$CM_ID'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listcomment");
?>