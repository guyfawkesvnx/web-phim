<div id="header1" >
		   <a  href="index.php" title="Suppercub.vn"> 
		   <img id="logo" src="./images/logo1.png"  ></a>
 </div>
 <div id="header2" >
	  	   <form action="" method="get" target="_blank">
			<input name="q" type="search" placeholder="Gõ từ khóa, tên phim cần tìm...">
			<input name="p" type="hidden" value="timkiem"/>
			</form>
			
 </div>
 <div id="header3">
		   <?php
	   		if(!isset($_SESSION["idUser"])){
				require"blocks/login.php";
			}else{
				require"blocks/hello.php";
			}
	     ?>
</div> 