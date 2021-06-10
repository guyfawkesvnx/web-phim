




<?php
	$idPhim = $_GET["id"];
		
	if(isset($_POST["comment"])){
		//có nhap name chưa
		
		$mess=$_POST["txtmess"];
		if ( !(isset($_SESSION["idUser"])) ){
		echo"<script type='text/javascript'>";
				echo" alert('Đăng nhập user & password để bình luận!!!')";
			echo"</script>";
		}
		if(isset($_SESSION["idUser"])){
			$idUser=$_SESSION["idUser"];
			
			$qr="
			INSERT INTO comment	VALUES(null,'$mess',now(),'$idPhim','$idUser')
				";
			mysql_query($qr);
			echo"<script type='text/javascript'>";
				echo" alert('Bình luận của bạn đã được gửi thành công!!! ')";
			echo"</script>";
		}
	}
?> 
 
 
 
 <?php
	$idPhim = $_GET["id"];
	settype($idPhim,"int");
?>


 <?php
	
$Phim = ThongTinPhim($idPhim);
$row_phim = mysql_fetch_array($Phim);
?>
 
   
         <div class="slide">
        
            <a href="index.php?p=xemphim&Ten_phim=<?php echo $row_phim['Ten_phim']?>&id=<?php echo $row_phim['id']?>">
                <img src="./images/images1/<?php echo $row_phim['Hinh_2'] ?>" title="xem phim <?php echo $row_phim['Ten_phim'] ?> -<?php echo $row_phim['Ten_phim_2'] ?>">
            </a>
       
    </div>
     
     
      <div id=main1>  
        <div class="blockboby">
         <div class="poster">
         	<a href="index.php?p=xemphim&Ten_phim=<?php echo $row_phim['Ten_phim']?>&id=<?php echo $row_phim['id']?>"><img src="./images/images1/<?php echo $row_phim['Hinh'] ?>" title="xem phim <?php echo $row_phim['Ten_phim'] ?> -<?php echo $row_phim['Ten_phim_2'] ?>"/></a><br/>
         </div>
         <h1 class="title "> <?php echo $row_phim['Ten_phim'] ?></h1>
         
         
         
				 
         
         
         
         
         
         
         <div class="table">
         	<d1 class ="col1">
        	    <dt>Avengers:</dt>	
         		<dd ><?php echo $row_phim['Ten_phim_2'] ?> (<?php echo $row_phim['NamSX'] ?>)</dd>
         	    <dt>Status:</dt>	
         		<dd class="status"><?php echo $row_phim['So_tap'] ?></dd>
         		<dt>Đạo diễn:</dt>
         		<dd><?php echo $row_phim['Dao_dien'] ?></dd>
         		<dt>Diễn viên:</dt>
         		<dd><?php echo $row_phim['Dien_vien'] ?> </dd>
         		<dt>Thể loại:</dt>
         		<dd> Phim <?php echo $row_phim['Ten_the_loai'] ?></dd>
         		
         		
         		<a  href="index.php?p=xemphim&Ten_phim=<?php echo $row_phim['Ten_phim']?>&id=<?php echo $row_phim['id']?>" title="Xem Phim"> 
         		<div class="nut_xem_phim"> XEM PHIM </div> </a> 
         		
         	</d1>
         	<dl class="col2">								
				<dt>Quốc gia:</dt>
				<dd><?php echo $row_phim['Ten_quoc_gia'] ?>
				</dd>
				<dt>Thời lượng:</dt>
				<dd><?php echo $row_phim['Thoi_luong'] ?> Phút</dd>
				<dt>Lượt xem:</dt>
				<dd><?php echo $row_phim['Luot_xem'] ?></dd>								
		    </dl>
         
         <div id="fb-root">
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-like" data-href="index.php?p=xemphim&Ten_phim=<?php echo $row_phim['Ten_phim']?>&id=<?php echo $row_phim['id']?>" 
			data-layout="button_count" data-action="like" data-size="large" 
			 data-show-faces="true" data-share="true"></div>

		 </div>
         
         

         </div>
         
    </div>
</div>   
 
     
           
            <div class= "noidung">
            <h4>Nội dung Phim</h4>
             <p>
             	<?php echo $row_phim['Noi_dung'] ?>
             </p>
             </div>
		 </div>
		</div>	
    
  		
  		<div >
  			<fieldset id="Comment">
  				<legend><h2><b style="color:#270088">Bình luận</b></h2></legend>
  				<form action="index.php?p=thongtin&Ten_phim=<?php echo $row_phim['Ten_phim']?>&id=<?php echo $row_phim['id']?>" method="post">
  					<table >
  						
  						<tr>
  							<td><img class="hinh_cm" src="./images/bieutuong.jpg" width="60px";/></td>
							<td><textarea class="textarea" name="txtmess" placeholder="Thêm bình luận..."></textarea></td>
							
  						</tr>
  						<tr>
  							<td></td>
  							<td></td>
  							<td><input type="submit" class="btn_comment" value="Đăng" name="comment"/></td>
  						</tr>
  					</table> 					
  				</form>
  				<div align="center">-------------------------------------------------------------</div>
  				
  			<div id="show-comment">
  			 
			<?php
			$comment1 = comment($idPhim);
			while($row_comment = mysql_fetch_array($comment1)){
			?>	
  			<div class="comm">
  				<img class="hinh_cm" src="./images/bieutuong.jpg" width="60px";/>
  				<div class="mess" >
  					<p><font style="color:#365899; font-size: 21px; margin-right: 10px;"><?php echo $row_comment['Username'] ?>! </font><span style="color:#767100"><?php echo $row_comment['Time'] ?></span></p>
  					<p class="mess1"><?php echo $row_comment['Message'] ?></p>
  				</div> 
  				<div style="clear: left"></div>
  				
  			</div>
			<?php
					}
			?>			
  		</div>
  			</fieldset>
  			
  			
     
  		</div>
  		
			
			
		
	 