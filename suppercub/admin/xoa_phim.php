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
	$id =$_GET["id"];
	settype($id,"int");
	$qr = "
				DELETE FROM quan_ly_phim
				WHERE id='$id'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listphim");
?>