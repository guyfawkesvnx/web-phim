<?php
	

	ob_start();//chuyển hướng không bị lỗi
	session_start();
	if ( !(isset($_SESSION["idUser"]) && $_SESSION["idGroup"]==1) ){
		header("location:../index.php");
	}
	require "../lib/dbcon.php";
	require "../lib/quantri.php";

	if( isset($_GET["p"]) )
		$p = $_GET["p"];
	else	
		$p = "";

?>
<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <title>Trang Chủ</title>
     <link type="text/css" rel="stylesheet" href="../css/admin.css"/>
</head>

<body>
<table align="center" width="1000">
  <tbody>
    <tr>
      <td id="tieude">TRANG QUẢN TRỊ
      	<div style="width:200px; float: right">
      		<div>Chào Bạn <?php echo $_SESSION["Username"] ;?>!</div>
      	</div>
      </td>
    </tr>
    <tr>
      <td class="hang_2"><?php require"menu.php";?></td>
    </tr>
    <tr>
        <?php 
		 		switch($p){
					case "listphim" : require "listphim.php"; break;
					case "them_phim" : require "them_phim.php"; break;
					case "sua_phim" : require "sua_phim.php"; break;
					case "listtheloai" : require "listtheloai.php"; break;
					case "them_theloai" : require "them_theloai.php"; break;
					case "sua_theloai" : require "sua_theloai.php"; break;
					case "listquocgia" : require "listquocgia.php"; break;
					case "them_quocgia" : require "them_quocgia.php"; break;
					case "sua_quocgia" : require "sua_quocgia.php"; break;
					case "listcomment" : require "listcomment.php"; break;
					case "listuser" : require "listuser.php"; break;
					case "sua_user" : require "sua_user.php"; break;
					default : require "trangchu_admin.php";
				}
		 ?>
    </tr>
  </tbody>
</table>
<p>&nbsp;	</p>
     
      
   


</body>
</html>