<?php
	session_start();
	require "lib/dbCon.php";
	require "lib/main_trangchu.php";

	if( isset($_GET["p"]) )
		$p = $_GET["p"];
	else	
		$p = "";
?>
<?php
// kiem tran login
	if(isset($_POST["btnLogin"]) ){
		$un = $_POST["txtUn"];
		$pa = $_POST["txtPa"];
		$pa = md5($pa);//ma hoa password
		$qr = "
			SELECT * FROM user
			WHERE Username ='$un'
			AND Password = '$pa'
		";
		$user = mysql_query($qr);
		if(mysql_num_rows($user)==1){
			//dang nhap dung
			$row = mysql_fetch_array($user);
			$_SESSION["idUser"] = $row['idUser'];
			$_SESSION["Username"] = $row['Username'];
			$_SESSION["idGroup"] = $row['idGroup'];
		}
	}
		
?>
<?php
	if(isset($_POST["btnThoat"])){
		unset($_SESSION["idUser"]);
		unset($_SESSION["Username"]);
		unset($_SESSION["idGroup"]);
	}
?>
<!doctype html>
<html>
<head>
       <meta charset="utf-8">
          <title>Suppercub.com</title>
     <link type="text/css" rel="stylesheet" href="./css/trangchu.css"/>
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./jquery/jquery-2.1.4.min.js"></script>
</head>

<body>
     
      
   <header> 
         <?php require"blocks/header.php"; ?>
         
	 </header>
         
     <nav>
          <?php require"blocks/nav.php"; ?>
         
	 </nav>
	  
	 <section> 
            <?php 
		 		switch($p){
					case "thongtin" : require "pages/thongtin.php"; break;
					case "xemphim" : require "pages/xemphim.php"; break;
					case "timkiem" : require "pages/timkiem.php"; break;
					case "theloaiphim" : require "pages/theloaiphim.php"; break;
					case "quocgiaphim" : require "pages/quocgiaphim.php"; break;
					case "loaiphim" : require "pages/loaiphim.php"; break;
					default : require "pages/trangchu.php";
				}
		 ?>
	 </section>	
	     
	 <footer>
     	
	     <?php require"blocks/footer.php"; ?>
	     
	     
		
     </footer>	

	<script type="text/javascript">
		$().ready(function(){
			$(window).scroll(function(){
				var top = $(this).scrollTop();
				if(top > 100){
					$("#top").fadeIn('slow');
				}else {
					$("#top").fadeOut('slow');
				}
			});
			$("#top").click(function(){
				$("body").animate({scrollTop:0},456);
			});
		});
	</script>
	
	<style type="text/css">
		
	</style>
	<a href="#" id="top"><img src="./images/top3.png" /></a>
	
</body>
</html>