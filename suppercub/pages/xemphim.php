
    <?php
	$idPhim = $_GET["id"];
		
	if(isset($_POST["comment"])){
		//có nhap name chưa
		
		$mess=$_POST["txtmess"];
		if ( !(isset($_SESSION["idUser"])) ){
		echo"<script type='text/javascript'>";
				echo" alert('nhập user $ password để bình luận!!!')";
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
		if(isset($_GET["id"])){
			$idPhim = $_GET["id"];
			settype($idTin,"int");
		}else{
			$idPhim = 1;
		}
		LuotXem($idPhim);
		?>
		<?php
		$Phim = XemPhim($idPhim);
		$row_xemphim = mysql_fetch_array($Phim);
	?>
  

      
       <div class="anh_xem_phim">   
                <img src="./images/images1/<?php echo $row_xemphim['Hinh_2'] ?>" title="xem phim <?php echo $row_xemphim['Ten_phim'] ?> - <?php echo $row_xemphim['Ten_phim']?>">
       
    </div>
    
   
  <div class="video"   align="center">
  	<video  poster autoplay  controls src="./video/<?php echo $row_xemphim['video'] ?>" />
  </div>
  
  
  </div>
         <h1 class="title1 "> <?php echo $row_xemphim['Ten_phim'] ?> </h1>
         
         
         
				
         
  
  
  
  <div class="table1">
         	<d1 class ="col3">
         	    <dt>Avengers:</dt>
         		<dd class="status"><?php echo $row_xemphim['Ten_phim_2'] ?>(<?php echo $row_xemphim['NamSX'] ?>)</dd>
         		<dt>Đạo diễn:</dt>
         		<dd><?php echo $row_xemphim['Dao_dien'] ?></dd>
         		<dt>Diễn viên:</dt>
         		<dd><?php echo $row_xemphim['Dien_vien'] ?> </dd>
         		<dt>Thể loại:</dt>
         		<dd><a href="http://tvhay.org/phim-hoat-hinh/" title="Phim <?php echo $row_xemphim['Ten_the_loai'] ?>">Phim <?php echo $row_xemphim['Ten_the_loai'] ?></a></dd>
         	</d1>
         	<dl class="col4">								
				<dt>Quốc gia:</dt>
				<dd><a href="http://tvhay.org/quoc-gia/phim-nhat-ban/" rel="tag"><?php echo $row_xemphim['Ten_quoc_gia'] ?></a></dd>
				<dt>Lượt xem:</dt>
				<dd><?php echo $row_xemphim['Luot_xem'] ?></dd>								
		    </dl>
				
       			 <div id="fb-root">
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-like" data-href="index.php?p=xemphim&Ten_phim=<?php echo $row_xemphim['Ten_phim']?>&id=<?php echo $row_xemphim['id']?>" 
			data-layout="button_count" data-action="like" data-size="large" 
			 data-show-faces="true" data-share="true"></div>

		 </div>
        		
         </div>
  
     <div class="so_tap">
     	<div class="name_tap">Xem phim: <?php echo $row_xemphim['Ten_phim'] ?> 
     	</div>
     	<div class="name_F">
     		F.PRO:  
     		<a href="index.php?p=xemphim&Ten_phim=<?php echo $row_xemphim['Ten_phim']?>&id=<?php echo $row_xemphim['id'] ?>" title="<?php echo $row_xemphim['So_tap']?>"> 
		     		<input class="btn_sotap" type="submit" name="name_F" value="<?php echo $row_xemphim['So_tap']?>" />
             		</a> 
     	</div>
     </div>
     
     
     

     
  		<div >
  			<fieldset id="Comment">
  				<legend><h2><b style="color:#270088">Bình luận</b></h2></legend>
  				<form action="index.php?p=xemphim&Ten_phim=<?php echo $row_xemphim['Ten_phim']?>&id=<?php echo $row_xemphim['id']?>" method="post">
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
  			
			
			
		
	    