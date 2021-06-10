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
	$MSQG =$_GET["MSQG"];
	settype($MSQG,"int");
	$qr = "
				DELETE FROM quoc_gia
				WHERE MSQG='$MSQG'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listquocgia");
?>