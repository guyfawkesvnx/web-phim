
	
<div class="section_main1">  
   
   
   	<?php
			$MSTL = $_GET["MSTL"];
			settype($MSTL,"int");
			$menutheloaiphim = MenuTheLoaiPhim($MSTL);
			$row_menutheloaiphim = mysql_fetch_array($menutheloaiphim);
   
   ?>
    <div id=main>
         <div class="all">	
         	<h4 align="center">Phim <?php echo $row_menutheloaiphim['Ten_the_loai'] ?></h4>
         </div>
         
         
         
         <?php
			$MSTL = $_GET["MSTL"];
			settype($MSTL,"int");
		?>
         
         
		   <?php
			$sophim1trang = 12;
			if(isset($_GET["Trang"])){
				$trang = $_GET["Trang"];
				settype($trang,"int");
			}else{
				$trang = 1;
			}
			$from = ($trang - 1) * $sophim1trang;
		
				
			$theloaiphim = PhanTrangTheLoai($MSTL,$from, $sophim1trang);
			while($row_theloaiphim = mysql_fetch_array($theloaiphim)){
		?>
         

         <div class="sanpham1">
         	<ul>
         		<li><a href="index.php?p=thongtin&id=<?php echo $row_theloaiphim['id']?>" title="<?php echo $row_theloaiphim['Ten_phim'] ?> - <?php echo $row_theloaiphim['Ten_phim_2'] ?>">
         			<img id="hinh" src="./images/images1/<?php echo $row_theloaiphim['Hinh'] ?>"  />
         			<div class="info">
						<div class="name">
							<a href="index.php?p=thongtin&id=<?php echo $row_theloaiphim['id']?>" 	title="<?php echo $row_theloaiphim['Ten_phim'] ?> - <?php echo $row_theloaiphim['Ten_phim_2'] ?>"><?php echo $row_theloaiphim['Ten_phim'] ?></a>
						</div>
						<div class="name2"><?php echo $row_theloaiphim['Ten_phim_2'] ?></div>
					</div>
        			<div class="stats">
						<div class="year"><?php echo $row_theloaiphim['NamSX'] ?></div>
						<span class="liked"><img src="./images/xem.png" ><?php echo $row_theloaiphim['Luot_xem'] ?></span>
					</div>
         		</a></li>
         	</ul>
         </div>
         
         
         <?php
					}
			?>	
         
         
         
         <div class="phantrang">
         	
         	
         	<?php
			 	$t = PhimTheoTheLoaiPhim($MSTL);
			    $tongsophim = mysql_num_rows($t);
			 	$tongsotrang = ceil ($tongsophim/$sophim1trang);
			 	for($i=1;$i<=$tongsotrang;$i++){
			?>
			 <a <?php if($i==$trang) echo "style='background-color:#2AA5F2;color: #FFFFFF;'"; ?> href="index.php?p=theloaiphim&MSTL=<?php echo $MSTL ?>&Trang=<?php echo $i?>"><?php echo $i ?></a>
			<?php	
				}
			 ?>
         </div>
         
         
    </div>
    
    <div id= right>
       <div class="hot">
       		<h3> Phim Hot </h3>
       </div>
       
       <?php
	 		$phimmoinhat_sauphim = PhimXemNhieuNhat_SauPhim();
			while($row_phimmoinhat_sauphim = mysql_fetch_array($phimmoinhat_sauphim)){
		?>
       
       <div class="right2">  
      	   <ul>
                <li>
               <a href="index.php?p=thongtin&id=<?php echo $row_phimmoinhat_sauphim['id']?>" title="<?php echo $row_phimmoinhat_sauphim['Ten_phim'] ?> - <?php echo $row_phimmoinhat_sauphim['Ten_phim_2'] ?> (<?php echo $row_phimmoinhat_sauphim['NamSX'] ?>) ">
               <div class="avatar">
                <img  src="./images/images1/<?php echo $row_phimmoinhat_sauphim['Hinh_2'] ?>">
				 </div>
                
                <div class="ten_phim">
					<?php echo $row_phimmoinhat_sauphim['Ten_phim'] ?>
				</div>
                <div class="ten_phim_2">   
                    <?php echo $row_phimmoinhat_sauphim['Ten_phim_2'] ?> (<?php echo $row_phimmoinhat_sauphim['NamSX'] ?>)
                </div>
			   
            </a>
            <p class="view"><?php echo $row_phimmoinhat_sauphim['Luot_xem'] ?> lượt xem</p>
         
	   			</li>
		   </ul>
             
               <?php
					}
				?>	
                            
    
       	   
       </div>
       
   
</div>	
</div>	
