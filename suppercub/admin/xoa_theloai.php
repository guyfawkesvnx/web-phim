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
	$MSTL =$_GET["MSTL"];
	settype($MSTL,"int");
	$qr = "
				DELETE FROM the_loai
				WHERE MSTL='$MSTL'
		
		";
		mysql_query($qr);
		header("location:index.php?p=listtheloai");
?>